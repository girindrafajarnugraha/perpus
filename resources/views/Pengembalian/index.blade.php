@extends('layouts.master')
@section('content')

<div class="row">
    <div class="col-md">
        <div>
            <a href="{{route ('pengembalian.create')}}" class="btn btn-sm btn-primary">Tambah Peminjaman</a>
        </div>
        <div class="card">
            <div class="card-header">
                Data Pengembalian
            </div>
            <div class="card-body">
                <table id="myTable" class="table table-striped table-hover">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>No. Pinjam</th>
                        <th>Buku</th>
                        <th>Tanggal Peminjaman</th>
                        <th>Jatuh Tempo</th>
                        <th>Tanggal Pengembalian</th>
                        <th>Status</th>
                        <th>Keterangan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $data)
                    <tr>
                        <th>1</th>
                        <th>{{$data->kode_pinjam}}</th>
                        <th>{{$data->id_peminjaman}}</th> 
                        <th>{{$data->tanggal_pinjam}}</th>
                        <th>{{$data->tanggal_kembali}}</th>
                        <th>{{$data->tanggal_pengembalian}}</th>
                        <th>
                            @if($data->status == 'Lengkap')
                                <p class="text-success">{{$data->status}}</p>
                            @elseif($data->status == 'Kurang')
                                <p class="text-warning">{{$data->status}}</p>
                            @elseif($data->status == 'Terlambat')
                                <p class="text-danger">{{$data->status}}</p>
                            @endif
                        </th>
                        <th>{{$data->keterangan}}</th>
                        <th>
                            <a href="" class="btn btn-sm btn-warning">Edit</a>
                            <form action="" onclick="return confirm('Apakah yakin data akan dihapus')" method="POST">
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