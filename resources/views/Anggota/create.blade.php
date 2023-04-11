@extends('layouts.master')
@section('content')

<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header">
                Tambah Data Anggota
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
                <form action="{{route ('anggota.store')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Kode Anggota</label>
                        <input type="text" name="kode_anggota" class="form-control" id="kode_anggota"
                            placeholder="Kode Anggota" aria-describedby="emailHelp">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Nama</label>
                        <input type="text" name="nama_anggota" class="form-control" placeholder="Nama Anggota"
                            id="nama_anggota">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Kelas</label>
                        <select class="form-select" name="kelas_anggota" id="kelas_anggota"
                            aria-label="Default select example">
                            <option selected>-Pilih Kelas-</option>
                            <option value="X-IPA 1">X-IPA 1</option>
                            <option value="X-IPA 2">X-IPA 2</option>
                            <option value="X-IPA 3">X-IPA 3</option>
                            <option value="X-IPA 4">X-IPA 4</option>
                            <option value="X-IPS 1">X-IPS 1</option>
                            <option value="X-IPS 2">X-IPS 2</option>
                            <option value="X-IPS 3">X-IPS 3</option>
                            <option value="XI-IPA 1">XI-IPA 1</option>
                            <option value="XI-IPA 2">XI-IPA 2</option>
                            <option value="XI-IPA 3">XI-IPA 3</option>
                            <option value="XI-IPA 4">XI-IPA 4</option>
                            <option value="XI-IPS 1">XI-IPS 1</option>
                            <option value="XI-IPS 2">XI-IPS 2</option>
                            <option value="XI-IPS 3">XI-IPS 3</option>
                            <option value="XII-IPA 1">XII-IPA 1</option>
                            <option value="XII-IPA 2">XII-IPA 2</option>
                            <option value="XII-IPA 3">XII-IPA 3</option>
                            <option value="XII-IPA 4">XII-IPA 4</option>
                            <option value="XII-IPS 1">XII-IPS 1</option>
                            <option value="XII-IPS 2">XII-IPS 2</option>
                            <option value="XII-IPS 3">XII-IPS 3</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Jenis Kelamin</label>
                        <select class="form-select" name="jenis_kelamin_anggota" id="jenis_kelamin_anggota"
                            aria-label="Default select example">
                            <option selected>-Pilih Jenis Kelamin-</option>
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Tanggal Lahir</label>
                        <input type="date" name="tanggal_lahir_anggota" class="form-control" placeholder="Tanggal Lahir"
                            id="tanggal_lahir_anggota">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">E-Mail</label>
                        <input type="email" name="email_anggota" class="form-control" placeholder="E-Mail"
                            id="email_anggota">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">No Telpon</label>
                        <input type="number" name="no_telpon_anggota" class="form-control"
                            placeholder="No. Telpon Anggota" id="no_telpon_anggota">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Alamat</label>
                        <input type="text" name="alamat_anggota" class="form-control" placeholder="Alamat"
                            id="alamat_anggota">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Status Pinjam</label>
                        <select class="form-select" name="status_pinjam" id="status_pinjam"
                            aria-label="Default select example">
                            <option selected>-Pilih Status Pinjam-</option>
                            <option value="Bebas">Bebas</option>
                            <option value="Tertanggung">Tertanggung</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="/anggota" type="button" class="btn btn-warning">Batal</a>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection