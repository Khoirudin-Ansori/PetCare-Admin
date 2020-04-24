@extends('layouts.body')
@section('content')
    <div class="card mt-5">
        @if(session('sukses'))
            <div class="alert alert-success" role="alert">
                {{session('sukses')}}
            </div>
        @endif
        <div class="card-body">
            <form action="/rawat/{{$rawat->id}}/update" method="POST">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="exampleInputEmail1">Nama Pemilik</label>
                    <input name="nama_pemilik" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Nama Mobil" value="{{$rawat->nama_pemilik}}" disabled="">
                </div>
                <div class="form-group" hidden="">
                    <label for="exampleInputPassword1">Alamat Pemilik</label>
                    <input name="alamat_pemilik" type="text" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Merk Mobil" value="{{$rawat->alamat_pemilik}}">
                </div>
                <div class="form-group" hidden="">
                    <label for="exampleInputPassword1">No HP</label>
                    <input name="no_hp" type="text" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Warna Mobil" value="{{$rawat->no_hp}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Nama Hewan</label>
                    <input name="nama_hewan" type="text" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Harga Mobil" value="{{$rawat->nama_hewan}}" disabled="">
                </div>
                <div class="form-group" hidden="">
                    <label for="exampleInputPassword1">Jenis Kelamin Hewam</label> 
                    <input name="jenis_kelamin" type="text" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Tahun Mobil" value="{{$rawat->jenis_kelamin}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Tanggal Penitipan</label> 
                    <input name="tanggal_penitipan" type="text" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Tahun Mobil" value="{{$rawat->tanggal_penitipan}}" disabled="">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Tanggal Kembali</label> 
                    <input name="tanggal_kembali" type="text" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Tahun Mobil" value="{{$rawat->tanggal_kembali}}" disabled="">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Perawatan 1</label> 
                    <input name="perawatan_1" type="text" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Perawatan Pertama" value="{{$rawat->perawatan_1}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Perawatan 2</label> 
                    <input name="perawatan_2" type="text" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Perawatan Kedua" value="{{$rawat->perawatan_2}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">perawatan 3</label> 
                    <input name="perawatan_3" type="text" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Perawatan Ketiga" value="{{$rawat->perawatan_3}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Perawatan 4</label> 
                    <input name="perawatan_4" type="text" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Perawatan Keempat" value="{{$rawat->perawatan_4}}">
                </div>
                <button type="submit" class="btn btn btn-warning">Rawat</button>
            </form>        
        </div>
     </div>
@endsection('content')
