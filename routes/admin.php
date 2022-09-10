<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CoinController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\UserDashboardController;
use App\Http\Controllers\Admin\ExchangeController;
use App\Http\Controllers\AdminDashboardController;

// supperadmin routes
Route::group(["prefix" => "admin", "as" => "admin.", "namespace" => "", "middleware" => ["auth", "verified", "isAdmin", "isSupperAdmin"]], function () {
    // users
    Route::resource("users", UserController::class);
    // admins
    Route::any('/admins', [AdminDashboardController::class, "admins"])->name('admins');
    // exchanges
    Route::resource("exchanges", ExchangeController::class);
    // coins
    Route::resource("coins", CoinController::class);
});

// admin routes
Route::group(["prefix" => "admin", "as" => "admin.", "namespace" => "", "middleware" => ["auth", "verified", "isAdmin",]], function () {
    // articles
    Route::resource("articles", ArticleController::class);
    // update articles status
    Route::any('update/status', [ArticleController::class, "status"])->name("articles.update.status");
    // article slug
    Route::any('articles/slug', [ArticleController::class, "slug"])->name("articles.slug");
    // ckeditor uploader
    Route::any('articles/ckeditor/upload', [ArticleController::class, "upload"])->name("articles.ckeditor.upload");

    // dashboard
    Route::any('/', [AdminDashboardController::class, "index"])->name('dashboard');
    // profile
    Route::any('/profile', [AdminDashboardController::class, "profile"])->name('profile');
    // settings
    Route::any('/settings', [AdminDashboardController::class, "settings"])->name('settings');
    // Community
    Route::any('/community', [AdminDashboardController::class, "community"])->name('community');


    // Route::any('news', function (Request $request) {
    //     $slug = SlugService::createSlug(News::class, "slug", $request->title);
    //     if ($request->isMethod('post')) {
    //         return response()->json([
    //             "success" => true,
    //             "slug" => $slug
    //         ], 200);
    //     } else {
    //         return response()->json([
    //             "success" => false,
    //             "message" => "Unauthorized Access!"
    //         ], 400);
    //     }
    // })->name("api.news");;

});

// user routes
Route::group(["prefix" => "profile", "as" => "user.", "namespace" => "", "middleware" => ["auth", "verified", "isUser"]], function () {
    // dashboard
    Route::any('/{tab?}/{search?}', [UserDashboardController::class, "index"])->name('dashboard.index');
    // wishlist
    // Route::any('wishlist/', [WishlistController::class, "index"])->name("wishlist");
});
