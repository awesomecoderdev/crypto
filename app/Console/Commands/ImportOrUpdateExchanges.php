<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Jobs\ProcessImportExchanges;
use Illuminate\Support\Facades\Http;

class ImportOrUpdateExchanges extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'exchanges:update {--page=}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update Exchanges Data';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $page = (int) $this->option("page") ?? 0;

        $response = Http::get("https://api.coingecko.com/api/v3/exchanges", [
            "per_page" => 250,
            "page" => $page
        ]);

        if ($response->successful()) {
            ProcessImportExchanges::dispatch($response->json());
        }
    }
}
