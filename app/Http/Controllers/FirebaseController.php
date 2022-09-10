<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Http;

class FirebaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private static $init = null;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $SERVER_KEY;

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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->SERVER_KEY = env("FIREBASE_SERVER_KEY", "AAAAJVUx604:APA91bGYTlpxLm83Sc61_AjzFsTamSoppHHh_1d7UEj186KIOINEpjclu-whZxJd7smbNxLRIQQACDDWPIz30ij_dBmkVd4EzQU01z8QbFlptlIYYtGWCM-l7lGzavND_rTR0PWJvv5t");
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public static function init()
    {
        if (self::$init === null) {
            self::$init = new self;
        }
        return self::$init;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function notification()
    {
        return [
            'title' => $this->title,
            'body' => $this->content,
            "content_available" => !empty($this->content),
            'icon' => $this->icon,
            'click_action' => $this->link,
            "priority" => "high",
        ];
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function fcm_options()
    {
        return [
            'link' => $this->link,
        ];
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function server($SERVER_KEY = null)
    {
        if ($SERVER_KEY != null) {
            $this->SERVER_KEY = $SERVER_KEY;
        }
        return $this;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function title($title = "AwesomeCoder")
    {
        $this->title = $title;
        return $this;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function content($content = "AwesomeCoder Content")
    {
        $this->content = $content;
        return $this;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function icon($icon = "")
    {
        $this->icon = $icon;
        return $this;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function link($link = "")
    {
        $slash = substr($link, -1);
        $this->link = ($slash != "/") ? "$link/" : $link;
        return $this;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tokens(array $tokens = [])
    {
        // $this->token = Arr::pluck($tokens, "token");
        $this->tokens = $tokens;
        return $this;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function send()
    {
        $fields = [
            "registration_ids" => $this->tokens,
            "notification" => $this->notification(),
            "fcm_options" =>  $this->fcm_options(),
        ];
        $response = Http::acceptJson()->withHeaders(["Authorization" => "key=$this->SERVER_KEY"])->post($this->url, $fields);
        if ($response->successful()) {
            return $response->json();
        }
    }
}
