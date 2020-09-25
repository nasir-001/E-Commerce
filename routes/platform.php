<?php

declare(strict_types=1);

use App\Orchid\Screens\Examples\ExampleCardsScreen;
use App\Orchid\Screens\Examples\ExampleChartsScreen;
use App\Orchid\Screens\Examples\ExampleFieldsAdvancedScreen;
use App\Orchid\Screens\Examples\ExampleFieldsScreen;
use App\Orchid\Screens\Examples\ExampleLayoutsScreen;
use App\Orchid\Screens\Examples\ExampleScreen;
use App\Orchid\Screens\Examples\ExampleTextEditorsScreen;
use App\Orchid\Screens\PlatformScreen;
use App\Orchid\Screens\Role\RoleEditScreen;
use App\Orchid\Screens\Role\RoleListScreen;
use App\Orchid\Screens\User\UserEditScreen;
use App\Orchid\Screens\User\UserListScreen;
use Illuminate\Support\Facades\Route;

            // My Screeens
use App\Orchid\Screens\EmailSenderScreen;
use App\Orchid\Screens\CategoryEditScreen;
use App\Orchid\Screens\CategoryListScreen;
use App\Orchid\Screens\ProductEditScreen;
use App\Orchid\Screens\ProductListScreen;
use App\Orchid\Screens\OrderListScreen;
use App\Orchid\Screens\OrderEditScreen;
use App\Http\Controllers\OrderController;
use App\Orchid\Screens\BlogEditScreen;
use App\Orchid\Screens\BlogListScreen;

/*
|--------------------------------------------------------------------------
| Dashboard Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the need "dashboard" middleware group. Now create something great!
|
*/

// Main
Route::screen('/main', PlatformScreen::class)->name('platform.main');

// Users...
Route::screen('users/{users}/edit', UserEditScreen::class)->name('platform.systems.users.edit');
Route::screen('users', UserListScreen::class)->name('platform.systems.users');

// Roles...
Route::screen('roles/{roles}/edit', RoleEditScreen::class)->name('platform.systems.roles.edit');
Route::screen('roles/create', RoleEditScreen::class)->name('platform.systems.roles.create');
Route::screen('roles', RoleListScreen::class)->name('platform.systems.roles');

// Example...
Route::screen('example', ExampleScreen::class)->name('platform.example');
Route::screen('example-fields', ExampleFieldsScreen::class)->name('platform.example.fields');
Route::screen('example-layouts', ExampleLayoutsScreen::class)->name('platform.example.layouts');
Route::screen('example-charts', ExampleChartsScreen::class)->name('platform.example.charts');
Route::screen('example-editors', ExampleTextEditorsScreen::class)->name('platform.example.editors');
Route::screen('example-cards', ExampleCardsScreen::class)->name('platform.example.cards');
Route::screen('example-advanced', ExampleFieldsAdvancedScreen::class)->name('platform.example.advanced');

//Route::screen('idea', 'Idea::class','platform.screens.idea');

                 // My Routes
                 
// Email Sender Route
Route::screen('email', EmailSenderScreen::class)->name('platform.email');

// Creating category Route
Route::screen('category/{category?}', CategoryEditScreen::class)->name('platform.category.edit');

// Listing all Category Route
Route::screen('categories', CategoryListScreen::class)->name('platform.category.list');

// Creating product Route
Route::screen('product/{product?}', ProductEditScreen::class)->name('platform.product.edit');

// Listing all Product Route
Route::screen('products', ProductListScreen::class)->name('platform.product.list');

// Single Blog
Route::screen('blog/{blog?}', BlogEditScreen::class)->name('platform.blog.edit');

// All Blogs

Route::screen('blogs', BlogListScreen::class)->name('platform.blog.list');

// List all orders

Route::get('orders', [\App\Http\Controllers\OrdersController::class, 'index'])->name('platform.order.list');

// View a single order with it's products

Route::get('order/{order?}', [\App\Http\Controllers\OrderProductController::class, 'show'])->name('platform.order.edit');
