<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class anggota_seeder extends Seeder
{
    public function run(): void
    {
       DB::table('anggota')->insert([
    [
        'nama' => 'Haris',
        'alamat' => 'Ds. Sungai Riam',
        'no_hp' => '082251456789',
        'id_role' => 4,
        'id_foto' => 4,
        'jabatan' => 'anggota',
        'tanggal_bergabung' => '2018-11-10',
        'created_at' => now(),
        'updated_at' => now(),
    ],
    [
        'nama' => 'Ferdi',
        'alamat' => 'Ds. Sungai Riam',
        'no_hp' => '083114685234',
        'id_role' => 4,
        'id_foto' => 5,
        'jabatan' => 'anggota',
        'tanggal_bergabung' => '2019-11-12',
        'created_at' => now(),
        'updated_at' => now(),
    ],
    [
        'nama' => 'Alifa',
        'alamat' => 'Ds. Sungai Riam',
        'no_hp' => '085178234851',
        'id_role' => 4,
        'id_foto' => 6,
        'jabatan' => 'operator',
        'tanggal_bergabung' => '2021-01-01',
        'created_at' => now(),
        'updated_at' => now(),
    ],
    [
        'nama' => 'Nahida',
        'alamat' => 'Ds. Sungai Riam',
        'no_hp' => '085365127892',
        'id_role' => 4,
        'id_foto' => 5,
        'jabatan' => 'pengurus',
        'tanggal_bergabung' => '2023-10-27',
        'created_at' => now(),
        'updated_at' => now(),
    ],
]);

    }
}
