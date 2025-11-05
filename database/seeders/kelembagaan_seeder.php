<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class KelembagaanSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('kelembagaan')->insert([
            [
                'nama_lembaga'       => 'Membangun Bersama',
                'jenis_lembaga'      => 'Kelembagaan Ekonomi Petani',
                'alamat'             => 'Sungai Riam',
                'tahun_berdiri'      => '2022',
                'status_lembaga'     => 'Aktif',
                'nomer_registrasi'   => '19216811',
                'tanggal_terdaftar'  => '2023-11-12', // format Y-m-d
                'keterangan'         => 'KEPT adalah dalam membangun bersama yaitu deskripsi mengenai organisasi itu sendiri',
                'created_at'         => Carbon::now(),
                'updated_at'         => Carbon::now(),
            ],
        ]);
    }
}
