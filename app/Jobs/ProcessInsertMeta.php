<?php

namespace App\Jobs;

use App\Models\Meta;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class ProcessInsertMeta implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    private $metalist;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($metalist)
    {
        $this->metalist = $metalist;
        // dd($this->metalist);
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        foreach ($this->metalist as $key => $meta) {
            $meta["cmcid"] = $meta["id"];
            // create meta
            Meta::updateOrCreate([
                "slug" => $meta["slug"],
            ], $meta);
        }
    }
}
