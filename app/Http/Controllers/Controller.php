<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\user_model;
use App\Models\foto_model;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    // === TAMPILKAN PROFIL USER ===
    public function profile()
    {
        // Ambil data user yang sedang login
        $user = Auth::user();

        // Ambil semua data foto
        $data = foto_model::all();

        // Kirim ke view
        return view('profile.profil', [
            'title' => 'Profil | SI-KEPT',
            'user' => $user,
            'data' => $data,
        ]);
    }

    // === UPDATE PROFIL (USERNAME, NAMA, DLL) ===
    public function updateProfile(Request $request)
    {
        $user = Auth::user();

        // Validasi input
        $request->validate([
            'username' => 'required|string|max:255',
            'nama' => 'required|string|max:255',
        ]);

        // Update data user
        $user->update([
            'username' => $request->username,
            'nama' => $request->nama,
        ]);

        // Ambil role pengguna
        $role = strtolower($user->role);

        // Arahkan ke dashboard sesuai role
        return match ($role) {
            'admin' => redirect()->route('admin.dashboard')->with('success', 'Profil berhasil diperbarui!'),
            'ketua' => redirect()->route('ketua.dashboard')->with('success', 'Profil berhasil diperbarui!'),
            'divisi keuangan' => redirect()->route('keuangan.dashboard')->with('success', 'Profil berhasil diperbarui!'),
            'divisi upja' => redirect()->route('upja.dashboard')->with('success', 'Profil berhasil diperbarui!'),
            'anggota' => redirect()->route('anggota.dashboard')->with('success', 'Profil berhasil diperbarui!'),
            default => redirect('/')->with('success', 'Profil berhasil diperbarui!'),
        };
    }
}
