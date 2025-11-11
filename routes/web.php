<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin_controller;
use App\Http\Controllers\keuangan_controller;
use App\Http\Controllers\upja_controller;
use App\Http\Controllers\login_controller;

Route::get('/', [login_controller::class, 'index'])->name('login');
Route::post('/login', [login_controller::class, 'proses_login'])->name('proses_login');
Route::get('/logout', [login_controller::class, 'logout'])->name('logout');
Route::post('/logout', [login_controller::class, 'logout'])->name('logout');

// Hanya role tertentu yang bisa akses route di bawah ini
Route::middleware(['verifikasi_role:admin'])->group(function () {
     Route::get('/admin/dashboard', [admin_controller::class, 'index'])->name('admin.dashboard');
});

Route::middleware(['verifikasi_role:ketua'])->group(function () {
    Route::get('/ketua/dashboard', function () {
        return "Selamat datang, Ketua!";
    })->name('ketua.dashboard');
});

Route::middleware(['verifikasi_role:divisi keuangan'])->group(function () {
    Route::get('/keuangan/dashboard', function () {
        return "Selamat datang, Divisi Keuangan!";
    })->name('keuangan.dashboard');
});

Route::middleware(['verifikasi_role:divisi upja'])->group(function () {
    Route::get('/upja/dashboard', function () {
        return "Selamat datang, Divisi UPJA!";
    })->name('upja.dashboard');
});

Route::middleware(['verifikasi_role:anggota'])->group(function () {
    Route::get('/anggota/dashboard', function () {
        return "Selamat datang, Anggota!";
    })->name('anggota.dashboard');
});
