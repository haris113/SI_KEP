<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class laporanupja_seeder extends Seeder
{
    public function run(): void
    {
        DB::table('laporan_upja')->insert([
            [
                'periode' => 'Januari 2025',
                'tanggal_laporan' => '2025-01-30',
                'total_pendapatan' => 15000000, // Rp 15 juta
                'total_pengeluaran' => 3000000, // Rp 3 juta
                'dibuat_oleh' => 1, // pastikan user ID 1 ada
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'periode' => 'Februari 2025',
                'tanggal_laporan' => '2025-02-28',
                'total_pendapatan' => 18250000,
                'total_pengeluaran' => 4500000,
                'dibuat_oleh' => 1, // masih user yang sama
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'periode' => 'Maret 2025',
                'tanggal_laporan' => '2025-03-31',
                'total_pendapatan' => 21000000,
                'total_pengeluaran' => 8000000,
                'dibuat_oleh' => 2, // contoh user lain
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
