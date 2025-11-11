<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class penyusutan_seeder extends Seeder
{
    public function run(): void
    {
        DB::table('penyusutan')->insert([
            [
                'id_alsintan' => 1, // pastikan ID ini ada di tabel alsintan
                'tahun' => '2017',
                'nilai_perolehan' => 30000000, // 30 JT
                'nilai_penyusutan' => 500000, // 500k
                'frekuensi' => 1, // 1 bulan
                'tanggal_dibuat' => '2025-11-10',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_alsintan' => 2, // pastikan ID ini ada di tabel alsintan
                'tahun' => '2018',
                'nilai_perolehan' => 600000000, // 600 JT
                'nilai_penyusutan' => 5000000, // 5000k / 5 JT
                'frekuensi' => 3, // 3 bulan
                'tanggal_dibuat' => '2025-11-12',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
