<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Http\Controllers\CoinMarketCapController;
use Illuminate\Support\Facades\Artisan;

class ImportAllCoinMeta extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'meta:import';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Import All Coin Data';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $cmcSlugs = array()(new CoinMarketCapController)->getCmcCoinSlugs();
        foreach ($cmcSlugs as $key => $meta) {
            Artisan::call('meta:update', [
                '--page' => $key
            ]);
        }

        // for ($i = 98; $i < (count($cmcSlugs)); $i++) {
        //     Artisan::call('meta:update', [
        //         '--page' => $i
        //     ]);
        // }
    }
}
