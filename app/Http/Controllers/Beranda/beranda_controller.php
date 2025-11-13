<?php

namespace App\Http\Controllers\Beranda;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class beranda_controller extends Controller
{
     public function index()
    {
        return view('pages.login.login', [
            'judul' => 'Login',
            'title' => 'Halaman Login | SI-KEP',
        ]);
    }

    public function beranda()
    {
        return view('pages.landing_page.landing_page', [
            'title' => 'Landing Page | SI-KEP',
        ]);
    }
}
