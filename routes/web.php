<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'WelcomePageController@index')->name('welcome');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/category', 'CategoriesController');

// Route::post('/dashboard', 'CategoriesController@store')->name('dashboard.store');
