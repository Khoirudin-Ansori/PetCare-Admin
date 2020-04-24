<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerawatanController extends Controller
{
    public function index()
    {
        $perawatan=\App\Titipan::all();
        return view('perawatan.index',['perawatan'=>$perawatan]);
    }

    public function edit($id)
    {
        $rawat = \App\Titipan::find($id);
        return view('perawatan.edit',['rawat' => $rawat]);
    }
    public function update(Request $request,$id)
    {
        $rawat = \App\Titipan::find($id);
        $rawat->update($request->all());
        return redirect('/home')->with('sukses','Data Berhasil Di Update');
    }
}
