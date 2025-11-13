<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\role_model;
use Illuminate\Support\Facades\Auth;

class VerifikasiRole
{
    public function handle(Request $request, Closure $next, $requiredRole): Response
    {
        $user = Auth::user();

        // 🔒 Jika user belum login
        if (!$user) {
            return redirect('/')->with('error', 'Silakan login terlebih dahulu.');
        }

        // 🔍 Cek apakah role yang diminta ada di database
        $role = role_model::where('role', $requiredRole)->first();
        if (!$role) {
            abort(500, "Role '{$requiredRole}' tidak ditemukan di database.");
        }

        // ⚖️ Jika role user tidak sesuai
        if ($user->id_role != $role->id_role) {

            // Tentukan redirect sesuai role user
            $redirect = match($user->role->role ?? '') {
                'admin' => route('admin.dashboard'),
                'ketua' => route('ketua.dashboard'),
                'divisi keuangan' => route('keuangan.dashboard'),
                'divisi upja' => route('upja.dashboard'),
                'anggota' => route('anggota.dashboard'),
                default => url('/'),
            };

            // Buat role huruf awal besar
            $prettyRole = ucwords($requiredRole);

            // Kirim notifikasi SweetAlert error ke dashboard user
            return redirect($redirect)->with('error', "Anda Tidak Memiliki Akses ke Halaman {$prettyRole}.");
        }

        // ✅ Jika lolos semua pengecekan
        return $next($request);
    }
}
