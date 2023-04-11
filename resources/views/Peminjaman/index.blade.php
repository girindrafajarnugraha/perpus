@extends('layouts.master')
@section('content')

<div class="row">
    <div class="col-md">
        <div>
            <a href="{{route ('peminjaman.create')}}" class="btn btn-sm btn-primary">Tambah Peminjaman</a>
        </div>
        <div class="card">
            <div class="card-header">
                Data Peminjaman
            </div>
            <div class="card-body">
                <table id="myTable" class="table table-striped table-hover">
                    <thead>
                    <tr>
                        <th>Kode Peminjaman</th>
                        <th>Nama Anggota</th>
                        <th>Buku</th>
                        <th>Tanggal Peminjaman</th>
                        <th>Tanggal Pengembalian</th>
                        <th>Lama Peminjaman <i>(Hari)</i></th>
                        <th>Petugas</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($join as $data)
                    <tr>
                        <th>{{$data->kode_pinjam}}</th>
                        <th>{{$data->nama_anggota}}</th>
                        <th>{{$data->judul_buku}}</th>
                        <th>{{$data->tanggal_pinjam}}</th>
                        <th>{{$data->tanggal_kembali}}</th>
                        <th>{{$data->lama_pinjam}}</th>
                        <th>{{$data->nama_petugas}}</th>
                        <th>
                            <a href="{{route ('peminjaman.edit', $data->id)}}" class="btn btn-sm btn-warning">Edit</a>
                            <form action="{{route ('peminjaman.destroy', $data->id)}}" onclick="return confirm('Apakah yakin data akan dihapus')" method="POST">
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