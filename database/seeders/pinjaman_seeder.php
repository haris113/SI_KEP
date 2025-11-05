<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PinjamanSeeder extends Seeder
{
    public function run()
    {
        DB::table('pinjaman')->insert([
            [
                'id_anggota' => 2,
                'jumlah' => 30000000, // 30 JT
                'tanggal' => '2025-11-10',
                'keterangan' => 'Sebagai modal usaha tani',
                'status' => 'lunas',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_anggota' => 4,
                'jumlah' => 600000000, // 600 JT
                'tanggal' => '2025-11-12',
                'keterangan' => 'Beli lahan pertanian',
                'status' => 'belum lunas',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
