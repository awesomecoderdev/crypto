<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class ImportAllCoinData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'coin:import';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Import All Coin data';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        for ($key = 0; $key < 4; $key++) {
            Artisan::call('coin:update', [
                '--page' => $key
            ]);
        }
    }
}
