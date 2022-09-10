<?php

namespace App\Console\Commands;

use App\Jobs\ProcessImportCategory;
use App\Models\Coin;
use Illuminate\Support\Arr;
use Illuminate\Console\Command;
use Symfony\Component\Process\Process;

class ImportCategory extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'categroy:coins';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Import all category from coins';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $category = Coin::select("tags")->whereNot("tags", "[]")->get()->map(
            function ($items) {
                foreach ($items["tags"] as $key => $value) {
                    $data['slug'] = $value;
                }
                return $data;
            }
        );
        $category = Arr::pluck($category, "slug");
        $category = array_values(array_unique($category));
        $category = array_chunk($category, 300);

        foreach ($category as $key => $categories) {
            ProcessImportCategory::dispatch($categories);
        }
    }
}
