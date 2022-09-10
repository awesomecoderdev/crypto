<?php

namespace App\Http\Controllers;

use App\Models\Coin;
use App\Models\Meta;
use App\Events\CoinInserted;
use App\Jobs\ProcessInsertCoins;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;
use App\Http\Requests\StoreCoinRequest;
use Illuminate\Support\Facades\Artisan;
use App\Http\Requests\UpdateCoinRequest;

class CoinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $client;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        // $this->client = new CoinGeckoClient();

        // ...Some Code here

        // $prom = Http::timeout(1)->async()->post($URL_STRING, $ARRAY_DATA)->wait();

        // ... Some more important code here

        // return "Request sent"; //OR whatever you need to return

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return (new CoinMarketCapController)->updateMetaData(33);


        // return Coin::select("cmcid")->orderBy("cmcid")->pluck('cmcid')->all();

        // $CoinData = Cache::get("CoinData_0");
        // $coinlist = array_chunk($CoinData, 1000);
        // dd($coinlist[1]);
        // $metaData =  (new CoinMarketCapController)->updateMetaData();
        // return $metaData =  (new CoinMarketCapController)->metaData();
        // for ($i = 0; $i < 101; $i++) {
        //     $metaData =  (new CoinMarketCapController)->metaData($i);
        //     echo '<pre>';
        //     print_r($metaData);
        //     echo '</pre>';
        // }
        return $coins = Coin::with(["meta"])->orderBy("cmc_rank")->has("meta")->paginate(50)->onEachSide(1);
        $coins = Coin::with(["meta"])->get();
        $names = $coins->reject(function ($coin) {
            return $coin->meta != null;
        })->map(function ($coin) {
            return $coin->slug;
        });

        // $cmcCoinList = implode(",", array_values($names));
        // dd($cmcCoinList);

        // return $this->response([
        //     'slug' => "$cmcCoinList",
        // ], "cryptocurrency/info");

        foreach ($names as $key => $name) {
            # code...
            echo "$key \n";
            echo "$name \n <br>";
        }

        die;
        return $names;
        // dd($names);



        return  $cmcSlugs = (new CoinMarketCapController)->getCmcCoinSlugs();

        // return (new CoinMarketCapController)->updateMetaData(94);
        // return (new CoinMarketCapController)->updateMetaData(94);
        return $coins = Coin::with(["meta"])->orderBy("cmc_rank")->paginate(50)->onEachSide(1);


        // $metaData =  (new CoinMarketCapController)->getCmcCoinIds();
        // // dd($metaData);

        // dd((new CoinMarketCapController)->metaData(100));

        // foreach ($metaData as $key => $value) {
        //     $meta =  (new CoinMarketCapController)->updateMetaData($key);
        //     echo '<pre>';
        //     print_r($meta);
        //     echo '</pre>';
        // }

        // foreach ($metaData as $key => $meta) {
        //     $meta["cmcid"] = $meta["id"];
        //     echo '<pre>';
        //     print_r($meta);
        //     echo '</pre>';
        //     // create meta
        //     Meta::updateOrCreate([
        //         "slug" => $meta["slug"],
        //     ], $meta);
        // }

        // dd($metaData);
        // foreach ($metaData as $key => $meta) {
        //     $meta["cmcid"] = $meta["id"];
        //     echo '<pre>';
        //     print_r($meta);
        //     echo '</pre>';
        //     // create meta
        //     Meta::updateOrCreate([
        //         "slug" => $meta["slug"],
        //     ], $meta);
        // }


        // $data = Cache::get("CoinMetaData_1");
        // dd($data);

        // return (new CoinMarketCapController)->metaData(1);
        // $coinlist = (new CoinMarketCapController)->coinData(0)[0];

        // $start = 0;
        // $perPage = 10;
        // $start = 2 * $start;
        // $from = ($start + 1);
        // $to = ($from + ($perPage - 1));
        // $range = range($from, $to);
        // $cmcCoinList = implode(",", $range);
        // print_r($cmcCoinList);
        // die;

        // $metaData = (new CoinMarketCapController)->response([
        //     'id' => "$cmcCoinList",
        // ], "cryptocurrency/info");
        // dd($metaData);
        // $url = "https://pro-api.coinmarketcap.com/v1/cryptocurrency/info";

        // $response = Http::acceptJson()->withHeaders(['X-CMC_PRO_API_KEY' => "54445dc5-df20-4467-9037-22ba569733ee"])->get($url, [
        //     'id' => "$cmcCoinList",
        // ]);

        // dd($response->json());

        // dd($coinlist);
        // foreach ($coinlist as $key => $coin) {
        //     $coin["cmcid"] = $coin["id"];
        //     // $coin["created_at"] = now()->toDateTimeString();
        //     // $coin["updated_at"] = now()->toDateTimeString();

        //     echo '<pre>';
        //     print_r($coin);
        //     echo '</pre>';

        //     // create coin
        //     Coin::updateOrCreate([
        //         "slug" => $coin["slug"],
        //     ], $coin);
        // }

        // dd($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCoinRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCoinRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Coin  $coin
     * @return \Illuminate\Http\Response
     */
    public function show(Coin $coin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Coin  $coin
     * @return \Illuminate\Http\Response
     */
    public function edit(Coin $coin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCoinRequest  $request
     * @param  \App\Models\Coin  $coin
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCoinRequest $request, Coin $coin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Coin  $coin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Coin $coin)
    {
        //
    }
}
