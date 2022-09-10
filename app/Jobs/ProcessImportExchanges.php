<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use App\Models\Admin\Exchange;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Contracts\Queue\ShouldBeUnique;

class ProcessImportExchanges implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    private $exchanges;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($exchanges)
    {
        $this->exchanges = $exchanges;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        foreach ($this->exchanges as $key => $exchange) {
            $exchange["exchanges_id"] = $exchange["id"];
            // create or update exchanges
            Exchange::updateOrCreate([
                "exchanges_id" => $exchange["exchanges_id"],
            ], $exchange);
        }
    }
}
