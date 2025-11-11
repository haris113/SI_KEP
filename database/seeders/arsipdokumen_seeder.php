<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class arsipdokumen_seeder extends Seeder
{
    public function run(): void
    {
        DB::table('arsip_dokumen')->insert([
            [
                'nama_dokumen' => 'Dokumen SK Pembentukkan KEP',
                'file_path' => 'sk_kep.pdf',
                'keterangan' => 'Dokumen ini merupakan arsip SK Pembentukan KEP yang disimpan sebagai bukti administratif dan dapat digunakan kembali untuk kebutuhan verifikasi, pelaporan, ataupun keperluan tindak lanjut kegiatan.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
