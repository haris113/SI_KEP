<?php

namespace App\Http\Controllers\Divisi_Upja;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class divisi_upja_controller extends Controller
{
     public function index()
    {
        $data =[
        'title' => 'Beranda | SI-KEP',
        'page'  => 'Beranda',
        'role'  => 'keuangan',
        ];
        return view('pages.Divisi_Keuangan.dashboard_keuangan',$data);
    }
}
