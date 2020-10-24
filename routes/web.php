<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'WelcomePageController@index')->name('welcome');

Auth::routes();

// E-Commerce

Route::get('/home', 'HomeController@index')->name('home');

Route::get('logout', 'Auth\LoginController@logout');

Route::post('/cart', 'CartController@store')->name('cart.store');

Route::get('/empty', 'CartController@empty')->name('cart.empty');

Route::get('/cart', 'CartController@index')->name('cart.index');

Route::post('/cart/checkout', 'CartController@update')->name('cart.update');

Route::post('/order', 'OrderProductController@store')->name('order.store');

Route::get('/destroy', 'OrderProductController@destroy')->name('order.destroy');

Route::get('/order/view/{id}', 'OrderProductController@show')->name('order.show');

Route::get('/order/{id}', 'OrdersController@destroy')->name('order.destroy');

Route::any('/order/update/{id}', 'OrdersController@update')->name('order.update');

Route::get('/pay', 'CheckoutController@index')->name('checkout.index')->middleware('auth');

Route::get('/guestPay', 'CheckoutController@index')->name('guestCheckout.index');

Route::delete('/cart/{id}', 'CartController@destroy')->name('cart.destroy');

Route::patch('/cart/{id}', 'CartController@update')->name('cart.update');

Route::resource('/product', 'ProductController');

Route::resource('/category', 'CategoriesController');

Route::get('/thankyou', 'ThankYouController@index')->name('thankyou');

Route::get('/sorry', 'SorryController@index')->name('sorry');

// Blog

Route::get('/blogs', 'BlogsController@index')->name('allBlogs');

Route::get('/blog/create', 'BlogsController@create')->name('blog.create');

Route::post('/blog/store', 'BlogsController@store')->name('blog.store');

Route::get('/blogs/{id}', 'BlogsController@show')->name('blog.show');

Route::get('/blogs/edit/{id}', 'BlogsController@edit')->name('blog.edit');

Route::post('/blogs/update/{id}', 'BlogsController@update')->name('blog.update');

Route::delete('/blogs/delete/{id}', 'BlogsController@destroy')->name('blog.destroy');

Route::get('blog/all', 'UserBlogsController@index')->name('my.blogs');

// Gateway
Route::post('/pay', 'RaveController@initialize')->name('pay');

Route::any('/rave/callback', 'RaveController@callback')->name('callback');

Route::get('/success', 'RaveController@addToOrdersTables')->name('success');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
