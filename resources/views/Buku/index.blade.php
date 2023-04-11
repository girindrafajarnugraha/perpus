@extends('layouts.master')
@section('content')

<div class="row">
    <div class="col-md">
        <div>
            <a href="{{route ('buku.create')}}" class="btn btn-sm btn-primary">Tambah Buku</a>
        </div>
        <div class="card">
            <div class="card-header">
                Data Buku
            </div>
            <div class="card-body">
                <table id="myTable" class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Kode Buku</th>
                            <th>Kategori</th>
                            <th>Judul Buku</th>
                            <th>Pengarang</th>
                            <th>Penerbit</th>
                            <th>Tahun</th>
                            <th>Jumlah</th>
                            <th>Eksemplar</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no=1;?>
                        @foreach ($data as $data)
                        <tr>
                            <th scope="row"> {{$no}}</th>
                            <th>{{$data->kode_buku}}</th>
                            <th>{{$data->id_kategori_buku}}</th>
                            <th>{{$data->judul_buku}}</th>
                            <th>{{$data->pengarang_buku}}</th>
                            <th>{{$data->penerbit_buku}}</th>
                            <th>{{$data->tahun_buku}}</th>
                            <th>{{$data->jumlah_buku}}</th>
                            <th>{{$data->jumlah_eksemplar_buku}}</th>
                            <th>
                                @if($data->status_buku == 'Tersedia')
                                    <p class="text-success">{{$data->status_buku }}</p>
                                @elseif($data->status_buku == 'Dipinjam')
                                    <p class="text-danger">{{$data->status_buku }}</p>
                                @endif
                            </th>
                            <th>
                                <a href="{{route ('buku.edit', $data->id)}}" class="btn btn-sm btn-warning">Edit</a>
                                <form action="{{route ('buku.destroy', $data->id)}}"
                                    onclick="return confirm('Apakah yakin data akan dihapus')" method="POST">
                                    @csrf
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                </form>
                            </th>
                        </tr>
                        @endforeach
                        <?php $no++ ;?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection

@push('script')
    <script>
        console.log("Saya belajar Javascript");
    </script>
@endpush