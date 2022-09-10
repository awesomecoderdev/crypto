<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Response;
use Illuminate\Http\Request;


class FontEndArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if (!empty($request->input("search"))) {
            $articles = Article::whereStatus(true)->orderBy("id", "DESC")->where("title", "like", "%{$request->input("search")}%")->paginate(50)->onEachSide(1);
        } else {
            $articles = Article::whereStatus(true)->orderBy("id", "DESC")->paginate(50)->onEachSide(1);
        }
        return view("articles.index", compact("articles"));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        // check article status
        abort_if(!$article->status, Response::HTTP_NOT_FOUND);
        return view("articles.single", compact("article"));
    }
}
