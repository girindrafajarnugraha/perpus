<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Petugas;

class PetugasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Petugas::all();

        return view('Petugas.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Petugas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'kode_petugas' => 'required|unique:petugas|max:10',
            'nama_petugas' => 'required',
            'no_telpon_petugas' => 'required|max:13',
            'email_petugas' => 'required',
        ]);
        
        

        $data = new Petugas();
        $data->create($request->all());

        return redirect()->route('pegawai.index')->with('success', 'Data berhasil ditambah!');
        // var_dump($_POST);
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
        $data = Petugas::findOrFail($id);

        return view('Petugas.edit', compact('data'));
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
        $data = Petugas::findOrfail($id);
        $data->update($request->all());

        return redirect()->route('pegawai.index')->with('success', 'Data berhasil diedit!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Petugas::findOrfail($id);
        $hapus = $data->delete();
        if ($hapus){
            return redirect()->route('pegawai.index')->with('success', 'Data berhasil dihapus!');
        }else{
            return redirect()->route('pegawai.index')->with('errors', 'Data gagal dihapus!');
        }
    }
}
