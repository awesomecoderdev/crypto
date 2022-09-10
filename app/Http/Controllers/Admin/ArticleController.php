<?php

namespace App\Http\Controllers\Admin;

use DOMDocument;
use App\Models\Admin\Article;
use Cocur\Slugify\Slugify;
use Illuminate\Support\Str;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use App\Http\Requests\StoreArticleRequest;
use App\Http\Requests\UpdateArticleRequest;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\File;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if (!empty($request->input("s"))) {
            $articles = Article::orderBy("id", "DESC")->where("title", "like", "%{$request->input("s")}%")->paginate(50)->onEachSide(1);
        } else {
            $articles = Article::orderBy("id", "DESC")->paginate(50)->onEachSide(1);
        }
        return view("dashboard.admin.articles.index", compact("articles"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        abort_if(Gate::denies("create"), Response::HTTP_FORBIDDEN);
        return view("dashboard.admin.articles.create");
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function slug(Request $request)
    {
        if ($request->isMethod('post')) {
            if ($request->edit == null) {
                $slug = SlugService::createSlug(Article::class, "slug", $request->title);
                return response()->json([
                    "success" => true,
                    "slug" => $slug,
                ], 200);
            } else {
                $oldSlug = $request->edit;
                $slugGenerator = new Slugify();
                $currentSlug = $slugGenerator->slugify($request->title);
                if ($oldSlug == $currentSlug) {
                    $slug = $oldSlug;
                } else {
                    $slug = SlugService::createSlug(Article::class, "slug", $request->title);
                }

                return response()->json([
                    "success" => true,
                    "slug" => $slug,
                ], 200);
            }
        } else {
            return response()->json([
                "success" => false,
                "message" => "Unauthorized Access!"
            ], 400);
        }
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function status(Request $request)
    {
        // dd($request->all());

        if ($request->status != null) {
            foreach ($request->status as $id => $status) {
                $news = Article::findOrFail($id);
                $news->status = $request->action;
                $news->save();
            }
            return redirect()->route("admin.articles.index")->with("success", "News successfully updated!");
        } else {
            return redirect()->route("admin.articles.index")->with("error", "Something went wrong!");
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreArticleRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreArticleRequest $request)
    {
        // dd($request->all());

        $images = $this->extractImageFromContent($request->content);
        $thumbnail = isset($images[0]) ? $images[0] : NULL;

        $slugGenerator = new Slugify();

        $create =  [
            "title" => $request->title,
            "slug" =>  $slugGenerator->slugify($request->slug),
            "description" => $request->description,
            "keywords" => $request->keywords,
            "content" => $request->content,
            "thumbnail" => $thumbnail,
            "user_id" => auth()->user()->id,
        ];

        // update news
        $article = Article::create($create);

        // dd($request->all());

        return redirect()->route("admin.articles.edit", $article)->with("success", "Article Successfully Created!");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        return $article;
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        abort_if(Gate::denies("update"), Response::HTTP_FORBIDDEN);
        return view("dashboard.admin.articles.edit", compact("article"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateArticleRequest  $request
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateArticleRequest $request, Article $article)
    {
        $images = $this->extractImageFromContent($request->content);
        $thumbnail = isset($images[0]) ? $images[0] : NULL;

        $slugGenerator = new Slugify();
        $slug = $slugGenerator->slugify($request->slug);

        // check slug exist with another news
        $haveArticles = Article::whereSlug($slug)->first();

        $update =  [
            "title" => $request->title,
            "slug" => $slug,
            "description" => $request->description,
            "keywords" => $request->keywords,
            "content" => $request->content,
            "thumbnail" => $thumbnail,
            "user_id" => auth()->user()->id,
        ];

        if ($haveArticles == null || ($haveArticles->id == $article->id)) {
            // update news
            $article->update($update);
        } else {
            // show error news
            return redirect()->back()->withInput()->withErrors(['slug' => "\"$slug\" slug has already been taken."]);
        }

        return redirect()->route("news.show", $article->slug)->with("success", "Article Successfully Updated!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        abort_if(Gate::denies("delete"), Response::HTTP_FORBIDDEN);
        $article->delete();
        // return redirect()->route("admin.articles.index")->with("success", "Article Successfully Deleted!");
        return back()->with("success", "Article Successfully Deleted!");
    }

    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function upload(Request $request)
    {
        if ($request->isMethod('post')) {
            if ($request->hasFile('upload')) {
                $unusedArticlesMedia = $this->getUnusedArticlesMedia();

                $originName = $request->file('upload')->getClientOriginalName();
                // $fileName = pathinfo($originName, PATHINFO_FILENAME);
                $extension = $request->file('upload')->getClientOriginalExtension();
                // $fileName = $fileName . '_' . time() . '.' . $extension;

                $uniqueFileName = Str::random(10) . md5(time());
                $fileName = $uniqueFileName . '.' . $extension;
                $request->file('upload')->move(public_path('media'), $fileName);
                $url = asset('media/' . $fileName);

                $unusedArticlesMedia[$uniqueFileName] = $fileName;
                // $media = resource_path("articles/data/unusedmedia.json");
                // File::put($media, json_encode($unusedArticlesMedia));

                $img =  base64_encode(file_get_contents($url));
                $url = "data:image/$extension;charset=utf-8;base64, $img";


                return response()->json(['fileName' => $fileName, 'uploaded' => 1, 'url' => $url]);
            }
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return array
     */
    public function getArticlesMedia()
    {
        /** create directory */
        $path = resource_path("articles/data/");
        if (!File::isDirectory($path)) {
            File::makeDirectory($path, 0777, true, true);
        }
        /** file didn't exist */
        $media = resource_path("articles/data/media.json");
        if (!File::exists($media)) {
            File::put($media, json_encode([]));
        }

        // return json
        $data = File::get($media);
        return json_decode($data, true);
    }

    /**
     * Display a listing of the resource.
     *
     * @return array
     */
    public function getUnusedArticlesMedia()
    {
        /** create directory */
        $path = resource_path("articles/data/");
        if (!File::isDirectory($path)) {
            File::makeDirectory($path, 0777, true, true);
        }
        /** file didn't exist */
        $unusedMedia = resource_path("articles/data/unusedmedia.json");
        if (!File::exists($unusedMedia)) {
            File::put($unusedMedia, json_encode([]));
        }

        // return json
        $data = File::get($unusedMedia);
        return json_decode($data, true);
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
}
