<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class alsintan_seeder extends Seeder
{
    public function run(): void
    {
        DB::table('alsintan')->insert([
            [
                'nama_alat' => 'Traktor',
                'jenis_alat' => 'Alat Berat',
                'merk' => 'Kubota',
                'tahun_perolehan' => '2017',
                'kondisi' => 'Baik',
                'sumber_perolehan' => 'Bantuan',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama_alat' => 'Combine Harvester',
                'jenis_alat' => 'Panen',
                'merk' => 'Yanmar',
                'tahun_perolehan' => '2018',
                'kondisi' => 'Baik',
                'sumber_perolehan' => 'Bantuan',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
