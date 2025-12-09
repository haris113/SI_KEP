<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class laporan_keuangan_model extends Model
{
    protected $table = 'laporan_keuangan'; // <-- sesuaikan dengan nama tabel asli kamu

    protected $primaryKey = 'id_transaksi'; // opsional, kalau primary key bukan "id" ubah di sini
}
