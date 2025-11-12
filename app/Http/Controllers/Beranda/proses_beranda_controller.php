<?php

namespace App\Http\Controllers\Beranda;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\user_model;

class proses_beranda_controller extends Controller
{
    public function proses_login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            // Arahkan berdasarkan role
            switch ($user->role->role) {
                case 'admin':
                     return redirect()->route('admin.dashboard');
                case 'ketua':
                    return redirect()->route('ketua.dashboard');
                case 'divisi keuangan':
                    return redirect()->route('keuangan.dashboard');
                case 'divisi upja':
                    return redirect()->route('upja.dashboard');
                case 'anggota':
                    return redirect()->route('anggota.dashboard');
                default:
                    return redirect('/');
            }
        }

        return back()->withErrors(['login' => 'Username atau password salah!']);
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('success', 'Logout berhasil!');
    }
}
