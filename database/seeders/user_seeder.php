<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class user_seeder extends Seeder
{
    public function run(): void
    {
        DB::table('user')->insert([
            [
                'username'   => 'haris123',
                'password'   => Hash::make('123'),
                'nama'       => 'muhammad abdul haris',
                'id_role'    => 1,
                'id_foto'    => 1, // ✅ tambahkan ini
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username'   => 'L1lnie',
                'password'   => Hash::make('123'),
                'nama'       => 'ferdi nurrahman',
                'id_role'    => 2,
                'id_foto'    => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username'   => 'emily',
                'password'   => Hash::make('123'),
                'nama'       => 'Emilya Maulidina Rasyida Putri',
                'id_role'    => 3,
                'id_foto'    => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username'   => 'Paradiba',
                'password'   => Hash::make('123'),
                'nama'       => 'Alifa Nur Nabila Paradiba',
                'id_role'    => 4,
                'id_foto'    => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username'   => 'aries',
                'password'   => Hash::make('123'),
                'nama'       => 'Ariestya Eka Wulandari',
                'id_role'    => 5,
                'id_foto'    => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
