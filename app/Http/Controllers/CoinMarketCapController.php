<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Meta;
use App\Models\Admin\Coin;
use Illuminate\Http\Request;
use App\Jobs\ProcessInsertMeta;
use App\Jobs\ProcessInsertCoins;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Response;

class CoinMarketCapController extends Controller
{

    /**
     * CMC endpoint url.
     *
     * @return void
     */
    public $url;

    /**
     * CMC endpoint url.
     *
     * @return void
     */
    public $headers = [];

    /**
     * CMC endpoint url.
     *
     * @return void
     */
    public string $key;

    /**
     * CMC endpoint url.
     *
     * @return void
     */
    public $version = "v1";


    /**
     * CMC endpoint url.
     *
     * @return void
     */
    public $metaCount;


    /**
     * CMC endpoint url.
     *
     * @return void
     */
    public $coinCount;

    /**
     * CMC endpoint url.
     *
     * @return void
     */
    public $cmcSlugs;

    /**
     * New CMC instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->url = env("CMC_API_ENDPOINT", "https://pro-api.coinmarketcap.com/{$this->version}/");
        // $this->url = env("CMC_SANDBOX_API_ENDPOINT", "https://pro-api.coinmarketcap.com/{$this->version}/");
        $this->key = env("CMC_API_KEY_COIN", "b54bcf4d-1bca-4e8e-9a24-22ff2c3d462c");

        $this->headers = [
            'X-CMC_PRO_API_KEY' => $this->key,
        ];

        $this->metaCount = Meta::count();
        $this->coinCount = Coin::count();
        $this->cmcSlugs = Coin::select("slug")->orderBy("cmc_rank")->pluck('slug')->all();
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function response($options = [], $slug = "cryptocurrency/listings/latest", $method = "get")
    {
        if ($method == "get") {
            $response = Http::acceptJson()->withHeaders($this->headers)->get("{$this->url}{$slug}", $options);
        } else {
            $response = Http::acceptJson()->withHeaders($this->headers)->post("{$this->url}{$slug}", $options);
        }
        if ($response->successful()) {
            $error_message = $response->json("status")["error_message"];
            $data = $response->json();
            // return ($error_message == "" && !empty($data)) ? $data : [];
            return (isset($data["data"]) && !empty($data["data"])) ? $data["data"] : [];
        } else {
            return [];
            // return Response::json([
            //     "status" => [
            //         "timestamp" => Carbon::now(),
            //         "error_code" => 400,
            //         "error_message" => "Invalid value for \"id\"",
            //     ]
            // ], 400);
            // $response = Http::acceptJson()->withHeaders([
            //     // 'X-CMC_PRO_API_KEY' => 'b54bcf4d-1bca-4e8e-9a24-22ff2c3d462c',
            //     'X-CMC_PRO_API_KEY' => 'e0d95675-0f1a-4ae9-8a27-5d25e24e6311',
            // ])->get($this->url, [
            //     'start' => "$start",
            //     'limit' => '5000',
            //     'convert' => 'USD'
            // ]);
            // return $response->json("data");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Coin  $coin
     * @return \Illuminate\Http\Response
     */
    public function coinData(int $page = 0)
    {
        $perPage = 5000;
        $start = $page * $perPage;
        $start = ($start == 0) ? 1 : $start;
        // $expiration = 12 * 60;
        // $cacheKey = "updateCoinData$page";
        // $updateCoinData = Cache::remember($cacheKey, $expiration * 60, function () use ($start) {
        //     return $this->response([
        //         'start' => "$start",
        //         'limit' => '5000',
        //         'convert' => 'USD'
        //     ], "cryptocurrency/listings/latest");
        // });

        $CoinData = Cache::rememberForever("CoinData_$page", function () use ($start) {
            return $this->response([
                'start' => "$start",
                'limit' => '5000',
                'convert' => 'USD'
            ], "cryptocurrency/listings/latest");
        });

        $coinlist = ($CoinData != null || is_array($CoinData)) ? array_chunk($CoinData, 300) : [];
        return $coinlist;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Coin  $coin
     * @return \Illuminate\Http\Response
     */
    public function updateCoinData(int $page = 0)
    {
        foreach ($this->coinData($page) as $key => $list) {
            ProcessInsertCoins::dispatch($list);
        }
        return "Success";
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Coin  $coin
     * @return \Illuminate\Http\Response
     */
    public function getCmcCoinSlugs(): array
    {
        return $cmcSlugs = ($this->cmcSlugs != null || is_array($this->cmcSlugs)) ? array_chunk($this->cmcSlugs, 100) : [];
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Coin  $coin
     * @return \Illuminate\Http\Response
     */
    public function metaData(int $page = 0)
    {
        $cmcSlugs = $this->getCmcCoinSlugs();
        $range = isset($cmcSlugs[$page]) ? $cmcSlugs[$page] : [];

        $this->key = env("CMC_API_KEY_META ", "b54bcf4d-1bca-4e8e-9a24-22ff2c3d462c");
        $this->headers = [
            'X-CMC_PRO_API_KEY' => $this->key,
        ];

        // return if no data available
        if (empty($range)) {
            return [];
        }

        $from = $range[0];
        $to = last($range);
        $cmcCoinList = implode(",", $range);

        // return $this->response([
        //     'slug' => "thorswap,syn-city,vodka-token",
        // ], "cryptocurrency/info");

        // return $this->response([
        //     'slug' => "$cmcCoinList",
        // ], "cryptocurrency/info");

        if ($this->metaCount != $this->coinCount) {
            $checkCoinMetaData = Cache::get("CoinMetaData_{$from}_{$to}");
            if (empty($checkCoinMetaData)) {
                Cache::forget("CoinMetaData_{$from}_{$to}");
                Artisan::call('meta:update', [
                    '--page' => $page
                ]);
            }
        }

        $CoinMetaData = Cache::rememberForever("CoinMetaData_{$from}_{$to}", function () use ($cmcCoinList) {
            return $this->response([
                'slug' => "$cmcCoinList",
            ], "cryptocurrency/info");
        });

        return $CoinMetaData;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Coin  $coin
     * @return \Illuminate\Http\Response
     */
    public function updateMetaData(int $page = 0)
    {
        $meta = $this->metaData($page);
        ProcessInsertMeta::dispatch($meta);
        return $meta;
    }
}
