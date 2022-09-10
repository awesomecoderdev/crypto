<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Http\Controllers\CoinMarketCapController;

class ImportOrUpdateMeta extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'meta:update {--page=}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update Meta Data';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $page = (int) $this->option("page") ?? 0;
        // update coin meta
        (new CoinMarketCapController())->updateMetaData($page);
    }
}
