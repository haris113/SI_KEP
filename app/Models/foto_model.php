<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class foto_model extends Model
{
    use HasFactory;

    // 👇 Ini wajib supaya Laravel tidak mencari tabel "foto_models"
    protected $table = 'foto';

    protected $primaryKey = 'id_foto';
    public $incrementing = true;
    protected $keyType = 'int';

    protected $fillable = [
        'foto',
        'jenis',
    ];

    // Relasi ke User
    public function users()
    {
        return $this->hasMany(User::class, 'id_foto', 'id_foto');
    }
}
