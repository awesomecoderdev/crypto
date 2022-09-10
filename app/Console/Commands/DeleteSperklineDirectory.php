<?php

namespace App\Console\Commands;

use Illuminate\Support\Facades\File;
use Illuminate\Console\Command;

class DeleteSperklineDirectory extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sperkline:delete';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Delete Sperkline Directory';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        if (File::isDirectory(public_path("sperkline"))) {
            File::deleteDirectory(public_path("sperkline"));
        }
    }
}
