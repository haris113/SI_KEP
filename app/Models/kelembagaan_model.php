<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class kelembagaan_model extends Model
{
     protected $table = 'kelembagaan';        // Nama tabel
    protected $primaryKey = 'id_kelembagaan'; // Primary Key
    public $timestamps = true;           // Menggunakan created_at & updated_at

    // Kolom yang boleh diisi
    protected $fillable = [
    'nama_lembaga',
    'jenis_lembaga',
    'alamat',
    'tahun_berdiri',
    'status_lembaga',
    'nomer_registrasi',
    'tanggal_terdaftar',
    'keterangan',
    ];
}
