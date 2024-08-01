<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;



Route::resource('post', PostController::class);

Route::resource('product', ProductController::class);

Route::resource('categories', CategoryController::class);

Route::resource('users', UserController::class);

