<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            role_seeder::class,
            foto_seeder::class,
            user_seeder::class,
            anggota_seeder::class,
            kegiatan_seeder::class,
            kelembagaan_seeder::class,
            arsipDokumen_seeder::class,
            laporankeuangan_seeder::class,
            alsintan_seeder::class,
            penyusutan_seeder::class,
            pinjaman_seeder::class,
            laporanupja_seeder::class, 
            penggunaanalsintan_seeder::class,
            saldo_seeder::class,
            perawatan_seeder::class,
        ]);
    }
}
