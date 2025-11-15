<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class kegiatan_model extends Model
{
    protected $table = 'kegiatan';        // Nama tabel
    protected $primaryKey = 'id_kegiatan'; // Primary Key
    public $timestamps = true;           // Menggunakan created_at & updated_at

    // Kolom yang boleh diisi
    protected $fillable = [
        'keterangan',
        'nama_kegiatan',
        'id_foto',
    ];

    // Relasi ke tabel foto
    public function foto()
    {
        return $this->belongsTo(foto_model::class, 'id_foto', 'id_foto');
    }
}
