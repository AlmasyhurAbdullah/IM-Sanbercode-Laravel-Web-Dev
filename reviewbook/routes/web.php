<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\genreController;


Route::get('/', function () {
    return view('page.home');
});
Route::get('/register', function () {
    return view('page.register');
});
Route::get('/welcome', function () {
    return view('page.welcome');
});

Route::get('/master', function () {
    return view('layout.master');
});

Route::get('/genre', [genreController::class, 'index']);
Route::get('/genre/{id}', [genreController::class, 'show']);
Route::get('/genre/create', [genreController::class, 'create']);
Route::post('/genre', [genreController::class, 'store']);
Route::get('/genre/{id}/edit', [genreController::class, 'edit']);
Route::put('/genre/{id}', [genreController::class, 'update']);
Route::delete('/genre/{id}', [genreController::class, 'destroy']);