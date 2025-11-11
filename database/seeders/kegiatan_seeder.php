<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class kegiatan_seeder extends Seeder
{
    public function run(): void
    {
        DB::table('kegiatan')->insert([
            [
                'nama_kegiatan' => 'Rapat Rutin KEP',
                'keterangan' => 'Rapat Rutin KEP membahas tentang bagaimana bagi hasil',
                'id_foto' => 7, // tidak ada foto
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
