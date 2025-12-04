<?php

namespace App\Http\Controllers\Anggota;

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

class anggota_controller extends Controller
{
     public function index()
    {
        $data =[
        'title' => 'Beranda | SI-KEP',
        'page'  => 'Beranda',
        ];
        return view('pages.Anggota.dashboard_anggota',$data);
    }
    public function anggota()
    {
        $data = [
            'judul' => 'DATA ANGGOTA KELEMBAGAAN',
            'title' => 'Anggota | SI-KEP',
            'page'  => 'Anggota',
            'anggota' => anggota_model::all()
        ];

        return view('pages.Anggota.anggota.anggota', $data);
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

        return view('pages.Anggota.anggota.detail_anggota', $data);
    }

    public function kegiatan()
    {
        $data = [
            'judul' => 'DATA KEGIATAN KELEMBAGAAN',
            'title' => 'Anggota | SI-KEP',
            'page'  => 'Kegiatan',
            'anggota' => kegiatan_model::all()
        ];

        return view('pages.Anggota.kegiatan.kegiatan', $data);
    }
    public function kelembagaan()
    {
        $data = [
            'judul' => 'DATA KELEMBAGAAN',
            'title' => 'Kelembagaan | SI-KEP',
            'page'  => 'Kelembagaan',
            'anggota' => kelembagaan_model::all()
        ];

        return view('pages.Anggota.kelembagaan.kelembagaan', $data);
    }
    public function arsip_dokumen()
    {
        $data = [
            'judul' => 'DATA ARSIP DOKUEMENT',
            'title' => 'Arsip Dokument | SI-KEP',
            'page'  => 'Arsip Dokumen',
            'anggota' => arsip_dokumen_model::all()
        ];

        return view('pages.Anggota.arsip_dokumen.arsip_dokumen', $data);
    }
    public function laporan_keuangan()
    {
        $data = [
            'judul' => 'DATA LAPORAN KEUANGAN',
            'title' => 'Laporan Keuangan| SI-KEP',
            'page'  => 'Laporan_Keuangan',
            'anggota' => kelembagaan_model::all()
        ];

        return view('pages.Anggota.laporan_keuangan.laporan_keuangan', $data);
    }
    public function penyusutan()
    {
        $data = [
            'judul' => 'DATA PENYUSUTAN',
            'title' => 'Data Penyusutan | SI-KEP',
            'page'  => 'penyusutan',
            'anggota' => penyusutan_model::all()
        ];

        return view('pages.Anggota.penyusutan.penyusutan', $data);
    }
    public function pinjaman()
    {
        $data = [
            'judul' => 'DATA PINJAMAN',
            'title' => 'Pinjaman | SI-KEP',
            'page'  => 'pinjaman',
            'anggota' => pinjaman_model::all()
        ];

        return view('pages.Anggota.pinjaman.pinjaman', $data);
    }
    public function data_alsintan()
    {
        $data = [
            'judul' => 'DATA ALSINTAN',
            'title' => 'Data Alsintan | SI-KEP',
            'page'  => 'data_alsintan',
            'anggota' => data_alsintan_model::all()
        ];

        return view('pages.Anggota.data_alsintan.data_alsintan', $data);
    }
    public function perawatan_alsintan()
    {
        $data = [
            'judul' => 'DATA PERAWATAN ALSINTAN',
            'title' => 'Perawatan Alsintan | SI-KEP',
            'page'  => 'perawatan_alsintan',
            'anggota' => perawatan_alsintan_model::all()
        ];

        return view('pages.Anggota.perawatan_alsintan.perawatan_alsintan', $data);
    }
    public function penggunaan_alsintan()
    {
        $data = [
            'judul' => 'DATA PENGGUNAAN ALSINTAN',
            'title' => 'Penggunaan Alsintan | SI-KEP',
            'page'  => 'penggunaan_alsintan',
            'anggota' => penggunaan_alsintan_model::all()
        ];

        return view('pages.Anggota.penggunaan_alsintan.penggunaan_alsintan', $data);
    }
    public function laporan_upja()
    {
        $data = [
            'judul' => 'DATA LAPORAN UPJA',
            'title' => 'Laporan UPJA | SI-KEP',
            'page'  => 'laporan_upja',
            'anggota' => laporan_upja_model::all()
        ];
        
        return view('pages.Anggota.laporan_upja.laporan_upja', $data);
    }
    public function operator()
    {
        $data = [
            'judul' => 'DATA OPERATOR ALSINTAN',
            'title' => 'Operator Alsintan | SI-KEP',
            'page'  => 'operator',
            'anggota' => operator_model::all()
        ];

        return view('pages.Anggota.operator.operator', $data);
    }
}

