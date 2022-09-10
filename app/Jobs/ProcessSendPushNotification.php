<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use App\Http\Controllers\FirebaseController;
use Illuminate\Contracts\Queue\ShouldBeUnique;

class ProcessSendPushNotification implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public $url = "https://fcm.googleapis.com/fcm/send";

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $title = "";

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $content = "";

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $icon = "";

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $link = "";

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $tokens = [];

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(array $notification = [
        "title" => "AwesomeCoder Title",
        "content" => "AwesomeCoder Content",
        "icon" => "https://awesomecoder.org/img/profile.jpg",
        "link" => "",
        "tokens" => [],
    ])
    {
        $this->title = $notification["title"];
        $this->content = $notification["content"];
        $this->link = $notification["link"];
        $this->icon = $notification["icon"];
        $this->tokens = $notification["tokens"];
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        FirebaseController::init()
            ->tokens($this->tokens)
            ->title($this->title)
            ->content($this->content)
            ->icon($this->icon)
            ->link($this->link)
            ->send();
    }
}
