<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\CoinController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ExchangeController;
use App\Http\Controllers\FirebaseController;
use App\Http\Controllers\FontEndArticleController;
use App\Http\Controllers\FontEndCoinController;
use App\Http\Controllers\FontendOperationController;
use App\Http\Controllers\PushNotificationController;

require __DIR__ . '/auth.php';
require __DIR__ . '/admin.php';

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*
|--------------------------------------------------------------------------
| This is operation routes
|--------------------------------------------------------------------------
*/
Route::any('change/theme', [FontendOperationController::class, "changeTheme"])->name("change.theme");


Route::get("cache_clear", function () {
    // Artisan::call("cache:clear");
    // Cache::flush();
});

Route::get("firbase", [PushNotificationController::class, "send"]);

Route::get("cg", [CoinController::class, "index"]);

/*
|--------------------------------------------------------------------------
| This is static pages routes
|--------------------------------------------------------------------------
*/
Route::group(["prefix" => "", "as" => "page.", "namespace" => "", "middleware" => []], function () {
    Route::any('/', [PagesController::class, "index"])->name("index");
    Route::any('soon', [PagesController::class, "soon"])->name("soon");
    Route::any('faq', [PagesController::class, "faq"])->name("faq");
    Route::any('contact-us', [PagesController::class, "contact"])->name("contact");
    Route::any('privacy-policy', [PagesController::class, "privacy"])->name("privacy");
    Route::any('terms', [PagesController::class, "terms"])->name("terms");
    Route::any('advertising', [PagesController::class, "advertising"])->name("advertising");
});

/*
|--------------------------------------------------------------------------
| This is static coins routes
|--------------------------------------------------------------------------
*/
Route::resource('coins', FontEndCoinController::class)->only(["index", "show"]);

/*
|--------------------------------------------------------------------------
| This is static coins routes
|--------------------------------------------------------------------------
*/
Route::resource('exchanges', ExchangeController::class)->only(["index", "show"]);

/*
|--------------------------------------------------------------------------
| This is static coins routes
|--------------------------------------------------------------------------
*/
Route::resource('category', CategoryController::class)->only(["index", "show"]);

/*
|--------------------------------------------------------------------------
| This is static pages routes
|--------------------------------------------------------------------------
*/
Route::resource('news', FontEndArticleController::class)->only(["index", "show"]);
