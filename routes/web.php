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



//                              Hanya role tertentu yang bisa akses route di bawah ini

// ---------------------------------------   ROLE ADMIN -------------------------------------------------------
Route::middleware(['verifikasi_role:admin'])->group(function () {
     Route::get('/admin/dashboard', [admin_controller::class, 'index'])->name('admin.dashboard');

// ===================== user =====================

     Route::get('/admin/user', [admin_controller::class, 'user'])->name('admin.user');
     Route::get('/admin/tambah_user', [admin_controller::class, 'tambah_user'])->name('admin.tambah_user');
     Route::get('/admin/detail_user/{id}', [admin_controller::class, 'detail_user'])->name('admin.detail_user');
     Route::get('/admin/edit_user/{id}', [admin_controller::class, 'edit_user'])->name('admin.edit_user');
     Route::put('/admin/update_user/{id}', [admin_controller::class, 'update_user'])->name('admin.update_user');
     Route::get('/admin/hapus_user/{id}', [admin_controller::class, 'hapus_user'])->name('admin.hapus_user');

// ===================== anggota =====================

     Route::get('/admin/anggota', [admin_controller::class, 'anggota'])->name('admin.anggota');
     Route::get('/admin/tambah_anggota', [admin_controller::class, 'tambah_anggota'])->name('admin.tambah_anggota');
     Route::get('/admin/detail_anggota/{id}', [admin_controller::class, 'detail_anggota'])->name('admin.detail_anggota');
     Route::get('/admin/edit_anggota/{id}', [admin_controller::class, 'edit_anggota'])->name('admin.edit_anggota');

// ===================== kegiatan =====================

     Route::get('/admin/kegiatan', [admin_controller::class, 'kegiatan'])->name('admin.kegiatan');
     Route::get('/admin/tambah_kegiatan', [admin_controller::class, 'tambah_kegiatan'])->name('admin.tambah_kegiatan');
     Route::get('/admin/detail_kegiatan/{id}', [admin_controller::class, 'detail_kegiatan'])->name('admin.detail_kegiatan');
     Route::get('/admin/edit_kegiatan/{id}', [admin_controller::class, 'edit_kegiatan'])->name('admin.edit_kegiatan');
     
// ===================== arsip dokumen =====================

     Route::get('/admin/arsip_dokumen', [admin_controller::class, 'arsip_dokumen'])->name('admin.arsip_dokumen');
     Route::get('/admin/tambah_arsip_dokumen', [admin_controller::class, 'tambah_arsip_dokumen'])->name('admin.tambah_arsip_dokumen');
     Route::get('/admin/detail_arsip_dokumen/{id}', [admin_controller::class, 'detail_arsip_dokumen'])->name('admin.detail_arsip_dokumen');
     Route::get('/admin/edit_arsip_dokumen/{id}', [admin_controller::class, 'edit_arsip_dokumen'])->name('admin.edit_arsip_dokumen');

// ===================== laporan keuangan =====================

     Route::get('/admin/laporan_keuangan', [admin_controller::class, 'laporan_keuangan'])->name('admin.laporan_keuangan');
     Route::get('/admin/tambah_laporan_keuangan', [admin_controller::class, 'tambah_laporan_keuangan'])->name('admin.tambah_laporan_keuangan');
     Route::get('/admin/detail_laporan_keuangan/{id}', [admin_controller::class, 'detail_laporan_keuangan'])->name('admin.detail_laporan_keuangan');
     Route::get('/admin/edit_laporan_keuangan/{id}', [admin_controller::class, 'edit_laporan_keuangan'])->name('admin.edit_laporan_keuangan');
     
// ===================== pinjaman =====================

     Route::get('/admin/pinjaman', [admin_controller::class, 'pinjaman'])->name('admin.pinjaman');
     Route::get('/admin/tambah_pinjaman', [admin_controller::class, 'tambah_pinjaman'])->name('admin.tambah_pinjaman');
     Route::get('/admin/detail_pinjaman/{id}', [admin_controller::class, 'detail_pinjaman'])->name('admin.detail_pinjaman');
     Route::get('/admin/edit_pinjaman/{id}', [admin_controller::class, 'edit_pinjaman'])->name('admin.edit_pinjaman');

// ===================== perawatan =====================

     Route::get('/admin/perawatan', [admin_controller::class, 'perawatan'])->name('admin.perawatan');
     Route::get('/admin/tambah_perawatan', [admin_controller::class, 'tambah_perawatan'])->name('admin.tambah_perawatan');
     Route::get('/admin/detail_perawatan/{id}', [admin_controller::class, 'detail_perawatan'])->name('admin.detail_perawatan');
     Route::get('/admin/edit_perawatan/{id}', [admin_controller::class, 'edit_perawatan'])->name('admin.edit_perawatan');

// ===================== alsintan =====================

     Route::get('/admin/alsintan', [admin_controller::class, 'alsintan'])->name('admin.alsintan');
     Route::get('/admin/tambah_alsintan', [admin_controller::class, 'tambah_alsintan'])->name('admin.tambah_alsintan');
     Route::get('/admin/detail_alsintan/{id}', [admin_controller::class, 'detail_alsintan'])->name('admin.detail_alsintan');
     Route::get('/admin/edit_alsintan/{id}', [admin_controller::class, 'edit_alsintan'])->name('admin.edit_alsintan');
     
// ===================== penggunaan alsintan =====================

     Route::get('/admin/penggunaan_alsintan', [admin_controller::class, 'penggunaan_alsintan'])->name('admin.penggunaan_alsintan');
     Route::get('/admin/tambah_penggunaan_alsintan', [admin_controller::class, 'tambah_penggunaan_alsintan'])->name('admin.tambah_penggunaan_alsintan');
     Route::get('/admin/detail_penggunaan_alsintan/{id}', [admin_controller::class, 'detail_penggunaan_alsintan'])->name('admin.detail_penggunaan_alsintan');
     Route::get('/admin/edit_penggunaan_alsintan/{id}', [admin_controller::class, 'edit_penggunaan_alsintan'])->name('admin.edit_penggunaan_alsintan');

// ===================== Perawatan =====================

     Route::get('/admin/perawatan', [admin_controller::class, 'perawatan'])->name('admin.perawatan');
     Route::get('/admin/tambah_perawatan', [admin_controller::class, 'tambah_perawatan'])->name('admin.tambah_perawatan');
     Route::get('/admin/detail_perawatan/{id}', [admin_controller::class, 'detail_perawatan'])->name('admin.detail_perawatan');
     Route::get('/admin/edit_perawatan/{id}', [admin_controller::class, 'edit_perawatan'])->name('admin.edit_perawatan');

// ===================== laporan upja =====================

     Route::get('/admin/laporan_upja', [admin_controller::class, 'laporan_upja'])->name('admin.laporan_upja');
     Route::get('/admin/tambah_laporan_upja', [admin_controller::class, 'tambah_laporan_upja'])->name('admin.tambah_laporan_upja');
     Route::get('/admin/detail_laporan_upja/{id}', [admin_controller::class, 'detail_laporan_upja'])->name('admin.detail_laporan_upja');
     Route::get('/admin/edit_laporan_upja/{id}', [admin_controller::class, 'edit_laporan_upja'])->name('admin.edit_laporan_upja');

// ===================== Penyusutan =====================

    Route::get('/admin/penyusutan', [admin_controller::class, 'penyusutan'])->name('admin.penyusutan');
    Route::get('/admin/tambah_penyusutan', [admin_controller::class, 'tambah_penyusutan'])->name('admin.tambah_penyusutan');
    Route::post('/admin/tambah_penyusutan', [admin_controller::class, 'tambah_penyusutan'])->name('admin.tambah_penyusutan');
    Route::get('/admin/detail_penyusutan/{id}', [admin_controller::class, 'detail_penyusutan'])->name('admin.detail_penyusutan');
    Route::get('/admin/edit_penyusutan/{id}', [admin_controller::class, 'edit_penyusutan'])->name('admin.edit_penyusutan');
    Route::put('/admin/edit_penyusutan/{id}', [admin_controller::class, 'edit_penyusutan'])->name('admin.edit_penyusutan');
    Route::get('/admin/hapus_penyusutan/{id}', [admin_controller::class, 'hapus_penyusutan'])->name('admin.hapus_penyusutan');

// ===================== Operator =====================

     Route::get('/admin/operator', [admin_controller::class, 'operator'])->name('admin.operator');
     Route::get('/admin/tambah_operator', [admin_controller::class, 'tambah_operator'])->name('admin.tambah_operator');
     Route::get('/admin/detail_operator/{id}', [admin_controller::class, 'detail_operator'])->name('admin.detail_operator');
     Route::get('/admin/edit_operator/{id}', [admin_controller::class, 'edit_operator'])->name('admin.edit_operator');

     Route::get('/admin/kelembagaan', [admin_controller::class, 'kelembagaan'])->name('admin.kelembagaan');


});

