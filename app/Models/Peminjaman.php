<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Peminjaman extends Model
{
    use HasFactory;

    protected $table = 'peminjaman';
    protected $fillable = [
        'id',
        'kode_pinjam',
        'lama_pinjam',
        'tanggal_pinjam',
        'tanggal_kembali',
        // 'keterangan',
        'id_petugas',
        'id_bukus',
        'id_anggotas',
    ];

    public static function join(){
        $data = DB::table('peminjaman')
                ->join('anggotas', 'anggotas.id', '=', 'peminjaman.id_anggotas')
                ->join('petugas', 'petugas.id', '=', 'peminjaman.id_petugas')
                ->select('peminjaman.id', 'peminjaman.kode_pinjam', 'peminjaman.lama_pinjam', 'peminjaman.tanggal_pinjam', 'peminjaman.kembali', 'peminjaman.id_petugas', 'peminjaman.id_bukus', 'peminjaman.id_anggotas',
                        'anggotas.id', 'anggotas.kode_anggota', 'anggotas.nama_anggota', 'anggotas.status_pinjam',
                        'petugas.id', 'petugas.kode_petugas', 'petugas.nama_petugas')
                ->get();
        return $data;
    }

    public static function cari($id){
        $data = DB::table('peminjaman')
                ->join('anggotas', 'anggotas.id', '=', 'peminjaman.id_anggotas')
                ->join('petugas', 'petugas.id', '=', 'peminjaman.id_petugas')
                ->select('peminjaman.id', 'peminjaman.kode_pinjam', 'peminjaman.lama_pinjam', 'peminjaman.tanggal_pinjam', 'peminjaman.kembali', 'peminjaman.id_petugas', 'peminjaman.id_bukus', 'peminjaman.id_anggotas',
                        'anggotas.id', 'anggotas.kode_anggota', 'anggotas.nama_anggota', 'anggotas.status_pinjam',
                        'petugas.id', 'petugas.kode_petugas', 'petugas.nama_petugas')
                ->where('peminjaman.id', $id)
                ->first();
        return $data;
    }
}
