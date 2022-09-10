<?php

namespace App\Jobs;

use App\Models\Meta;
use App\Models\Admin\Coin;
use App\Events\CoinInserted;
use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\Log;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Contracts\Queue\ShouldBeUnique;

class ProcessInsertCoins implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    private $coinlist;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($coinlist)
    {
        $this->coinlist = $coinlist;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        foreach ($this->coinlist as $key => $coin) {
            $coin["cmcid"] = $coin["id"];
            // $coin["created_at"] = now()->toDateTimeString();
            // $coin["updated_at"] = now()->toDateTimeString();

            // create coin
            Coin::updateOrCreate([
                "slug" => $coin["slug"],
            ], $coin);
        }
    }
}
