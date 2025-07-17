<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\HomeController;
// use App\Http\Controllers\TestController;
// use App\Http\Controllers\MyController;
// use App\Http\Controllers\OwnController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserControllerAuth;
use App\Http\Controllers\UserControllerPost;


//PostController Route

Route::get('/',[PostController::class,'index'])->name('home');
Route::resource('posts',             PostController::class);
// Route::get("/", [HomeController::class,"index"])->name("home");


// Route::get('/', function () {
//     return view('home');
// });


// Route::get('/test', [TestController::class, 'index']);
// Route::get('/test2', [MyController::class,'index']);
// Route::get('/own',[OwnController::class,'index']);
