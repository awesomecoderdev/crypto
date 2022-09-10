<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Http\Controllers\CoinMarketCapController;

class ImportOrUpdateCoins extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'coin:update {--page=}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update Coin Data';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $page = (int) $this->option("page") ?? 0;
        // update coin meta
        // CoinMarketCapController::updateCoinData($page);
        (new CoinMarketCapController())->updateCoinData($page);
    }
}
