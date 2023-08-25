<?php

use App\Http\Controllers\DashboardOrdersController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\DashboardProductController;
use Gloudemans\Shoppingcart\Facades\Cart;

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
//     return view('welcome');
// });

Route::get('/', function () {
    return view('landing-page');
});

Route::get('/product/index', [ProductController::class, 'index'])->name('iproduk');
Route::get('/product/{product:slug', [ProductController::class, 'show']);

Route::get('/carts', [CartController::class, 'index'])->name('carts.index');
Route::get('/carts/add/{product:id}', [CartController::class, 'add'])->name('carts.add');
Route::patch('/carts/update', [CartController::class, 'update'])->name('carts.update');
Route::delete('/carts/remove', [CartController::class, 'remove'])->name('carts.remove');


Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', function() {
    return view('dashboard.index');
})->middleware('auth');

Route::get('/dashboard/product/checkSlug', [DashboardProductController::class, 'checkSlug'])->middleware('auth');

Route::resource('/dashboard/product', DashboardProductController::class)->middleware('auth');
Route::resource('/dashboard/orders', DashboardOrdersController::class)->middleware('auth');
Route::get('/dashboard/laporan', [DashboardOrdersController::class, 'laporan'])->middleware('auth');
Route::get('/orders/index', [DashboardOrdersController::class, 'index'])->name('orders.index');
Route::resource('/orders', DashboardOrdersController::class);
// Route::get('/product', function () {
//     return view('index');
// });

Route::get('/checkout', function () {
    return view('checkout');
});