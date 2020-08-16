<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'WelcomePageController@index')->name('welcome');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('logout', 'Auth\LoginController@logout');

Route::post('/cart', 'CartController@store')->name('cart.store');

Route::get('/cart', 'CartController@index')->name('cart.index');

Route::resource('/product', 'ProductController');

Route::resource('/category', 'CategoriesController');
