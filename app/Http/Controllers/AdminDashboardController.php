<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Admin\Coin;
use App\Models\Meta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminDashboardController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return view("dashboard.admin.index");
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function profile(Request $request, User $user)
    {
        return view("dashboard.admin.page.profile");
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function admins(Request $request, User $user)
    {
        return view("dashboard.admin.page.admins");
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function settings(Request $request, User $user)
    {
        return view("dashboard.admin.page.settings");
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function news(Request $request, Auth $user)
    {
        // $news = News::where("status", 1)->orderBy("created_at", "desc")->paginate(10)->onEachSide(1);

        // return view("dashboard.admin.page.news", [
        //     "user" => $user::user(),
        //     "news" => $news,
        // ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function coins(Request $request)
    {
        // $coins = Coin::with(["meta"])->orderBy("cmc_rank")->has("meta")->paginate(50)->onEachSide(1);
        // return view("dashboard.admin.page.coins", compact("coins"));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function exchanges(Request $request, User $user)
    {
        // return view("dashboard.admin.page.exchanges");
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function community(Request $request, User $user)
    {
        return view("dashboard.admin.page.comunity");
    }
}
