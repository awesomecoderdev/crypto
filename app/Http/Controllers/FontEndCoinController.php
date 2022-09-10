<?php

namespace App\Http\Controllers;

use App\Models\Coin;
use App\Models\Meta;
use App\Models\Admin\Coin as Category;
use App\Events\CoinInserted;
use App\Models\CoinCategory;
use Illuminate\Http\Request;

class FontEndCoinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if (!empty($request->input("search"))) {
            $coins = Coin::with(["meta"])
                ->where("name", "like", "%{$request->input("search")}%")
                ->orderBy("cmc_rank")
                ->has("meta")
                ->paginate(50)
                ->onEachSide(1);
        } else {
            $coins = Coin::with(["meta"])
                ->orderBy("cmc_rank")
                ->has("meta")
                ->paginate(50)
                ->onEachSide(1);
        }
        return view("coins.index", compact("coins"));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Coin  $coin
     * @return \Illuminate\Http\Response
     */
    public function show(Coin $coin)
    {
        // event(new CoinInserted($slug));
        return view("coins.single", compact("coin"));
    }
}
