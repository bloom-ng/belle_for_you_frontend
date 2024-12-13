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
    return view('home');
});

// Route::get('/product{$id}', function ($id) {
//     return 'product '.$id;
// });

Route::get('/about', function () {
    return view('about');
});

Route::get('/product', function () {
    return view('product');
});

Route::get('/cart', function () {
    return view('cart');
});

Route::get('/account', function () {
    return view('account');
});

Route::get('/order', function () {
    return view('order');
});

Route::get('/review', function () {
    return view('review');
});

Route::get('/saved', function () {
    return view('saved');
});

Route::get('/accountsettings', function () {
    return view('accountsettings');
});

Route::get('/checkout', function () {
    return view('checkout');
});