// ---------------------------------------   ROLE KETUA --------------------------------------------------------

Route::middleware(['verifikasi_role:ketua'])->group(function () {
     Route::get('/ketua/dashboard', [ketua_controller::class, 'index'])->name('ketua.dashboard');
});

// ---------------------------------------   ROLE DIVISI KEUANGAN ----------------------------------------------

Route::middleware(['verifikasi_role:divisi keuangan'])->group(function () {
    Route::get('/keuangan/dashboard', [divisi_keuangan_controller::class, 'index'])->name('keuangan.dashboard');
});

// ---------------------------------------   ROLE DIVISI UPJA --------------------------------------------------

Route::middleware(['verifikasi_role:divisi upja'])->group(function () {
    Route::get('/upja/dashboard', [divisi_upja_controller::class, 'index'])->name('upja.dashboard');
});

// ---------------------------------------   ROLE ANGGOTA ------------------------------------------------------

Route::middleware(['verifikasi_role:anggota'])->group(function () {
   Route::get('/anggota/dashboard', [anggota_controller::class, 'index'])->name('anggota.dashboard');

   Route::get('/anggota/anggota', [anggota_controller::class, 'anggota'])->name('anggota.anggota');
   Route::get('/anggota/detail_anggota/{id}', [anggota_controller::class, 'detail_anggota'])->name('anggota.detail_anggota');
   Route::get('/anggota/edit_anggota/{id}', [anggota_controller::class, 'edit_anggota'])->name('anggota.edit_anggota');
   Route::get('/anggota/kegiatan', [anggota_controller::class, 'kegiatan'])->name('anggota.kegiatan');
   Route::get('/anggota/detail_kegiatan', [anggota_controller::class, 'detail_kegiatan'])->name('anggota.detail_kegiatan');

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
