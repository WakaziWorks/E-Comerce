<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
// use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MpesaSTKPUSHController;

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

Route::get("/posts", [PostsController::class, 'index']);
Route::get('/', function () {
    return view('home');
<<<<<<< HEAD
<<<<<<< HEAD
})->name('landing');

=======
});
>>>>>>> eaa59e5a (fix)
=======
})->name('home');

>>>>>>> 6ba6bdb5 (Revert "fix")
Route::get('/products', function () {
    return view('products');
})->name('products');

Route::get('/cart', function () {
    return view('cart');
})->name('cart');

Route::get('/blog', function () {
    return view('blog');
})->name('blog');

Route::get('/collections', function () {
    return view('collections');
})->name('collections');

Route::get('/features', function () {
    return view('features');
})->name('features');

Route::get('/collaborations', function () {
    return view('collaborations');
})->name('collaborations');

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::post('/v1/mpesatest/stk/push', [MpesaSTKPUSHController::class, 'STKPush']);


<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 6ba6bdb5 (Revert "fix")
require __DIR__ . '/auth.php';

// Route::get('/dashboard', [ProductController::class, 'index']);  
// Route::get('/shopping-cart', [ProductController::class, 'productCart'])->name('shopping.cart');
// Route::get('/product/{id}', [ProductController::class, 'addProducttoCart'])->name('addProduct.to.cart');
// Route::patch('/update-shopping-cart', [ProductController::class, 'updateCart'])->name('update.sopping.cart');
// Route::delete('/delete-cart-product', [ProductController::class, 'deleteProduct'])->name('delete.cart.product');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

<<<<<<< HEAD
// -----------------------------login-------------------------------//
Route::controller(LoginController::class)->group(function () {
    // Route::get('/login', 'login')->name('login');
    // Route::post('/login', 'authenticate');
    // Route::get('/logout', 'logout')->name('logout');
    Route::get('/login', [LoginController::class, 'login'])->name('login');
    Route::post('/login', [LoginController::class, 'authenticate']);
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
=======

// -----------------------------login-------------------------------//
Route::controller(LoginController::class)->group(function () {
    Route::get('/login', 'login')->name('login');
    Route::post('/login', 'authenticate');
    Route::get('/logout', 'logout')->name('logout');
>>>>>>> 6ba6bdb5 (Revert "fix")
});

// // ------------------------------ register ---------------------------------//
Route::controller(RegisterController::class)->group(function () {
<<<<<<< HEAD
    // Route::get('/register', 'register')->name('register');
    // Route::post('/register','storeUser')->name('register');    
    Route::get('/register', [RegisterController::class, 'register'])->name('register');
    Route::post('/register', [RegisterController::class, 'storeUser'])->name('register');
});

// -------------------------- main dashboard ----------------------//
Route::get('/home', [HomeController::class, 'index'])->name('home');
=======
require __DIR__.'/auth.php';
>>>>>>> eaa59e5a (fix)
=======
    Route::get('/register', 'register')->name('register');
    Route::post('/register','storeUser')->name('register');    
});

// -------------------------- main dashboard ----------------------//
Route::controller(HomeController::class)->group(function () {
    Route::get('/home', 'index')->name('home');
});
>>>>>>> 6ba6bdb5 (Revert "fix")
