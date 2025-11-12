<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\admin_controller;
use App\Http\Controllers\Admin\proses_admin_controller;
use App\Http\Controllers\Beranda\beranda_controller;
use App\Http\Controllers\Beranda\proses_beranda_controller;

Route::get('/', [beranda_controller::class, 'index'])->name('login');
Route::post('/login', [proses_beranda_controller::class, 'proses_login'])->name('proses_login');
Route::get('/logout', [proses_beranda_controller::class, 'logout'])->name('logout');
Route::post('/logout', [proses_beranda_controller::class, 'logout'])->name('logout');

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
