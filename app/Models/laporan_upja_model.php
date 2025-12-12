<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class laporan_upja_model extends Model
{
     protected $table = 'laporan_upja'; // <-- sesuaikan dengan nama tabel asli kamu

    protected $primaryKey = 'id_laporan'; // opsional, kalau primary key bukan "id" ubah di sini
}
