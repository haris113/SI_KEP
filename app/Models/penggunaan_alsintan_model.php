<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class penggunaan_alsintan_model extends Model
{
    protected $table = 'penggunaan_alsintan';
    protected $primaryKey = 'id_penggunaan';

    protected $fillable = [
        'id_alsintan',
        'id_anggota',
        'nama_pelanggan',
        'tanggal_mulai',
        'tanggal_selesai',
        'lokasi_lahan',
        'luas_lahan',
        'hasil_panen',
        'status'
    ];

    public function alsintan()
    {
        return $this->belongsTo(alsintan_model::class, 'id_alsintan', 'id_alsintan');
    }

    public function anggota()
    {
        return $this->belongsTo(anggota_model::class, 'id_anggota', 'id_anggota');
    }
}
