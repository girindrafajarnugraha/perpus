@extends('layouts.master')
@section('content')

<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header">
                Tambah Data Petugas
            </div>
            @if (Count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $pesan)
                    <li>
                        {{$pesan}}
                    </li>
                    @endforeach
                </ul>
            </div>  
            @endif
            <div class="card-body">
                <form action="{{route ('pegawai.store')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Kode Petugas</label>
                      <input type="text" name="kode_petugas" class="form-control" id="kode_petugas" placeholder="Kode Petugas" aria-describedby="emailHelp">
                    </div>

                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Nama </label>
                      <input type="text" name="nama_petugas" class="form-control" placeholder="Nama Petugas" id="nama_petugas">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">No Telpon </label>
                        <input type="text" name="no_telpon_petugas" class="form-control" placeholder="No. Telpon Petugas" id="no_telpon_petugas">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">E-Mail </label>
                        <input type="email" name="email_petugas" class="form-control" placeholder="E-Mail" id="email_petugas">
                    </div>

                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="/pegawai" type="button" class="btn btn-warning">Batal</a>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection