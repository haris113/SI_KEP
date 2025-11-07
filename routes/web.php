<?php

// use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin_controller;

Route::get('/', [admin_controller::class, 'index'])->name('home');
Route::get('/about', [admin_controller::class, 'about'])->name('about');
