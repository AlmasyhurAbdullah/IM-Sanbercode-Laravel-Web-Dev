<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FormController;


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