<?php

// use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin_controller;
use App\Http\Controllers\login_controller;

Route::get('/', [login_controller::class, 'index']);
Route::get('/home', [admin_controller::class, 'index'])->name('home');
Route::get('/about', [admin_controller::class, 'about'])->name('about');
