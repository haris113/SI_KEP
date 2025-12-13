<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class perawatan_model extends Model
{
    // Nama tabel
    protected $table = 'perawatan';

    // Primary key (jika bukan id default)
    protected $primaryKey = 'id_perawatan';

    // Aktifkan timestamps
    public $timestamps = true;

    // Kolom yang boleh diisi (mass assignment)
    protected $fillable = [
        'id_alsintan',
        'tanggal_perawatan',
        'jenis_perawatan',
        'biaya',
        'id_saldo',
        'keterangan',
    ];

    /**
     * Relasi ke tabel alsintan
     * perawatan -> alsintan
     */
    public function alsintan()
    {
        return $this->belongsTo(alsintan_model::class, 'id_alsintan');
    }

    /**
     * Relasi ke tabel saldo (opsional)
     * perawatan -> saldo
     */
    public function saldo()
    {
        return $this->belongsTo(saldo_model::class, 'id_saldo');
    }
}
