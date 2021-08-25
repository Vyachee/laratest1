<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;


Route::resource('test', TestController::class);
Route::resource('author', AuthorController::class);
Route::resource('book', BookController::class);
