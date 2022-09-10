<?php

namespace App\Http\Controllers;

use App\Models\Coin;
use App\Models\Category;
use Illuminate\Support\Arr;
use App\Models\CoinCategory;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cache;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Cache::forget("categories");
        // $categories = Cache::rememberForever('categories', function () {
        //     return Category::with(["coin"])->has("coin")->get();
        // });

        // $categories = Category::with(["coin"])->has("coin")->paginate(50)->onEachSide(1);



        // $categories = Category::with(["coin"])
        //     // ->orderBy("slug")
        //     ->paginate(50)
        //     ->onEachSide(1);

        // return view("category.index", compact("categories"));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        // $coins = CoinCategory::withCount(["meta"])
        //     ->has("meta")
        //     // ->whereJsonContains("tags", $category->slug)
        //     ->orderBy("cmc_rank")
        //     ->paginate(50)
        //     ->onEachSide(1);
        return view("coins.index", compact("coins"));
    }
}
