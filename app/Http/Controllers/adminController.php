<?php

namespace App\Http\Controllers;

use App\Objek_penelitian;
use App\Permohonan;
use Auth;
use Illuminate\Http\Request;

class adminController extends Controller
{
    public function depan()
    {
        $objekPenelitian = Objek_penelitian::all();
        return view('welcome', compact('objekPenelitian'));
    }

    public function permohonanInput()
    {
        $objekPenelitian = Objek_penelitian::all();
        return view('permohonanInput', compact('objekPenelitian'));
    }

    public function permohonanStore(Request $request)
    {
        $data = new Permohonan;
        $data->objek_penelitian_id = $request->objek_penelitian_id;
        $data->nama = $request->nama;
        $data->NIK = $request->NIK;
        $data->alamat = $request->alamat;
        $data->no_hp = $request->no_hp;
        $data->tempat_lahir = $request->tempat_lahir;
        $data->tanggal_lahir = $request->tanggal_lahir;
        $data->pendidikan_terakhir = $request->pendidikan_terakhir;
        $data->keperluan = $request->keperluan;
        $data->tanggal_pemanggilan = $request->tanggal_pemanggilan;

        $data->save();

        if ($request->lampiran != null) {
            $img = $request->file('lampiran');
            $lampiranExt = $img->getClientOriginalExtension();
            $lampiranName = 'PR' . $data->id;
            $lampiran = $lampiranName . '.' . $lampiranExt;
            $img->move('lampiran/permohonan', $lampiran);
            $data->lampiran = $lampiran;
        }

        $data->update();

        return redirect()->route('depan')->with('success', 'Berhasil mengajukan permohonan');
    }

    public function index()
    {
        if (Auth::user()->role == 1) {
            return view('admin.index');

        } elseif (Auth::user()->role == 2) {
            return view('pembimbing.index');

        } elseif (Auth::user()->role == 3) {
            return view('pejabat.index');
        } else {
            return view('pejabat.index');
        }
    }

    public function pembimbingIndex()
    {
        return view('admin.pembimbing.index');
    }

    public function pejabatIndex()
    {
        return view('admin.pejabat.index');
    }

}
