<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use Illuminate\Http\Request;
use Validator;

class AnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Anggota::all();
        return view('Anggota.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Anggota.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'kode_anggota' => 'required|unique:anggotas,kode_anggota|max:10',
            'nama_anggota' => 'required',
            'kelas_anggota',
            'jenis_kelamin_anggota' => 'required',
            'tanggal_lahir_anggota' => 'required',
            'email_anggota' => 'required',
            'no_telpon_anggota' => 'required',
            'alamat_anggota' => 'required',
            'status_pinjam' => 'required',
        ]);

        if ($validator->fails()){
            return redirect('anggota/create')
                    ->withErrors($validator)
                    ->withInput();
        }

        $data = new Anggota();
        $simpan = $data->create($request->all());
        if ($simpan){
            return redirect()->route('anggota.index')->with('success', 'Data berhasil disimpan!');
        }else{
            return redirect()->route('anggota.index')->with('errors', 'Data gagal disimpan!');
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
        $data = Anggota::findOrFail($id);
        return view('Anggota.edit', compact('data'));
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
        $buku = Anggota::findOrFail($id);
        $simpan = $buku->update($request->all());

        if ($simpan){
            return redirect()->route('anggota.index')->with('success', 'Data berhasil diedit!');
        }else{
            return redirect()->route('anggota.index')->with('errors', 'Data gagal diedit!');
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
        $anggota = Anggota::findOrFail($id);
        $hapus = $anggota->delete();

        if ($hapus){
            return redirect()->route('anggota.index')->with('success', 'Data berhasil dihapus!');
        }else{
            return redirect()->route('anggota.index')->with('errors', 'Data gagal dihapus!');
        }
    }
}
