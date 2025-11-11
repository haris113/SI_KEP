<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class user_model extends Authenticatable
{
    use Notifiable;

    protected $table = 'user';
    protected $primaryKey = 'id_user';
    public $timestamps = true;

    protected $fillable = [
        'username',
        'password',
        'nama',
        'id_role',
        'id_foto',
    ];

    protected $hidden = [
        'password',
    ];

    public function role()
    {
        return $this->belongsTo(role_model::class, 'id_role', 'id_role');
    }

    public function foto()
    {
        return $this->belongsTo(foto_model::class, 'id_foto', 'id_foto');
    }
}
