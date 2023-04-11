<?php

namespace App\Http\Controllers;

use App\Models\Peminjaman;
use App\Models\Pengembalian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PengembalianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Pengembalian::join();
        $idPinjam = Peminjaman::all();

        // $kembali = DB::table('pengembalians')
        //         ->select('pengembalians.kode_pengembalian', 'pengembalians.tanggal_pengembalian', 'pengembalians.status', 'pengembalians.keterangan', 'pengembalians.denda', 'pengembalians.id_peminjaman',
        //                     'peminjaman.id', 'peminjaman.kode_pinjam', 'peminjaman.lama_pinjam', 'peminjaman.tanggal_pinjam', 'peminjaman.tanggal_kembali')
        //         ->join('peminjaman', 'peminjaman.id', '=', 'pengembalians.id_peminjaman')
        //         ->get();
        // $pinjam = DB::table('peminjaman')
        //         ->select('peminjaman.id_bukus', 'bukus.judul_buku')
        //         ->join('bukus', 'bukus.id', '=', 'peminjaman.id_bukus')
        //         ->where('peminjaman.id', '=', $kembali)
        //         ->get();
        return view('Pengembalian.index', compact('data', 'idPinjam'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Peminjaman::all();
        $buku = DB::table('bukus')
                ->groupBy('kategori_buku')
                ->get();

        $petugas = DB::table('petugas')
                ->select('petugas.nama_petugas', 'petugas.id', 'petugas.kode_petugas',
                        'peminjaman.id', 'peminjaman.kode_pinjam', 'peminjaman.id_petugas')
                ->join('peminjaman', 'peminjaman.id_petugas', '=', 'petugas.id')
                ->groupBy('peminjaman.id_petugas')
                ->get();

        return view('Pengembalian.create', compact('data', 'buku', 'petugas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function cari(Request $request)
    {
        $id = $request->get('id');
        $data = Peminjaman::cari($id);

        return response()->json(['data'=>$data]);
    }
}
