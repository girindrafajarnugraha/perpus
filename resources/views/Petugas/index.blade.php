@extends('layouts.master')
@section('content')

<div class="row">
    <div class="col-md">
        <div>
            <a href="{{route ('pegawai.create')}}" class="btn btn-sm btn-primary">Tambah Petugas</a>
        </div>
        <div class="card">
            <div class="card-header">
                Data Petugas
            </div>
            <div class="card-body">
                <table id="myTable" class="table table-striped table-hover">
                    <thead>
                    <tr>
                        <th>Kode Petugas</th>
                        <th>Nama</th>
                        <th>No Telpon</th>
                        <th>Email</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                    @foreach ($data as $data)
                    <tbody>
                    <tr>
                        <th>{{$data->kode_petugas}}</th>
                        <th>{{$data->nama_petugas}}</th>
                        <th>{{$data->no_telpon_petugas}}</th>
                        <th>{{$data->email_petugas}}</th>
                        <th>
                            <a href="{{route ('pegawai.edit', $data->id)}}" class="btn btn-sm btn-warning">Edit</a>
                            <form action="{{route ('pegawai.destroy', $data->id)}}" onclick="return confirm('Apakah yakin data akan dihapus')" method="POST">
                                @csrf
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                            </form>
                        </th>
                    </tr>
                </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>

@endsection