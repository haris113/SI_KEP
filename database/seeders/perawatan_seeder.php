<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PerawatanSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('perawatan')->insert([
            [
                'id_alsintan'       => 1,
                'tanggal_perawatan' => '2025-01-15',
                'jenis_perawatan'   => 'Servis Berkala',
                'biaya'             => 500000,
                'id_saldo'          => 1,
                'keterangan'        => 'Ganti oli dan pengecekan mesin',
                'created_at'        => Carbon::now(),
                'updated_at'        => Carbon::now(),
            ],
            [
                'id_alsintan'       => 2,
                'tanggal_perawatan' => '2025-02-03',
                'jenis_perawatan'   => 'Perbaikan Kerusakan',
                'biaya'             => 1200000,
                'id_saldo'          => 2,
                'keterangan'        => 'Pengelasan rangka dan perbaikan roda',
                'created_at'        => Carbon::now(),
                'updated_at'        => Carbon::now(),
            ],
            [
                'id_alsintan'       => 1,
                'tanggal_perawatan' => '2025-03-20',
                'jenis_perawatan'   => 'Penggantian Suku Cadang',
                'biaya'             => 800000,
                'id_saldo'          => 3,
                'keterangan'        => 'Ganti pisau mesin panen',
                'created_at'        => Carbon::now(),
                'updated_at'        => Carbon::now(),
            ],
        ]);
    }
}
