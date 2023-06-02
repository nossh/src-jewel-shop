<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('pages.index');
// });

//Pages routes 
//Route::get("/", "PagesController@index");
Route::get("/", [PagesController::class, "index"])->name("/");
Route::get("/about", [PagesController::class, "about"])->name("about");
Route::get("/blog-List", [PagesController::class, "blogList"])->name("blog-list");
Route::get("/blog-detail", [PagesController::class, "blogDetail"])
		->name("blog-detail");
Route::get("/cart", [PagesController::class, "cart"])->name("cart");
Route::get("/checkout", [PagesController::class, "checkout"])->name("checkout");
Route::get("/contact", [PagesController::class, "contact"])->name("contact");
Route::get("/faq", [PagesController::class, "faq"])->name("faq");
Route::get("/privacy-policy", [PagesController::class, "privacyPolicy"])
		->name("privacy-policy");
Route::get("/shop-details", [PagesController::class, "shopDetails"])
		->name("shop-details");
Route::get("/shop", [PagesController::class, "shop"])->name("shop");
Route::get("/terms", [PagesController::class, "terms"])->name("terms");
Route::get("/user-review", [PagesController::class, "userReview"])
		->name("user-review");
Route::get("/wish-list", [PagesController::class, "wishList"])->name("wish-list");



Route::get("/login", [PagesController::class, "login"]);
Route::get("/register", [PagesController::class, "register"]);
Route::get("/reset-pwd", [PagesController::class, "rPassword"]);
