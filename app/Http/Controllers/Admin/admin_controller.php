<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\user_model;
use App\Models\anggota_model;
use App\Models\kegiatan_model;
use App\Models\kelembagaan_model;
use App\Models\arsip_dokumen_model;
use App\Models\penyusutan_model;
use App\Models\pinjaman_model;
use App\Models\data_alsintan_model;
use App\Models\perawatan_alsintan_model;
use App\Models\penggunaan_alsintan_model;
use App\Models\laporan_upja_model;
use App\Models\laporan_keuangan_model;
use App\Models\operator_model;

class admin_controller extends Controller
{
     public function index()
    {
        $data =[
        'title' => 'Beranda | SI-KEP',
        'page'  => 'Beranda',
        'role'  => 'Admin',
        ];
        return view('pages.Admin.dashboard_admin',$data);
    }

        public function user()
    {
        $data = [
            'judul' => 'DATA AKUN KELEMBAGAAN',
            'title' => 'Akun | SI-KEP',
            'page'  => 'user',
            'user' => user_model::all()
        ];

        return view('pages.Admin.user.user', $data);
    }
    
    
    public function detail_user($id)
    {
        $user = user_model::findOrFail($id);

        $data = [
            'judul'  => 'DETAIL AKUN KELEMBAGAAN',
            'title'  => 'Detail Akun | SI-KEP',
            'page'   => 'user',
            'user'=> $user
        ];

        return view('pages.Admin.user.detail_user', $data);
    }
    public function edit_user($id)
    {
        $user = user_model::findOrFail($id);

        $data = [
            'judul'  => 'EDIT AKUN KELEMBAGAAN',
            'title'  => 'Edit Akun | SI-KEP',
            'page'   => 'user',
            'user'=> $user
        ];

        return view('pages.Admin.user.edit_user', $data);
    }
    public function tambah_user()
    {
        $user = user_model::all();

        $data = [
            'judul'  => 'TAMBAH AKUN KELEMBAGAAN',
            'title'  => 'Tambah Akun | SI-KEP',
            'page'   => 'user',
            'user'=> $user
        ];

        return view('pages.Admin.user.tambah_user', $data);
    }

        public function anggota()
    {
        $data = [
            'judul' => 'DATA ANGGOTA KELEMBAGAAN',
            'title' => 'Anggota | SI-KEP',
            'page'  => 'Anggota',
            'anggota' => anggota_model::all()
        ];

        return view('pages.Admin.anggota.anggota', $data);
    }
    
    
    public function detail_anggota($id)
    {
        $anggota = anggota_model::findOrFail($id);

        $data = [
            'judul'  => 'DETAIL ANGGOTA KELEMBAGAAN',
            'title'  => 'Detail Anggota | SI-KEP',
            'page'   => 'Anggota',
            'anggota'=> $anggota
        ];

        return view('pages.Admin.anggota.detail_anggota', $data);
    }
    public function edit_anggota($id)
    {
        $anggota = anggota_model::findOrFail($id);

        $data = [
            'judul'  => 'EDIT ANGGOTA KELEMBAGAAN',
            'title'  => 'Edit Anggota | SI-KEP',
            'page'   => 'Anggota',
            'anggota'=> $anggota
        ];

        return view('pages.Admin.anggota.edit_anggota', $data);
    }
    public function tambah_anggota()
    {
        $anggota = anggota_model::all();

        $data = [
            'judul'  => 'TAMBAH ANGGOTA KELEMBAGAAN',
            'title'  => 'Tambah Anggota | SI-KEP',
            'page'   => 'Anggota',
            'anggota'=> $anggota
        ];

        return view('pages.Admin.anggota.tambah_anggota', $data);
    }

            public function arsip_dokumen()
    {
        $data = [
            'judul' => 'DATA ARSIP DOKUMEN KELEMBAGAAN',
            'title' => 'Arsip Dokumen | SI-KEP',
            'page'  => 'arsip_dokumen',
            'arsip_dokumen' => arsip_dokumen_model::all()
        ];

        return view('pages.Admin.arsip_dokumen.arsip_dokumen', $data);
    }
    
    
    public function detail_arsip_dokumen($id)
    {
        $arsip_dokumen = arsip_dokumen_model::findOrFail($id);

        $data = [
            'judul'  => 'DETAIL ARSIP DOKUMEN',
            'title'  => 'Detail Arsip Dokumen | SI-KEP',
            'page'   => 'arsip_dokumen',
            'arsip_dokumen'=> $arsip_dokumen
        ];

        return view('pages.Admin.arsip_dokumen.detail_arsip_dokumen', $data);
    }
    public function edit_arsip_dokumen($id)
    {
        $arsip_dokumen = arsip_dokumen_model::findOrFail($id);

        $data = [
            'judul'  => 'EDIT ARSIP DOKUMEN',
            'title'  => 'Edit Arsip Dokumen | SI-KEP',
            'page'   => 'arsip_dokumen',
            'arsip_dokumen'=> $arsip_dokumen
        ];

        return view('pages.Admin.arsip_dokumen.edit_arsip_dokumen', $data);
    }
    public function tambah_arsip_dokumen()
    {
        $arsip_dokumen = arsip_dokumen_model::all();

        $data = [
            'judul'  => 'TAMBAH ARSIP DOKUMEN',
            'title'  => 'Tambah Arsip Dokumen | SI-KEP',
            'page'   => 'arsip_dokumen',
            'arsip_dokumen'=> $arsip_dokumen
        ];

        return view('pages.Admin.arsip_dokumen.tambah_arsip_dokumen', $data);
    }

