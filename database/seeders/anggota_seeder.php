<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AnggotaSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('anggota')->insert([
            [
                'nama' => 'Haris',
                'alamat' => 'Ds. Sungai Riam',
                'no_hp' => '082251456789',
                'id_role' => 4, // anggota
                'id_foto' => 4,
                'jabatan' => 'anggota',
                'tanggal_bergabung' => Carbon::createFromFormat('d-m-y', '10-11-18'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama' => 'Ferdi',
                'alamat' => 'Ds. Sungai Riam',
                'no_hp' => '083114685234',
                'id_role' => 4,
                'id_foto' => 5,
                'jabatan' => 'anggota',
                'tanggal_bergabung' => Carbon::createFromFormat('d-m-y', '12-11-19'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama' => 'Alifa',
                'alamat' => 'Ds. Sungai Riam',
                'no_hp' => '085178234851',
                'id_role' => 4,
                'id_foto' => 6,
                'jabatan' => 'operator',
                'tanggal_bergabung' => Carbon::createFromFormat('d-m-y', '01-01-21'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama' => 'Nahida',
                'alamat' => 'Ds. Sungai Riam',
                'no_hp' => '085365127892',
                'id_role' => 4,
                'id_foto' => 5,
                'jabatan' => 'pengurus',
                'tanggal_bergabung' => Carbon::createFromFormat('d-m-y', '27-10-23'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
