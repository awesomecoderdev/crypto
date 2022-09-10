<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class ImportAllExchanges extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'exchanges:import';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Import All Exchanges data';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        for ($key = 0; $key < 7; $key++) {
            Artisan::call('exchanges:update', [
                '--page' => $key
            ]);
        }
    }
}
