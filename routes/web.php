<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'WelcomePageController@index')->name('welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('logout', 'Auth\LoginController@logout');

Route::post('/cart', 'CartController@store')->name('cart.store');

Route::get('/empty', 'CartController@empty')->name('cart.empty');

Route::get('/cart', 'CartController@index')->name('cart.index');

Route::post('/cart/checkout', 'CartController@update')->name('cart.update');

Route::get('/pay', 'CheckoutController@index')->name('checkout.index')->middleware('auth');

Route::get('/guestPay', 'CheckoutController@index')->name('guestCheckout.index');

Route::delete('/cart/{id}', 'CartController@destroy')->name('cart.destroy');

Route::patch('/cart/{id}', 'CartController@update')->name('cart.update');

Route::resource('/product', 'ProductController');

Route::resource('/category', 'CategoriesController');

// Gateway
Route::post('/pay', 'RaveController@initialize')->name('pay');

Route::any('/rave/callback', 'RaveController@callback')->name('callback');