<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class login_controller extends Controller
{
    public function index()
    {
        $data =[
        'judul' => 'Login',
        'title' => 'Halaman Login | SI-KEP',
        'page'  => 'login',
        ];
        return view('pages.login.login',$data);
    }
}
