@extends('layouts.master')
@section('content')

<div class="row">
    <div class="col-sm">
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
                <h3 class="card-title">DATA PEMINJAMAN</h3>
            </div>
            <div class="card-body">
                <form class="needs-validation" action="{{route ('peminjaman.store')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Kode Peminjaman</label>
                        <select class="form-control js-example-basic-single" name="id_peminjaman" id="kode_pinjam" style="width: 100%;">
                            <option selected="selected">-Pilih Kode Peminjaman-</option>
                            @foreach ($data as $data)
                            <option value="{{$data->id}}">{{$data->kode_pinjam}} / {{$data->id_anggotas}} / {{$data->id_bukus}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">ID Anggota</label>
                      <input type="text" name="id_anggotas" class="form-control" placeholder="ID Anggota" id="id_anggotas" >
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">ID Buku</label>
                        <input type="text" name="id_bukus" class="form-control" placeholder="ID Buku" id="id_bukus">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Tanggal Pinjam</label>
                        <input type="date" name="tanggal_pinjam" class="form-control" placeholder="tanggal_pinjam" id="tanggal_pinjam">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Tanggal Kembali</label>
                        <input type="date" name="tanggal_kembali" class="form-control" placeholder="tanggal_kembali" id="tanggal_kembali">
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">DATA PENGEMBALIAN</h3>
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Tanggal Pengembalian</label>
                    <input type="date" name="tanggal_pengembalian" class="form-control" placeholder="tanggal_pengembalian" id="tanggal_pengembalian">
                </div>

                <div class="form-group">
                    <label>Kategori Buku</label>
                    <select multiple class="form-control js-example-basic-single" name="kategori_buku[]" id="kategori_buku" style="width: 100%;">
                        <option selected="selected">-Pilih Kategori Buku-</option>
                        @foreach ($buku as $data)
                        <option value="{{$data->id}}">{{$data->kategori_buku}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label>Kode Buku</label>
                    <select multiple class="form-control js-example-basic-single" name="kode_buku[]" id="kode_buku" style="width: 100%;">
                        <option selected="selected">-Pilih Kode Buku-</option>
                        {{-- @foreach ($buku as $data)
                        <option value="{{$data->id}}">{{$data->kode_buku}} / {{$data->judul_buku}}</option>
                        @endforeach --}}
                    </select>
                

                <div class="form-group">
                    <label>Petugas</label>
                    <select class="form-control js-example-basic-single" name="id_petugas" id="id_petugas" style="width: 100%;">
                        <option selected="selected">-Pilih Petugas-</option>
                        {{-- @foreach ($petugas as $data)
                        <option value="{{$data->id}}">{{$data->nama_petugas}}</option>
                        @endforeach --}}
                    </select>
                </div>

                <div class="form-group">
                    <label>Status</label>
                    <select class="form-control js-example-basic-single" name="status" id="status" style="width: 100%;">
                        <option selected="selected">-Pilih Status-</option>
                        <option value="Lengkap">Lengkap</option>
                        <option value="Kurang">Kurang</option>
                        <option value="Terlambat">Terlambat</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Kekurangan Buku</label>
                    <select multiple class="form-control js-example-basic-single" name="kekurangan[]" id="kekurangan" style="width: 100%;">
                        @foreach ($buku as $data)
                        <option value="{{$data->id}}">{{$data->kode_buku}} / {{$data->judul_buku}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Keterangan</label>
                    <textarea name="keterangan" rows="3" class="form-control" placeholder="Keterangan" id="keterangan"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="/pengembalian/index" type="button" class="btn btn-warning">Batal</a>
                </form>
            </div>
            </div>
    </div> 
</div>

@endsection

@push('script')
    <script>
        $(document).ready(function (){
            $(#kategori_buku).multiselect({
                nonSelectedText: "Pilih Kategori Buku",
                buttonWidth: '100%',

                onChange: function (option,selected){
                    var kategori = this.$select.val();
                    var token = $("input[name='_token']").val()
                    if (kategori.length > 0) {
                        $.ajax({
                            url: "{{route('jabar')}}",
                            method: 'POST',
                            data: {kategori:kategori_buku, _token:token},
                            success: function (data){
                                $('#kode_buku').html(data)
                                $('#kode_buku').multiselect('rebuild')
                            }
                        })
                    }
                }
            });
            $('#kode_buku').multiselect({
                nonSelectedText: "Pilih Kategori Buku",
                buttonWidth: '100%'
            });
            $('#id_peminjaman').change(function (){
                var kode = $('#id_peminjaman').val()
                var token = $("input[name='_token']").val()
                $.ajax({
                    url: "{{route('cari')}}",
                    method: 'POST',
                    data: {id: kode, _token:token},
                    success: function(res){
                        console.log(res.data);
                    }
                })
            })
        })
    </script>
@endpush