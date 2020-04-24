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
                Data Perawatan
        </div>
        <div class="card-body">
            <table id="datatable" class="table table-bordered table-hover table-striped tblind">
                <thead>
                    <tr>
                        <th>Nama Pemilik</th>
                        <th>Nama  Hewan</th>
                        <th>Tanggal Penitipan</th>
                        <th>Tanggal Kembali</th>
                        <th>Perawatan 1</th>
                        <th>Perawatan 2</th>
                        <th>Perawatan 3</th>
                        <th>Perawatan 4</th>
                        <th style="width: 200px">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($perawatan as $p)  
                        <tr>
                            <td>{{  $p->nama_pemilik }}</td>
                            <td>{{  $p->nama_hewan }}</td>
                            <td>{{  $p->tanggal_penitipan }}</td>
                            <td>{{  $p->tanggal_kembali }}</td>
                            <td>{{  $p->perawatan_1 }}</td>
                            <td>{{  $p->perawatan_2 }}</td>
                            <td>{{  $p->perawatan_3 }}</td>
                            <td>{{  $p->perawatan_4 }}</td>
                            <td>
                                <!-- <a href="#" class="btn btn-success detail">Detail</a> -->
                                <a href="/rawat/{{ $p->id }}" type="button" class="btn btn-success">Rawat Hewan</a>
                                <!-- <a href="/hapus/{{ $p->ktp }}" class="btn btn-danger">Hapus</a> -->
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection('content')