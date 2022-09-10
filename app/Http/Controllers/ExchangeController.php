<?php

namespace App\Http\Controllers;

use App\Models\Exchange;
use Illuminate\Http\Request;
use App\Http\Requests\StoreExchangeRequest;
use App\Http\Requests\UpdateExchangeRequest;

class ExchangeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if (!empty($request->input("s"))) {
            $exchanges = Exchange::whereNotNull("trust_score_rank")->orderBy("trust_score_rank", "asc")->orderBy("trust_score", "desc")->where("name", "like", "%{$request->input("s")}%")->paginate(50)->onEachSide(1);
        } else {
            $exchanges = Exchange::whereNotNull("trust_score_rank")->orderBy("trust_score_rank", "asc")->orderBy("trust_score", "desc")->paginate(50)->onEachSide(1);
        }
        // return $exchanges;
        return view("exchanges.index", compact("exchanges"));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Exchange  $exchange
     * @return \Illuminate\Http\Response
     */
    public function show(Exchange $exchange)
    {
        return $exchange;
        return $exchange->icon();
    }
}
