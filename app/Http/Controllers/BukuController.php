<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;
use Validator;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Buku::all();

        return view('Buku.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Buku.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $validator = $request->validate([
        //     'kode_buku' => 'required|unique:bukus,kode_buku|max:10',
        //     'judul_buku' => 'required',
        //     'pengarang_buku' => 'required',
        //     'penerbit_buku' => 'required',
        //     'tahun_buku' => 'required',
        //     'jumlah_buku' => 'required',
        //     'jumlah_eksemplar_buku' => 'required',
        //     'status_buku' => 'required',
        //     'id_kategori_buku' => 'required',
        // ]);

        $validator = Validator::make($request->all(), [
            'kode_buku' => 'required|unique:bukus,kode_buku|max:10',
            'judul_buku' => 'required',
            'pengarang_buku' => 'required',
            'penerbit_buku' => 'required',
            'tahun_buku' => 'required',
            'jumlah_buku' => 'required',
            'jumlah_eksemplar_buku' => 'required',
            'status_buku' => 'required',
            'id_kategori_buku' => 'required',
        ]);

        if ($validator->fails()){
            return redirect('buku/create')
                    ->withErrors($validator)
                    ->withInput();
        }

        $data = new Buku();
        $simpan = $data->create($request->all());
        if ($simpan){
            return redirect()->route('buku.index')->with('success', 'Data berhasil disimpan!');
        }else{
            return redirect()->route('buku.index')->with('errors', 'Data gagal disimpan!');
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
        $data = Buku::findOrFail($id);
        return view('Buku.edit', compact('data'));
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
        $buku = Buku::findOrFail($id);
        $simpan = $buku->update($request->all());

        if ($simpan){
            return redirect()->route('buku.index')->with('success', 'Data berhasil diedit!');
        }else{
            return redirect()->route('buku.index')->with('errors', 'Data gagal diedit!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $buku = Buku::findOrFail($id);
        $hapus = $buku->delete();

        if ($hapus){
            return redirect()->route('buku.index')->with('success', 'Data berhasil dihapus!');
        }else{
            return redirect()->route('buku.index')->with('errors', 'Data gagal dihapus!');
        }
    }
}
