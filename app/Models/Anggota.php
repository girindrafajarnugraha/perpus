<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    use HasFactory;
    protected $table = 'anggotas';
    protected $fillable = [
        'kode_anggota',
        'nama_anggota',
        'kelas_anggota',
        'jenis_kelamin_anggota',
        'tanggal_lahir_anggota',
        'email_anggota',
        'no_telpon_anggota',
        'alamat_anggota',
        'status_pinjam',
    ];
}
