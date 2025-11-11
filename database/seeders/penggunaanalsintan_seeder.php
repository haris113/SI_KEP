<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class penggunaanalsintan_seeder extends Seeder
{
    public function run(): void
    {
        DB::table('penggunaan_alsintan')->insert([
            [
                'id_alsintan' => 1,
                'id_anggota' => 1,
                'nama_pelanggan' => 'Budi Santoso',
                'tanggal_mulai' => '2025-02-10',
                'tanggal_selesai' => '2025-02-11',
                'lokasi_lahan' => 'Desa Sukamaju',
                'luas_lahan' => '2 Ha',
                'hasil_panen' => '3 Ton',
                'status' => 'Selesai',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_alsintan' => 2,
                'id_anggota' => 2,
                'nama_pelanggan' => 'Darsono',
                'tanggal_mulai' => '2025-03-01',
                'tanggal_selesai' => '2025-03-03',
                'lokasi_lahan' => 'Desa Karanganyar',
                'luas_lahan' => '3 Ha',
                'hasil_panen' => '4 Ton',
                'status' => 'Selesai',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_alsintan' => 1,
                'id_anggota' => 3,
                'nama_pelanggan' => 'Sutrisno',
                'tanggal_mulai' => '2025-04-05',
                'tanggal_selesai' => '2025-04-06',
                'lokasi_lahan' => 'Desa Margodadi',
                'luas_lahan' => '1.5 Ha',
                'hasil_panen' => '2 Ton',
                'status' => 'Selesai',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
