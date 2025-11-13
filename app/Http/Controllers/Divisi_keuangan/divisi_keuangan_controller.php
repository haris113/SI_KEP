<?php

namespace App\Http\Controllers\Divisi_keuangan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class divisi_keuangan_controller extends Controller
{
     public function index()
    {
        $data =[
        'title' => 'Beranda | SI-KEP',
        'page'  => 'Beranda',
        'role'  => 'Keuangan',
        ];
        return view('pages.Divisi_Keuangan.dashboard_keuangan',$data);
    }
}
