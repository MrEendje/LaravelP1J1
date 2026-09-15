<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PriceController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\RoleController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/catogories', [CategoryController::class, 'index'])
    ->name('categories.index');

Route::get('/products', [ProductController::class, 'index'])
    ->name('products.index');

Route::get('/prices', [PriceController::class, 'index'])
    ->name('prices.index');

Route::get('/reviews', [ReviewController::class, 'index'])
    ->name('reviews.index');

Route::get('/roles', [RoleController::class, 'index'])
    ->name('roles.index');