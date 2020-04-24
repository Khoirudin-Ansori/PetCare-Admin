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
                Daftar Customer 
        </div>
        <div class="card-body">
            <table id="datatable" class="table table-bordered table-hover table-striped tblind">
                <thead>
                    <tr>
                        <th>Email</th>
                        <th>Username</th>
                        <th>Password</th>
                       <!--  <th style="width: 200px">Aksi</th> -->
                    </tr>
                </thead>
                <tbody>
                    @foreach($customer as $p)  
                        <tr>
                            <td>{{  $p->email }}</td>
                            <td>{{  $p->username }}</td>
                            <td>{{  $p->password }}</td>
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