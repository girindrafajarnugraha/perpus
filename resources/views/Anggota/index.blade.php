@extends('layouts.master')
@section('content')

<div class="row">
    <div class="col-md">
        <div>
            <a href="{{route ('anggota.create')}}" class="btn btn-sm btn-primary">Tambah Anggota</a>
        </div>
        <div class="card">
            <div class="card-header">
                Data Anggota
            </div>
            <div class="card-body">
                <table id="myTable" class="table table-striped table-hover">
                    <thead>
                    <tr>
                        <th>Kode Anggota</th>
                        <th>Nama</th>
                        <th>Kelas</th>
                        <th>Jenis Kelamin</th>
                        <th>Tanggal Lahir</th>
                        <th>Email</th>
                        <th>No Telpon</th>
                        <th>Alamat</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                    @foreach ($data as $data)
                    <tbody>
                    <tr>
                        <th>{{$data->kode_anggota}}</th>
                        <th>{{$data->nama_anggota}}</th>
                        <th>{{$data->kelas_anggota}}</th>
                        <th>{{$data->jenis_kelamin_anggota}}</th>
                        <th>{{$data->tanggal_lahir_anggota}}</th>
                        <th>{{$data->email_anggota}}</th>
                        <th>{{$data->no_telpon_anggota}}</th>
                        <th>{{$data->alamat_anggota}}</th>
                        <th>
                            @if ($data->status_pinjam == 'Bebas')
                                <p class="text-success">{{$data->status_pinjam}}</p>
                            @elseif ($data->status_pinjam == 'Tertanggung')
                                <p class="text-danger">{{$data->status_pinjam}}</p>
                            @endif
                        </th>
                        <th>
                            <a href="{{route ('anggota.edit', $data->id)}}" class="btn btn-sm btn-warning">Edit</a>
                            <form action="{{route ('anggota.destroy', $data->id)}}" onclick="return confirm('Apakah yakin data akan dihapus')" method="POST">
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