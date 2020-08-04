<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/dashboard', 'CategoriesController@index')->name('dashboard');

// Route::view('/', 'main');
// Route::view('/products', 'products');
// Route::view('/product', 'product');
// Route::view('/cart', 'cart');
// Route::view('/checkout', 'checkout');
// Route::view('/thankyou', 'thankyou');