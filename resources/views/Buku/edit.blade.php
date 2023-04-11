@extends('layouts.master')
@section('content')

<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header">
                Edit Data Buku
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
                {!! Form::model($data, ['route'=> ['buku.update', $data->id], 'method'=>'PUT']) !!}
                    <div class="form-group">
                        {!! Form::text('kode_buku', null, ['class'=>'form-control', 'id'=> 'kode_buku']) !!}
                    </div>
                    <div class="form-group">
                        <select class="form-select" name="id_kategori_buku" id="id_kategori_buku" aria-label="Default select example">
                            <option selected>-Pilih Kategori Buku-</option>
                            <option value="{{old('id_kategori',$data->id_kategori)==1? 'selected':''}}" value="1">One</option>
                            <option value="{{old('id_kategori',$data->id_kategori)=="two"? 'selected':''}}" value="1">Two</option>
                            <option value="{{old('id_kategori',$data->id_kategori)==3? 'selected':''}}" value="1">Three</option>
                        </select>
                    </div>

                    <div class="form-group">
                        {!! Form::text('judul_buku', null, ['class'=>'form-control', 'id'=> 'judul_buku']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::text('pengarang_buku', null, ['class'=>'form-control', 'id'=> 'pengarang_buku']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::text('penerbit_buku', null, ['class'=>'form-control', 'id'=> 'penerbit_buku']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::number('tahun_buku', null, ['class'=>'form-control', 'id'=> 'tahun_buku']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::number('jumlah_buku', null, ['class'=>'form-control', 'id'=> 'jumlah_buku']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::number('jumlah_eksemplar_buku', null, ['class'=>'form-control', 'id'=> 'jumlah_eksemplar_buku']) !!}
                    </div>
                    <div class="form-group">
                        <select class="form-select" name="status_buku" id="status_buku" aria-label="Default select example">
                            <option selected>-Pilih Status Buku-</option>
                            <option {{old('status_buku', $data->status_buku)=="Tersedia"? 'selected':''}} value="Tersedia">Tersedia</option>
                            <option {{old('status_buku', $data->status_buku)=="Dipinjam"? 'selected':''}} value="Dipinjam">Dipinjam</option>
                        </select>
                    </div>
                    <div class="form-group">
                        {!! Form::submit('Simpan', null, ['class'=>'btn btn-primary']) !!}
                        <a href="/buku" type="button" class="btn btn-warning">Batal</a>
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>

@endsection