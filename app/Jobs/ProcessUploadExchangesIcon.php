<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Http;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Contracts\Queue\ShouldBeUnique;

class ProcessUploadExchangesIcon implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $icon;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($icon)
    {
        $this->icon = $icon;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $ext = File::extension($this->icon->image);
        $file = "icon/exchanges/{$this->icon->slug}.{$ext}";
        $path = public_path($file);

        if (!File::exists($path)) {
            $response = Http::get($this->icon->image);
            if ($response->successful()) {
                File::put($path, $response);
            }
        }
    }
}
