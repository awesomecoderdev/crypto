<?php

namespace App\Http\Controllers;

use DOMDocument;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Http;
use App\Jobs\ProcessSendPushNotification;

class PushNotificationController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function send()
    {
        echo $content = Http::get("https://youtube.com/shorts/RbJi7k3uCv0");

        // if ($content->successful()) {
        //     return $this->get_all_headings($content);
        //     $htmlDom = new DOMDocument();
        //     @$htmlDom->loadHTML($content);
        //     $videos = $htmlDom->getElementsByTagName('video');
        //     foreach ($videos as  $item => $video) {
        //         // if (filter_var($video->getAttribute('video'), FILTER_VALIDATE_URL)) {
        //         $output["video"][]  = $video->getAttribute('src');
        //         // }
        //     }
        // }



        // return $this->get_all_headings($content);
        // $images =  $this->extractImageFromContent($content);
        // $heading =  $this->extractHeadingFromContent($content);
        // return view("index", compact("images", "heading"));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function  extractImageFromContent($content = null)
    {
        $output = [];
        $htmlDom = new DOMDocument();
        @$htmlDom->loadHTML($content);
        $imageTags = $htmlDom->getElementsByTagName('img');
        foreach ($imageTags as $imgTag) {
            $imgSrc = $imgTag->getAttribute('src');
            $output[] = $imgSrc;
        }
        return $output;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function  extractHeadingFromContent($content = null)
    {
        $output = [];
        $htmlDom = new DOMDocument();
        @$htmlDom->loadHTML($content);
        $imageTags = $htmlDom->getElementsByTagName('p');
        foreach ($imageTags as $imgTag) {
            $output[] = $imgTag->nodeValue;
        }
        $imageTags = $htmlDom->getElementsByTagName('h1');
        foreach ($imageTags as $imgTag) {
            $output[] = $imgTag->nodeValue;
        }
        $imageTags = $htmlDom->getElementsByTagName('h2');
        foreach ($imageTags as $imgTag) {
            $output[] = $imgTag->nodeValue;
        }
        $imageTags = $htmlDom->getElementsByTagName('h3');
        foreach ($imageTags as $imgTag) {
            $output[] = $imgTag->nodeValue;
        }
        $imageTags = $htmlDom->getElementsByTagName('span');
        foreach ($imageTags as $imgTag) {
            $output[] = $imgTag->nodeValue;
        }
        return $output;
    }

    function get_all_headings($content)
    {
        $output = [];
        $htmlDom = new DOMDocument();
        @$htmlDom->loadHTML($content);


        $paragaraps = $htmlDom->getElementsByTagName('title');
        foreach ($paragaraps as  $item => $paragarap) {
            $text = strip_tags($paragarap->nodeValue);
            $text = trim($text);
            $output["title"][] = $text;
        }


        $headings = $htmlDom->getElementsByTagName('span');
        foreach ($headings as  $item => $heading) {
            $text = strip_tags($heading->nodeValue);
            $text = trim($text);
            if (!empty($text)) {
                // $output["span"][$item]["text"] = $text;
                // $output["span"][$item]["class"] = $heading->getAttribute("class");
                // $output["span"][$item]["id"] = $heading->getAttribute("id");

                if ($heading->getAttribute("id") == "productTitle") {
                    $output["product"]["name"] = $this->removeSpace($text);
                }
                if ($heading->getAttribute("id") == "acrCustomerReviewText") {
                    $ratings = str_replace("ratings", " ", $this->removeSpace($text));
                    // $ratings = str_replace(",", "", $ratings);
                    // $ratings = trim($ratings);
                    $output["product"]["ratings"] = $ratings;
                }
                if ($heading->getAttribute("id") == "sns-base-price") {
                    $output["product"]["price"] = $this->removeSpace($text);
                }

                // if ($heading->getAttribute("class") == "a-size-base a-color-secondary") {
                //     $output["product"]["price"] = $text;
                // }
            }
        }


        // return $output;

        $paragaraps = $htmlDom->getElementsByTagName('p');
        foreach ($paragaraps as  $item => $paragarap) {
            $text = strip_tags($paragarap->nodeValue);
            $text = trim($text);
            if (!empty($text)) {
                $output["p"][$item]["text"] = $text;
                $output["p"][$item]["class"] = $paragarap->getAttribute("class");
                $output["p"][$item]["id"] = $paragarap->getAttribute("id");
            }
        }

        $headings = $htmlDom->getElementsByTagName('h1');
        foreach ($headings as  $item => $heading) {
            $text = strip_tags($heading->nodeValue);
            $text = trim($text);
            if (!empty($text)) {
                $output["h1"][$item]["text"] = $text;
                $output["h1"][$item]["class"] = $heading->getAttribute("class");
                $output["h1"][$item]["id"] = $heading->getAttribute("id");
            }
        }

        $headings = $htmlDom->getElementsByTagName('h2');
        foreach ($headings as  $item => $heading) {
            $text = strip_tags($heading->nodeValue);
            $text = trim($text);
            if (!empty($text)) {
                $output["h2"][$item]["text"] = $text;
                $output["h2"][$item]["class"] = $heading->getAttribute("class");
                $output["h2"][$item]["id"] = $heading->getAttribute("id");
            }
        }

        $headings = $htmlDom->getElementsByTagName('h3');
        foreach ($headings as  $item => $heading) {
            $text = strip_tags($heading->nodeValue);
            $text = trim($text);
            if (!empty($text)) {
                $output["h3"][$item]["text"] = $text;
                $output["h3"][$item]["class"] = $heading->getAttribute("class");
                $output["h3"][$item]["id"] = $heading->getAttribute("id");
            }
        }

        $headings = $htmlDom->getElementsByTagName('h4');
        foreach ($headings as  $item => $heading) {
            $text = strip_tags($heading->nodeValue);
            $text = trim($text);
            if (!empty($text)) {
                $output["h4"][$item]["text"] = $text;
                $output["h4"][$item]["class"] = $heading->getAttribute("class");
                $output["h4"][$item]["id"] = $heading->getAttribute("id");
            }
        }

        $headings = $htmlDom->getElementsByTagName('h5');
        foreach ($headings as  $item => $heading) {
            $text = strip_tags($heading->nodeValue);
            $text = trim($text);
            if (!empty($text)) {
                $output["h5"][$item]["text"] = $text;
                $output["h5"][$item]["class"] = $heading->getAttribute("class");
                $output["h5"][$item]["id"] = $heading->getAttribute("id");
            }
        }

        $headings = $htmlDom->getElementsByTagName('h6');
        foreach ($headings as  $item => $heading) {
            $text = strip_tags($heading->nodeValue);
            $text = trim($text);
            if (!empty($text)) {
                $output["h6"][$item]["text"] = $text;
                $output["h6"][$item]["class"] = $heading->getAttribute("class");
                $output["h6"][$item]["id"] = $heading->getAttribute("id");
            }
        }


        $images = $htmlDom->getElementsByTagName('img');
        foreach ($images as  $item => $img) {
            if (filter_var($img->getAttribute('src'), FILTER_VALIDATE_URL)) {
                $output["img"][]  = $img->getAttribute('src');
            }
        }

        $videos = $htmlDom->getElementsByTagName('video');
        foreach ($videos as  $item => $video) {
            // if (filter_var($video->getAttribute('video'), FILTER_VALIDATE_URL)) {
            $output["video"][]  = $video->getAttribute('src');
            // }
        }

        return $output;


        // preg_match_all('/\<(h[1-6])\>(.*)<\/h[1-6]>/i', $content, $matches);

        // $r = array();
        // if (!empty($matches[1]) && !empty($matches[2])) {
        //     $tags = $matches[1];
        //     $titles = $matches[2];
        //     foreach ($tags as $i => $tag) {
        //         $r[] = array('tag' => $tag, 'title' =>   str_replace("  ", "", strip_tags($titles[$i])));
        //     }
        // }

        // return $r;
    }

    public function removeSpace($content)
    {
        $content = str_replace("  ", "", strip_tags($content));
        $content = str_replace("\n", " ", $content);
        return trim($content);
    }
}
