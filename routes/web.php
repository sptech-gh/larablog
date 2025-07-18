<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserControllerAuth;
use App\Http\Controllers\UserControllerPost;




Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [PostController::class, 'index']);

// about route
Route::get('/about', function () {
    return 'About page';
})->name('about');

// contact route

Route::get('/contact', function () {
    return view('contact');
})->name('contact');



// posts route with parameters
Route::get('/posts/{id}', [PostController::class, 'show']);

//page routes

Route::get('/about', [PageController::class, 'about']);


Route::get('/posts/{id}', [PageController::class, 'showPost']);


// ...existing code...


