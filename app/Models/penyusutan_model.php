<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class penyusutan_model extends Model
{
     protected $table = 'penyusutan';        // Nama tabel
    protected $primaryKey = 'id_penyusutan'; // Primary Key
    public $timestamps = true;           // Menggunakan created_at & updated_at

    // Kolom yang boleh diisi
    protected $fillable = [
    'id_alsintan',
    'tahun',
    'nilai_perolehan',
    'nilai_penyusutan',
    'frekuensi',
    'tanggal_dibuat',
    ];

    // Relasi ke tabel alsintan
    public function alsintan()
    {
        return $this->belongsTo(alsintan_model::class, 'id_alsintan', 'id_alsintan');
    }
}
