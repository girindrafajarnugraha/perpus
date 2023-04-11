<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;

    protected $table = 'bukus';
    protected $fillable = [
        'id',
        'kode_buku',
        'kategori_buku',
        'judul_buku',
        'pengarang_buku',
        'penerbit_buku',
        'tahun_buku',
        'jumlah_buku',
        'jumlah_eksemplar_buku',
        'status_buku',
        'id_kategori_buku',
    ];
}
