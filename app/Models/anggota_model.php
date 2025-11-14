<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class anggota_model extends Model
{
    protected $table = 'anggota';        // Nama tabel
    protected $primaryKey = 'id_anggota'; // Primary Key
    public $timestamps = true;           // Menggunakan created_at & updated_at

    // Kolom yang boleh diisi
    protected $fillable = [
        'nama',
        'alamat',
        'no_hp',
        'id_role',
        'id_foto',
        'jabatan',
        'tanggal_bergabung'
    ];

    // Relasi ke tabel role
    public function role()
    {
        return $this->belongsTo(role_model::class, 'id_role', 'id_role');
    }

    // Relasi ke tabel foto
    public function foto()
    {
        return $this->belongsTo(foto_model::class, 'id_foto', 'id_foto');
    }
}
