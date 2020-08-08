<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/dashboard', 'CategoriesController@index')->name('dashboard.index');

Route::post('/dashboard', 'CategoriesController@store')->name('dashboard.store');
