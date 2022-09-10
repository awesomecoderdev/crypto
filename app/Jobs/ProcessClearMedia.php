<?php

namespace App\Jobs;

use App\Http\Controllers\Admin\ArticleController;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\File;

class ProcessClearMedia implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;


    /**
     * Create a new job instance.
     *
     * @return void
     */
    private $articles;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($articles)
    {
        $this->articles = $articles;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {

        $media = [];
        $ArticleController = new ArticleController();

        foreach ($this->articles as $key => $post) {
            $content = isset($post["content"]) ? $post["content"] : "";
            $images = $ArticleController->extractImageFromContent($content);
            foreach ($images as $key => $image) {
                $fileName = File::name($image);
                $ext = File::extension($image);
                $file = "$fileName.$ext";
                $path = public_path("media/$file");
                if (File::exists($path)) {
                    $media[$fileName] = $file;
                }
            }
        }
        /** put media */
        $mediaPath = resource_path("articles/data/media.json");
        File::put($mediaPath, json_encode($media));


        /** remove media */
        $usedMedia = !empty($ArticleController->getArticlesMedia()) ?  $ArticleController->getArticlesMedia() : [];
        $unusedArticlesMedia = !empty($ArticleController->getUnusedArticlesMedia()) ?  $ArticleController->getUnusedArticlesMedia() : [];
        $uniqueMedia = array_diff($unusedArticlesMedia, $usedMedia);
        foreach ($uniqueMedia as $key => $media) {
            $path = public_path("media/$media");
            if (File::exists($path)) {
                if (File::delete($path)) {
                    // do something
                }
            }

            if (isset($unusedArticlesMedia[$key])) {
                unset($unusedArticlesMedia[$key]);
            }
        }
        /** put media */
        $unusedArticlesMediaPath = resource_path("articles/data/unusedmedia.json");
        File::put($unusedArticlesMediaPath, json_encode($unusedArticlesMedia));
    }
}
