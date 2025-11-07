<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class user_model extends Model
{
    use HasFactory;

    protected $table ='user';
    protected $primarykey ='id_user';

    protected $fillable = [
        'username','password','nama','id_role','id_foto'
    ];

    public $timestamps = false;
}