    public function kelembagaan()
    {
        $data = [
            'judul'       => 'DATA KELEMBAGAAN',
            'title'       => 'Kelembagaan | SI-KEP',
            'page'        => 'Kelembagaan',
            'kelembagaan' => kelembagaan_model::all()
        ];

        return view('pages.Admin.kelembagaan.kelembagaan', $data);
    }

    public function kegiatan()
    {
        $data = [
            'judul' => 'DATA KEGIATAN KELEMBAGAAN',
            'title' => 'Kegiatan | SI-KEP',
            'page'  => 'kegiatan',
            'kegiatan' => kegiatan_model::all()
        ];

        return view('pages.Admin.kegiatan.kegiatan', $data);
    }
    
    
    public function detail_kegiatan($id)
    {
        $kegiatan = kegiatan_model::findOrFail($id);

        $data = [
            'judul'  => 'DETAIL KEGIATAN',
            'title'  => 'Detail Kegiatan | SI-KEP',
            'page'   => 'kegiatan',
            'kegiatan'=> $kegiatan
        ];

        return view('pages.Admin.kegiatan.detail_kegiatan', $data);
    }
    public function edit_kegiatan($id)
    {
        $kegiatan = kegiatan_model::findOrFail($id);

        $data = [
            'judul'  => 'EDIT KEGIATAN',
            'title'  => 'Edit Kegiatan | SI-KEP',
            'page'   => 'kegiatan',
            'kegiatan'=> $kegiatan
        ];

        return view('pages.Admin.kegiatan.edit_kegiatan', $data);
    }
    public function tambah_kegiatan()
    {
        $kegiatan = kegiatan_model::all();

        $data = [
            'judul'  => 'TAMBAH KEGIATAN',
            'title'  => 'Tambah Kegiatan | SI-KEP',
            'page'   => 'kegiatan',
            'kegiatan'=> $kegiatan
        ];

        return view('pages.Admin.kegiatan.tambah_kegiatan', $data);
}

 public function laporan_keuangan()
    {
        $total_masuk = laporan_keuangan_model::where('jenis', 'uang masuk')->sum('jumlah');
        $total_keluar = laporan_keuangan_model::where('jenis', 'uang keluar')->sum('jumlah');
        $saldo = $total_masuk - $total_keluar;
        $data = [
            'judul' => 'DATA LAPORAN KEUANGAN (KAS) KELEMBAGAAN',
            'title' => 'Kas Keuangan | SI-KEP',
            'page'  => 'laporan_keuangan',
            'laporan_keuangan' => laporan_keuangan_model::all(),
            'saldo' => $saldo
        ];

        return view('pages.Admin.laporan_keuangan.laporan_keuangan', $data);
    }
    
    
    public function detail_laporan_keuangan($id)
    {
        $laporan_keuangan = laporan_keuangan_model::findOrFail($id);

        $data = [
            'judul'  => 'DETAIL LAPORAN KEUANGAN (KAS) KELEMBAGAAN',
            'title'  => 'Detail Kas Keuangan | SI-KEP',
            'page'   => 'laporan_keuangan',
            'laporan_keuangan'=> $laporan_keuangan
        ];

        return view('pages.Admin.laporan_keuangan.detail_laporan_keuangan', $data);
    }
    public function edit_laporan_keuangan($id)  
    {
        $laporan_keuangan = laporan_keuangan_model::findOrFail($id);

        $data = [
            'judul'  => 'EDIT LAPORAN KEUANGAN (KAS) KELEMBAGAAN',
            'title'  => 'Edit Kas Keuangan | SI-KEP',
            'page'   => 'laporan_keuangan',
            'laporan_keuangan'=> $laporan_keuangan
        ];

        return view('pages.Admin.laporan_keuangan.edit_laporan_keuangan', $data);
    }
    public function tambah_laporan_keuangan()
    {
        $laporan_keuangan = laporan_keuangan_model::all();      

        $data = [
            'judul'  => 'TAMBAH LAPORAN KEUANGAN (KAS) KELEMBAGAAN',
            'title'  => 'Tambah Kas Keuangan | SI-KEP',
            'page'   => 'laporan_keuangan',
            'laporan_keuangan'=> $laporan_keuangan
        ];

        return view('pages.Admin.laporan_keuangan.tambah_laporan_keuangan', $data);
}
}