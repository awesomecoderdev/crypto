<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Http;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class ProcessUploadNinetyDaysSperkline implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $coin;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($coin)
    {
        $this->coin = $coin;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $monthlySperkline = "https://s3.coinmarketcap.com/generated/sparklines/web/90d/2781/{$this->coin->cmcid}.svg";
        $sperkline = "sperkline/coin/90d/{$this->coin->slug}.svg";
        $path = public_path($sperkline);

        if (!File::exists($path)) {
            $response = Http::get($monthlySperkline);
            if ($response->successful()) {
                File::put($path, $response);
            }
        }
    }
}
