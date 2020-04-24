@extends('layouts.body')
@section('content')
    <div class="card mt-5">
        @if(session('sukses'))
            <div class="alert alert-success" role="alert">
                {{session('sukses')}}
            </div>
        @endif
        <div class="" role="alert"></div>
        <div class="card-header text-center">
                Data Penitipan
        </div>
        <div class="card-body">
            <table id="datatable" class="table table-bordered table-hover table-striped tblind">
                <thead>
                    <tr>
                        <th>Nama Pemilik</th>
                        <th>Alamat Pemilik</th>
                        <th>No HP</th>
                        <th>Nama  Hewan</th>
                        <th>Jenis Kelamin Hewan</th>
                        <th>Tanggal Penitipan</th>
                        <th>Tanggal Kembali</th>
                       <!--  <th style="width: 200px">Aksi</th> -->
                    </tr>
                </thead>
                <tbody>
                    @foreach($titipan as $p)  
                        <tr>
                            <td>{{  $p->nama_pemilik }}</td>
                            <td>{{  $p->alamat_pemilik }}</td>
                            <td>{{  $p->no_hp }}</td>
                            <td>{{  $p->nama_hewan }}</td>
                            <td>{{  $p->jenis_kelamin }}</td>
                            <td>{{  $p->tanggal_penitipan }}</td>
                            <td>{{  $p->tanggal_kembali }}</td>
                            <!-- <td>
                                <a href="#" class="btn btn-success detail">Detail</a>
                                <a href="/mobil/{{ $p->id }}" type="button" class="btn btn-warning">Edit</a>
                                <a href="/hapus/{{ $p->ktp }}" class="btn btn-danger">Hapus</a>
                            </td> -->
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection('content')