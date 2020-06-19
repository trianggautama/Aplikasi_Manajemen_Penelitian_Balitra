<?php

namespace App\Http\Controllers;

use App\Hasil_penelitian;
use App\Penelitian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class hasilPenelitianController extends Controller
{

    public function index()
    {
        $data = Penelitian::all();
        return view('admin.hasilPenelitian.index', compact('data'));
    }

    public function penelitiIndex()
    {

        $peneliti_id = Auth::user()->peneliti->id;
        $data = Penelitian::where('peneliti_id', $peneliti_id)->first();

        return view('peneliti.hasilPenelitian.index', compact('data'));
    }

    //peneliti store
    public function store(Request $req)
    {
        $data = Hasil_penelitian::create($req->all());
        if ($req->file != null) {
            $img = $req->file('file');
            $FotoExt = $img->getClientOriginalExtension();
            $FotoName = $data->id;
            $file = $FotoName . '.' . $FotoExt;
            $img->move('lampiran/hasilPenelitian', $file);
            $data->file = $file;
        }
        $data->update();

        return back()->withSuccess('Data berhasil disimpan');

    }

    public function penelitiEdit($uuid)
    {
        $data = Hasil_penelitian::where('uuid', $uuid)->first();
        return view('peneliti.hasilPenelitian.edit', compact('data'));
    }

    public function penelitiUpdate(Request $req, $uuid)
    {
        $data = Hasil_penelitian::where('uuid', $uuid)->first();
        $data->fill($req->all())->save();
        if ($req->file != null) {
            $img = $req->file('file');
            $FotoExt = $img->getClientOriginalExtension();
            $FotoName = $data->id;
            $file = $FotoName . '.' . $FotoExt;
            $img->move('lampiran/hasilPenelitian', $file);
            $data->file = $file;
        } else {
            $data->file = $data->file;
        }
        $data->update();

        return redirect()->route('penelitiLaporanPenelitian')->withSuccess('Data berhasil diubah');
    }

    public function pembimbingIndex()
    {
        $data = Penelitian::all();
        return view('pembimbing.hasilPenelitian.index', compact('data'));
    }

    public function pembimbingDetail($uuid)
    {
        $data = Penelitian::where('uuid', $uuid)->first();
        return view('pembimbing.hasilPenelitian.show', compact('data'));
    }
}
