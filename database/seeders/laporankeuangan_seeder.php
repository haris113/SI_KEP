<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class laporankeuangan_seeder extends Seeder
{
    public function run(): void
    {
        DB::table('laporan_keuangan')->insert([
            [
                'jumlah' => 2000000000000, // 20 JT
                'jenis' => 'Uang Masuk',
                'tanggal' => '2025-11-10',
                'keterangan' => 'penghasilan Alsintan',
                'total' => 20000000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'jumlah' => 600000000, // 600 JT
                'jenis' => 'Uang Keluar',
                'tanggal' => '2025-11-12',
                'keterangan' => 'beli unit baru',
                'total' => 600000000,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
