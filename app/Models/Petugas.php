<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Petugas extends Model
{
    use HasFactory;

    protected $table = 'petugas';
    protected $fillable = [
        'id',
        'kode_petugas',
        // 'username_petugas',
        'nama_petugas',
        'no_telpon_petugas',
        'email_petugas',
    ];
}
