<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Pengembalian extends Model
{
    use HasFactory;

    protected $table = 'pengembalians';
    
    protected $fillable = [
        'id',
        'id_peminjaman',
        'id_petugas',
        'tanggal_pengembalian',
        'keterangan',
        'status',
    ];

    public static function join(){
        $data = DB::table('pengembalians')
                ->select('pengembalians.id', 'pengembalians.tanggal_pengembalian', 'pengembalians.status', 'pengembalians.keterangan', 'pengembalians.id_petugas', 'pengembalians.id_peminjaman',
                            'peminjaman.kode_pinjam', 'peminjaman.lama_pinjam', 'peminjaman.tanggal_pinjam', 'peminjaman.tanggal_kembali', 'peminjaman.id_anggotas', 'peminjaman.id_bukus',
                            'petugas.kode_petugas', 'petugas.nama_petugas', 'petugas.no_telpon_petugas', 'petugas.email_petugas')
                ->join('peminjaman', 'peminjaman.id', '=', 'pengembalians.id_peminjaman')
                ->join('petugas', 'petugas.id', '=', 'pengembalians.id_petugas')
                ->get();
        
        return $data;
    }
}
