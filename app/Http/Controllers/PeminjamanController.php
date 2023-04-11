<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use App\Models\Buku;
use App\Models\Peminjaman;
use App\Models\Petugas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Validator;

class PeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $peminjaman = Peminjaman::all();
        $join = DB::table('peminjaman')
        ->select('peminjaman.id', 'peminjaman.kode_pinjam', 'peminjaman.lama_pinjam', 'peminjaman.tanggal_pinjam', 'peminjaman.tanggal_kembali', 'peminjaman.id_petugas', 'peminjaman.id_anggotas', 'peminjaman.id_bukus',
                'anggotas.nama_anggota', 'petugas.nama_petugas', 'bukus.judul_buku')
        ->join('anggotas', 'anggotas.id', '=', 'peminjaman.id_anggotas')
        ->join('petugas', 'petugas.id', '=', 'peminjaman.id_petugas')
        ->join('bukus', 'bukus.id', '=', 'peminjaman.id_bukus')
        ->get();
        return view('Peminjaman.index', compact('join', 'peminjaman'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $buku = Buku::all();
        $bukus = Buku::all();
        $book = DB::table('bukus')
                ->groupBy('kategori_buku')
                ->get();
        // $buku = DB::table('bukus')
        // ->select('id', 'kode_buku', 'judul_buku', 'jumlah_buku')
        // ->get();
        $anggota = Anggota::all();
        $petugas = Petugas::all();
        return view('Peminjaman.create', compact('book', 'bukus', 'buku', 'anggota', 'petugas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        // $data = new Peminjaman();
        // $data->id_anggotas = $request->id_anggotas;
        // // $data->nama_anggota = $request->nama_anggota;
        // $data->kode_pinjam = $request->kode_pinjam;
        // $data->tanggal_pinjam = $request->tanggal_pinjam;
        // $data->tanggal_kembali = $request->tanggal_kembali;
        // $data->lama_pinjam = $request->lama_pinjam;
        // $data->id_bukus = $request->id_bukus;
        // $data->id_petugas = $request->id_petugas;
        // $data->save();

        $validator = Validator::make($request->all(), [
            'id_anggotas' => 'required',
            'kode_pinjam' => 'required|max:10',
            'tanggal_pinjam' => 'required',
            'tanggal_kembali' => 'required',
            'lama_pinjam' => 'required|max:5',
            'id_bukus' => 'required',
            'id_petugas' => 'required',
        ]);

        if ($validator->fails()){
            return redirect('peminjaman/create')
                    ->withErrors($validator)
                    ->withInput();
        }

        $data = new Peminjaman();
        $simpan = $data->create($request->all());
        if ($simpan){
            return redirect()->route('peminjaman.index')->with('success', 'Data berhasil disimpan!');
        }else{
            return redirect()->route('peminjaman.index')->with('errors', 'Data gagal disimpan!');
        }
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

    public function jabar(Request $request)
    {
        $pilih = $request->get('pilih');
        $nilai = $request->get('nilai');
        $depend = $request->get('depend');

        $data = DB::table('bukus')
                ->where($pilih,$nilai)
                ->groupBy($depend)
                ->get();
        $hasil = '<option value="">Pilih Kode Buku'.ucfirst($depend).'</option>';
        foreach($data as $value){
            $hasil .= '<option value="'.$value->depend.'">'.$value->depend.'</option>';
        }   
        
        // $hasil = '<option value="'.$item->kategori_buku.'">Pilih Kode Buku'.ucfirst($depend).'</option>';
        // foreach($data as $value){
        //     $hasil .= '<option value="'.$value->depend.'">'.$value->depend.'</option>';
        // }   

        echo $hasil;
    }
}
