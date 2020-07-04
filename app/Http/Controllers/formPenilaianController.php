<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class formPenilaianController extends Controller
{
    public function index()
    {

        return view('admin.formPenilaian.index');
    }

    public function store(Request $request)
    {

        return redirect()->route('formPenilaianIndex')->with('success', 'Data Berhasil Disimpan');
    }

    public function edit($uuid)
    {
        return view('admin.formPenilaian.edit');
    }


    // public function update(Request $request, $uuid)
    // {
      

    //     return redirect()->route('objekPenelitianIndex')->with('success', 'Data Berhasil Diubah');
    // }

    // public function destroy($uuid)
    // {

    //     return redirect()->route('objekPenelitianIndex')->with('success', 'Data Berhasil Dihapus');
    // }
}
