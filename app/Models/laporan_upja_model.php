<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class laporan_upja_model extends Model
{
    protected $table = 'laporan_upja';
    protected $primaryKey = 'id_laporan';

    protected $fillable = [
        'periode',
        'tanggal_laporan',
        'total_pendapatan',
        'total_pengeluaran',
        'dibuat_oleh'
    ];

    // relasi ke user
    public function user()
    {
        return $this->belongsTo(user_model::class, 'dibuat_oleh', 'id_user');
    }
}

