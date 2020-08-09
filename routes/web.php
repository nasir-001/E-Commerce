<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/category', 'CategoriesController');

// Route::post('/dashboard', 'CategoriesController@store')->name('dashboard.store');
