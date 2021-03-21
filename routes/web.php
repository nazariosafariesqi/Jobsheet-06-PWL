<?php

use Illuminate\Support\Facades\Route;

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

    Route::get('/', function () {
    return view('index', ['name' => 'index']);
    });

    Route::get('/account.html', function () {
    return view('account', ['name' => 'account']);
    });

    Route::get('/blog-archive.html', function () {
    return view('blog-archive', ['name' => 'blog-archive']);
    });

    Route::get('/blog-archive-2.html', function () {
    return view('blog-archive-2', ['name' => 'blog-archive-2']);
    });

    Route::get('/blog-single.html', function () {
    return view('blog-single', ['name' => 'blog-single']);
    });

    Route::get('/product.html', function () {
    return view('product', ['name' => 'product']);
    });

    Route::get('/product-detail.html', function () {
    return view('product-detail', ['name' => 'product-detail']);
    });

    Route::get('/contact.html', function () {
    return view('contact', ['name' => 'contact']);
    });

    Route::get('/404.html', function () {
    return view('404', ['name' => '404']);
    });

    Route::get('/cart.html', function () {
    return view('cart', ['name' => 'cart']);
    });

    Route::get('/wishlist.html', function () {
    return view('wishlist', ['name' => 'wishlist']);
    });

    Route::get('/home.html', function () {
    return view('home', ['name' => 'home']);
    });

    Route::get('/index.html', function () {
    return view('index', ['name' => 'index2']);
    });

    Route::get('/checkout.html', function () {
    return view('checkout', ['name' => 'checkout']);
    });
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
