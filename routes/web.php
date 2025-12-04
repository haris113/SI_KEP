<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controller;
use App\Http\Controllers\Admin\admin_controller;
use App\Http\Controllers\Admin\proses_admin_controller;
use App\Http\Controllers\Ketua\ketua_controller;
use App\Http\Controllers\Ketua\proses_ketua_controller;
use App\Http\Controllers\Anggota\anggota_controller;
use App\Http\Controllers\Anggota\proses_anggota_controller;
use App\Http\Controllers\Divisi_Keuangan\divisi_keuangan_controller;
use App\Http\Controllers\Divisi_Keuangan\proses_divisi_keuangan_controller;
use App\Http\Controllers\Divisi_Upja\divisi_upja_controller;
use App\Http\Controllers\Divisi_Upja\proses_divisi_upja_controller;
use App\Http\Controllers\Beranda\beranda_controller;
use App\Http\Controllers\Beranda\proses_beranda_controller;

//Landing page
Route::get('/', [beranda_controller::class, 'beranda'])->name('beranda');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [Controller::class, 'profile'])->name('profile');
    Route::post('/profile/update', [Controller::class, 'updateProfile'])->name('update.profile');
    Route::post('/profile/upload-foto', [Controller::class, 'uploadFoto'])->name('upload.foto');
});

Route::get('/login', [beranda_controller::class, 'index'])->name('login');
Route::post('/login', [proses_beranda_controller::class, 'proses_login'])->name('proses_login');
Route::get('/logout', [proses_beranda_controller::class, 'logout'])->name('logout');
Route::post('/logout', [proses_beranda_controller::class, 'logout'])->name('logout');

// Hanya role tertentu yang bisa akses route di bawah ini
Route::middleware(['verifikasi_role:admin'])->group(function () {
     Route::get('/admin/dashboard', [admin_controller::class, 'index'])->name('admin.dashboard');
});

Route::middleware(['verifikasi_role:ketua'])->group(function () {
     Route::get('/ketua/dashboard', [ketua_controller::class, 'index'])->name('ketua.dashboard');
});

Route::middleware(['verifikasi_role:divisi keuangan'])->group(function () {
    Route::get('/keuangan/dashboard', [divisi_keuangan_controller::class, 'index'])->name('keuangan.dashboard');
});

Route::middleware(['verifikasi_role:divisi upja'])->group(function () {
    Route::get('/upja/dashboard', [divisi_upja_controller::class, 'index'])->name('upja.dashboard');
});

Route::middleware(['verifikasi_role:anggota'])->group(function () {
   Route::get('/anggota/dashboard', [anggota_controller::class, 'index'])->name('anggota.dashboard');
   Route::get('/anggota/anggota', [anggota_controller::class, 'anggota'])->name('anggota.anggota');
Route::get('/anggota/detail_anggota/{id}', [anggota_controller::class, 'detail_anggota'])
    ->name('anggota.detail_anggota');
   Route::get('/anggota/kegiatan', [anggota_controller::class, 'kegiatan'])->name('anggota.kegiatan');
   Route::get('/anggota/detail_kegiatan', [anggota_controller::class, 'detail_kegiatan'])->name('anggota.detail_kegiatam');
   Route::get('/anggota/kelembagaan', [anggota_controller::class, 'kelembagaan'])->name('anggota.kelembagaan');
   Route::get('/anggota/arsip_dokumen', [anggota_controller::class, 'arsip_dokumen'])->name('anggota.arsip_dokument');
   Route::get('/anggota/laporan_keuangan', [anggota_controller::class, 'laporan_keuangan'])->name('anggota._laporan_keuangan');
   Route::get('/anggota/penyusutan', [anggota_controller::class, 'penyusutan'])->name('anggota.penyusutan');
   Route::get('/anggota/pinjaman', [anggota_controller::class, 'pinjaman'])->name('anggota.pinjaman');
   Route::get('/anggota/perawatan_alsintan', [anggota_controller::class, 'perawatan_alsintan'])->name('anggota.perawatan_alsintan');
   Route::get('/anggota/penggunaan_alsintan', [anggota_controller::class, 'penggunaan_alsintan'])->name('anggota.penggunaan_alsintan');
   Route::get('/anggota/laporan_upja', [anggota_controller::class, 'laporan_upja'])->name('anggota.laporan_upja');
   Route::get('/anggota/operator', [anggota_controller::class, 'operator'])->name('anggota.operator');
});
