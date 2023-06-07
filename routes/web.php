<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\CartsController;
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
Route::get("/checkout", [PagesController::class, "checkout"])->name("checkout");
Route::get("/contact", [PagesController::class, "contact"])->name("contact");
Route::get("/faq", [PagesController::class, "faq"])->name("faq");
Route::get("/privacy-policy", [PagesController::class, "privacyPolicy"])
		->name("privacy-policy");
Route::get("/shop-details", [PagesController::class, "shopDetails"])
		->name("shop-details");
Route::get("/terms", [PagesController::class, "terms"])->name("terms");
Route::get("/user-review", [PagesController::class, "userReview"])
		->name("user-review");
Route::get("/wish-list", [PagesController::class, "wishList"])->name("wish-list");

//Added Vue route
Route::get("shop", [ProductsController::class, "index"])->name("shop");
Route::get("cart", [CartsController::class, "index"])->name("cart");


// Route::middleware(['guestOrVerified'])->group(function () {
//     // Route::get('/', [ProductController::class, 'index'])->name('home');
//     // Route::get('/product/{product:slug}', [ProductController::class, 'view'])->name('product.view');

//     Route::prefix('cart')->name('cart.')->group(function () {
//         Route::get('/', [CartsController::class, 'index'])->name('cart');
//         Route::post('store/{product:slug}', [CartsController::class, 'store'])->name('store');
//         Route::post('/destroy/{product:slug}', [CartsController::class, 'destroy'])->name('destroy');
//         Route::post('/update/{product:slug}', [CartsController::class, 'update'])->name('update');
//     });
// });




// Route::middleware(['auth', 'verified'])->group(function() {
//     Route::get('/profile', [ProfileController::class, 'view'])->name('profile');
//     Route::post('/profile', [ProfileController::class, 'store'])->name('profile.update');
//     Route::post('/profile/password-update', [ProfileController::class, 'passwordUpdate'])->name('profile_password.update');
//     Route::post('/checkout', [CheckoutController::class, 'checkout'])->name('cart.checkout');
//     Route::post('/checkout/{order}', [CheckoutController::class, 'checkoutOrder'])->name('cart.checkout-order');
//     Route::get('/checkout/success', [CheckoutController::class, 'success'])->name('checkout.success');
//     Route::get('/checkout/failure', [CheckoutController::class, 'failure'])->name('checkout.failure');
//     Route::get('/orders', [OrderController::class, 'index'])->name('order.index');
//     Route::get('/orders/{order}', [OrderController::class, 'view'])->name('order.view');
// });

// Route::post('/webhook/stripe', [CheckoutController::class, 'webhook']);


require __DIR__.'/auth.php';
