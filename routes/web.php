<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PagesController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

// Route::get('/', function () {
//     return Inertia::render('Welcome', [
//         'canLogin' => Route::has('login'),
//         'canRegister' => Route::has('register'),
//         'laravelVersion' => Application::VERSION,
//         'phpVersion' => PHP_VERSION,
//     ]);
// });

Route::get("/", [PagesController::class, "index"])->name("/");



Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


//Other Pages Route
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

require __DIR__.'/auth.php';
