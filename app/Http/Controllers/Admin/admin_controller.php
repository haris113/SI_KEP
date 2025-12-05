<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
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
}
