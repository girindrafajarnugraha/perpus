@extends('layouts.master')
@section('content')

<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header">
                Tambah Data Buku
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
                <form action="{{route ('buku.store')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Kode Buku</label>
                        <input type="text" name="kode_buku" class="form-control" id="kode_buku"
                            placeholder="Kode Buku" aria-describedby="emailHelp">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Judul</label>
                        <input type="text" name="judul_buku" class="form-control"
                            placeholder="Judul Buku" id="judul_buku">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Pengarang</label>
                        <input type="text" name="pengarang_buku" class="form-control" placeholder="Pengarang Buku"
                            id="pengarang_buku">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Penerbit</label>
                        <input type="text" name="penerbit_buku" class="form-control" placeholder="Penerbit Buku"
                            id="penerbit_buku">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Tahun</label>
                        <input type="number" name="tahun_buku" class="form-control" placeholder="Tahun Buku"
                            id="tahun_buku">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Jumlah</label>
                        <input type="number" name="jumlah_buku" class="form-control" placeholder="Jumlah Buku"
                            id="jumlah_buku">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Eksemplar</label>
                        <input type="number" name="jumlah_eksemplar_buku" class="form-control" placeholder="Jumlah Eksemplar Buku"
                            id="jumlah_eksemplar_buku">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Status</label>
                        <select class="form-select" name="status_buku" id="status_buku" aria-label="Default select example">
                            <option selected>-Pilih Status Buku-</option>
                            <option value="Tersedia">Tersedia</option>
                            <option value="Dipinjam">Dipinjam</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="/buku" class="btn btn-warning">Batal</a>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection