@extends('layouts.master')
@section('content')

<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header">
                Edit Data Anggota
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
                {!! Form::model($data, ['route'=> ['anggota.update', $data->id], 'method'=>'PUT']) !!}
                    <div class="form-group">
                        {!! Form::text('kode_anggota', null, ['class'=>'form-control', 'id'=> 'kode_anggota']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::text('nama_anggota', null, ['class'=>'form-control', 'id'=> 'nama_anggota']) !!}
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Kelas</label>
                        <select class="form-select" name="kelas_anggota" id="kelas_anggota"
                            aria-label="Default select example">
                            <option selected>-Pilih Kelas-</option>
                            <option {{old('kelas_anggota', $data->kelas_anggota)=="X-IPA 1"? 'selected':''}} value="X-IPA 1">X-IPA 1</option>
                            <option {{old('kelas_anggota', $data->kelas_anggota)=="X-IPA 2"? 'selected':''}} value="X-IPA 2">X-IPA 2</option>
                            <option {{old('kelas_anggota', $data->kelas_anggota)=="X-IPA 3"? 'selected':''}} value="X-IPA 3">X-IPA 3</option>
                            <option {{old('kelas_anggota', $data->kelas_anggota)=="X-IPA 4"? 'selected':''}} value="X-IPA 4">X-IPA 4</option>
                            <option {{old('kelas_anggota', $data->kelas_anggota)=="X-IPS 1"? 'selected':''}} value="X-IPS 1">X-IPS 1</option>
                            <option {{old('kelas_anggota', $data->kelas_anggota)=="X-IPS 2"? 'selected':''}} value="X-IPS 2">X-IPS 2</option>
                            <option {{old('kelas_anggota', $data->kelas_anggota)=="X-IPS 3"? 'selected':''}} value="X-IPS 3">X-IPS 3</option>
                            <option {{old('kelas_anggota', $data->kelas_anggota)=="XI-IPA 1"? 'selected':''}} value="XI-IPA 1">XI-IPA 1</option>
                            <option {{old('kelas_anggota', $data->kelas_anggota)=="XI-IPA 2"? 'selected':''}} value="XI-IPA 2">XI-IPA 2</option>
                            <option {{old('kelas_anggota', $data->kelas_anggota)=="XI-IPA 3"? 'selected':''}} value="XI-IPA 3">XI-IPA 3</option>
                            <option {{old('kelas_anggota', $data->kelas_anggota)=="XI-IPA 4"? 'selected':''}} value="XI-IPA 4">XI-IPA 4</option>
                            <option {{old('kelas_anggota', $data->kelas_anggota)=="XI-IPS 1"? 'selected':''}} value="XI-IPS 1">XI-IPS 1</option>
                            <option {{old('kelas_anggota', $data->kelas_anggota)=="XI-IPS 2"? 'selected':''}} value="XI-IPS 2">XI-IPS 2</option>
                            <option {{old('kelas_anggota', $data->kelas_anggota)=="XI-IPS 3"? 'selected':''}} value="XI-IPS 3">XI-IPS 3</option>
                            <option {{old('kelas_anggota', $data->kelas_anggota)=="XII-IPA 1"? 'selected':''}} value="XII-IPA 1">XII-IPA 1</option>
                            <option {{old('kelas_anggota', $data->kelas_anggota)=="XII-IPA 2"? 'selected':''}} value="XII-IPA 2">XII-IPA 2</option>
                            <option {{old('kelas_anggota', $data->kelas_anggota)=="XII-IPA 3"? 'selected':''}} value="XII-IPA 3">XII-IPA 3</option>
                            <option {{old('kelas_anggota', $data->kelas_anggota)=="XII-IPA 4"? 'selected':''}} value="XII-IPA 4">XII-IPA 4</option>
                            <option {{old('kelas_anggota', $data->kelas_anggota)=="XIII-IPS 1"? 'selected':''}} value="XII-IPS 1">XII-IPS 1</option>
                            <option {{old('kelas_anggota', $data->kelas_anggota)=="XIII-IPS 2"? 'selected':''}} value="XII-IPS 2">XII-IPS 2</option>
                            <option {{old('kelas_anggota', $data->kelas_anggota)=="XIII-IPS 3"? 'selected':''}} value="XII-IPS 3">XII-IPS 3</option>
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
                    <div class="form-group">
                        {!! Form::date('tanggal_lahir_anggota', null, ['class'=>'form-control', 'id'=> 'tanggal_lahir_anggota']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::email('email_anggota', null, ['class'=>'form-control', 'id'=> 'email_anggota']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::number('no_telpon_anggota', null, ['class'=>'form-control', 'id'=> 'no_telpon_anggota']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::text('alamat_anggota', null, ['class'=>'form-control', 'id'=> 'alamat_anggota']) !!}
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
                    <div class="form-group">
                        {!! Form::submit('Simpan', null, ['class'=>'btn btn-primary']) !!}
                        <a href="/pengembalian" type="button" class="btn btn-warning">Batal</a>
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>

@endsection