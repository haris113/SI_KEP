<?php

namespace App\Http\Controllers\Anggota;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\anggota_model;

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
            'title' => 'Anggota | SI-KEP',
            'page'  => 'Anggota',
            'anggota' => anggota_model::all()
        ];

        return view('pages.Anggota.anggota.anggota', $data);
    }


    public function detail_anggota()
    {
        $data =[
        'title' => 'Detail Anggota | SI-KEP',
        'page'  => 'Anggota',
        ];
        return view('pages.Anggota.anggota.detail_anggota',$data);
    }
}
