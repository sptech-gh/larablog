<?php

// routes/web.php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', [PostController::class, 'index']);
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/posts/{id}', [PageController::class, 'showPost']);
Route::get('/posts/{id}', [PostController::class, 'show'])->name('posts.show');
Route::resource('posts', PostController::class);
