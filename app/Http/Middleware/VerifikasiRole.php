<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\role_model; // ✅ ubah ke role_model
use Illuminate\Support\Facades\Auth;

class VerifikasiRole
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next, $requiredRole): Response
    {
        $user = Auth::user();

        // Jika user belum login
        if (!$user) {
            return redirect('/')->with('error', 'Silakan login terlebih dahulu.');
        }

        // Cek role di database
        $role = role_model::where('role', $requiredRole)->first();
        if (!$role) {
            abort(500, "Role '{$requiredRole}' tidak ditemukan di database.");
        }

        // Jika role user tidak sesuai
        if ($user->id_role != $role->id_role) {
            return redirect('/')->with('error', "Anda tidak memiliki akses sebagai {$requiredRole}.");
        }

        return $next($request);
    }
}
