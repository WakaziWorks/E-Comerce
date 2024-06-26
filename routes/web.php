<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostsController;

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
})->name('home');

Route::get('/products', function () {
    return view('products');
})->name('products');

Route::get('/cart', function() {
    return view('cart');
})->name('cart');

Route::get('/blog', function() {
    return view('blog');
})->name('blog');

Route::get('/collections', function() {
    return view('collections');
})->name('collections');

Route::get('/features', function() {
    return view('features');
})->name('features');

Route::get('/collaborations', function() {
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


require __DIR__.'/auth.php';
