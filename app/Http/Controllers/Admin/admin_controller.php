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
}
