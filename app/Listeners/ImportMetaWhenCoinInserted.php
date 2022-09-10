<?php

namespace App\Listeners;

use App\Models\Meta;
use App\Events\CoinInserted;
use App\Http\Controllers\CoinController;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class ImportMetaWhenCoinInserted
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(CoinInserted $event)
    {
        // update coin meta
        CoinController::updateCoinMeta($event->coin);
    }
}
