<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\WriterController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\PostController;


Route::get('/', [HomeController::class, 'index'])->name('home');


Route::get('/category', [CategoryController::class, 'index'])->name('category.index');


Route::get('/writers', [WriterController::class, 'index'])->name('writers');

Route::get('/about', [AboutController::class, 'index'])->name('about');

Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
Route::get('/post/{slug}', [PostController::class, 'show'])->name('post.show');



Route::get('/category/{slug}', [CategoryController::class, 'show'])->name('category.show');

