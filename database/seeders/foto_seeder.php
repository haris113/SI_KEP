<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class FotoSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('foto')->insert([

            // === FOTO USER (3) ===
            [
                'foto' => 'user1.jpg',
                'jenis' => 'user',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'foto' => 'user2.jpg',
                'jenis' => 'user',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'foto' => 'user3.jpg',
                'jenis' => 'user',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            // === FOTO ANGGOTA (3) ===
            [
                'foto' => 'anggota1.jpg',
                'jenis' => 'anggota',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'foto' => 'anggota2.jpg',
                'jenis' => 'anggota',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'foto' => 'anggota3.jpg',
                'jenis' => 'anggota',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            // === FOTO KEGIATAN (3) ===
            [
                'foto' => 'kegiatan1.jpg',
                'jenis' => 'kegiatan',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'foto' => 'kegiatan2.jpg',
                'jenis' => 'kegiatan',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'foto' => 'kegiatan3.jpg',
                'jenis' => 'kegiatan',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
