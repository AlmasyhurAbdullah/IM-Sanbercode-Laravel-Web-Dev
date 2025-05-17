<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AuthController;

Route::get('/', [HomeController::class, 'home']);
Route::get('/about', [HomeController::class, 'about']);
Route::get('/contact', [HomeController::class, 'contact']);

Route::post('/welcome', [HomeController::class, 'send']);

Route::get('/master', function() 
{
    return view('layout.master');
});

// Category
//Create -> C
Route::get('/category/create', [CategoryController::class, 'create']);
Route::post('/category', [CategoryController::class, 'store']);

//Read -> R
Route::get('/category', [CategoryController::class, 'index']);
Route::get('/category/{id}', [CategoryController::class, 'show']);

//Update -> U
Route::get('/category/{id}/edit', [CategoryController::class, 'edit']);
Route::put('/category/{id}', [CategoryController::class, 'update']);

//Delete -> D
Route::delete('/category/{id}', [CategoryController::class, 'destroy']);

//CRUD Post
Route::resource('post', PostController::class);

//Auth
//Register
Route::get('/register', [AuthController::class, 'showregister']);
Route::post('/register', [AuthController::class, 'registeruser']);

//Login
Route::get('/login', [AuthController::class, 'showlogin']);
Route::post('/login', [AuthController::class, 'login']);

Route::post('/logout', [AuthController::class, 'logout']);