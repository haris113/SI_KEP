<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class arsip_dokumen_model extends Model
{
     protected $table = 'arsip_dokumen';        // Nama tabel
    protected $primaryKey = 'id_arsip'; // Primary Key
    public $timestamps = true;           // Menggunakan created_at & updated_at

    // Kolom yang boleh diisi
    protected $fillable = [
    'nama_dokumen',
    'file_path',
    'keterangan',
    ];

    // Relasi ke tabel foto
    public function foto()
    {
        return $this->belongsTo(foto_model::class, 'id_foto', 'id_foto');
    }
}
