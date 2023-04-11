@extends('layouts.master')
@section('content')

<div class="row">
    <div class="col-md-6">
        <div class="card">
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
            <div class="card-header">
                <h3 class="card-title">DATA ANGGOTA</h3>
            </div>
            <div class="card-body">
                <form class="needs-validation" action="{{route ('peminjaman.store')}}" method="POST">
                    @csrf
                    {{-- <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Kode Anggota</label>
                      <input type="text" name="id_anggotas" class="form-control" id="id_anggotas" placeholder="Kode Anggota" aria-describedby="emailHelp">
                    </div> --}}

                    <div class="form-group">
                        <label>Kode Anggota</label>
                        <select class="form-control js-example-basic-single" name="id_anggotas" id="id_anggotas" style="width: 100%;">
                            <option selected="selected">-Pilih Kode Anggota-</option>
                            @foreach ($anggota as $anggota)
                            <option value="{{$anggota->id}}">{{$anggota->kode_anggota}} / {{$anggota->nama_anggota}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Nama Anggota</label>
                      <input type="text" name="nama_anggota" class="form-control" placeholder="Nama Anggota" id="nama_anggota">
                    </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">DATA PEMINJAMAN</h3>
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Kode Peminjaman </label>
                    <input type="text" name="kode_pinjam" class="form-control" placeholder="Kode Peminjaman" id="kode_pinjam">
                </div>
    
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Tanggal Peminjaman</label>
                    <input type="date" name="tanggal_pinjam" class="form-control" placeholder="Tanggal Peminjaman" id="tanggal_pinjam">
                </div>
    
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Tanggal Pengembalian</label>
                    <input type="date" name="tanggal_kembali" class="form-control" placeholder="Tanggal Pengembalian" id="tanggal_kembali">
                </div>
    
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Lama Peminjaman <i>(Hari)</i></label>
                    <input type="text" name="lama_pinjam" class="form-control" placeholder="Lama Peminjaman" id="lama_pinjam">
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">STOK BUKU</h3>
            </div>
            <div class="card-body">
                {{--Tabel Stok Buku--}}
                <table class="table" id="myTable">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode Buku</th>
                            <th>Judul</th>
                            <th>Stok</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($buku as $buku)
                        @php
                            $no = 1   
                        @endphp
                        <tr>
                            <td>{{$no}}</td>
                            <td>{{$buku->kode_buku}}</td>
                            <td>{{$buku->judul_buku}}</td>
                            <td>{{$buku->jumlah_buku}}</td>
                        </tr>
                        @php
                            $no++   
                        @endphp
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">ENTRI PEMINJAMAN</h3>
            </div>
            <div class="card-body">
                
                <div class="form-group">
                    <label>Kategori</label>
                    <select class="form-control dinamis" name="kategori_buku" id="kategori_buku" style="width: 100%;" data-dependent="kode_buku">
                        <option value="">-Pilih Kategori-</option>
                        @foreach ($book as $buku)
                        <option value="{{$buku->kategori_buku}}">{{$buku->kategori_buku}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label>Kode Buku</label>
                    <select class="form-control dinamis" name="id_bukus" id="kode_buku" style="width: 100%;" data-dependent="judul_buku">
                        <option value="">Pilih Kode Buku</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Judul Buku</label>
                    <select class="form-control dinamis" name="judul_buku" id="judul_buku" style="width: 100%;" data-dependent="kode_buku">
                        <option value="">Pilih Judul Buku</option>
                    </select>
                </div>

                {{-- <div class="form-group">
                    <label>Buku</label>
                    <select class="form-control js-example-basic-single" name="id_bukus" id="id_bukus" style="width: 100%;">
                        <option selected="selected">-Pilih Buku-</option>
                        @foreach ($bukus as $buku)
                        <option value="{{$buku->id}}">{{$buku->kode_buku}} / {{$buku->judul_buku}}</option>
                        @endforeach
                    </select>
                </div> --}}

                {{-- <div class="form-group">
                    <label>Buku</label>
                    <select class="form-control js-example-basic-multiple" name="id_bukus" id="id_bukus" multiple="multiple">
                        @foreach ($bukus as $buku)
                        <option value="{{$buku->id}}">{{$buku->kode_buku}} / {{$buku->judul_buku}}</option>
                        @endforeach
                    </select>
                </div> --}}

                <div class="form-group">
                    <label>Petugas</label>
                    <select class="form-control js-example-basic-single" name="id_petugas" id="id_petugas" style="width: 100%;">
                        <option selected="selected">-Pilih Petugas-</option>
                        @foreach ($petugas as $petugas)
                        <option value="{{$petugas->id}}">{{$petugas->kode_petugas}} / {{$petugas->nama_petugas}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Pinjam</button>
                    <a href="/peminjaman" type="button" class="btn btn-warning">Batal</a>
                </div>
            </div>
            
        </form>
        </div>
    </div>
</div>

@endsection