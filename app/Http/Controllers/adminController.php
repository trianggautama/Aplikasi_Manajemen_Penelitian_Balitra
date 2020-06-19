<?php

namespace App\Http\Controllers;

use App\Fasilitas;
use App\Hasil_penelitian;
use App\Objek_penelitian;
use App\Penelitian;
use App\Permohonan;
use App\User;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class adminController extends Controller
{
    public function depan()
    {
        $objekPenelitian = Objek_penelitian::all();
        return view('welcome', compact('objekPenelitian'));
    }

    public function pembimbingProfil()
    {
        return view('pembimbing.profil');
    }

    public function permohonanInput()
    {
        $objekPenelitian = Objek_penelitian::all();
        return view('permohonanInput', compact('objekPenelitian'));
    }

    public function permohonanStore(Request $request)
    {
        $user = new User;
        $user->nama = $request->nama;
        $user->username = $request->NIK;
        $user->password = Hash::make($request->NIK);
        $user->role = 4;
        $user->status = 0;
        $user->save();

        $data = new Permohonan;
        $data->user_id = $user->id;
        $data->objek_penelitian_id = $request->objek_penelitian_id;
        $data->email = $request->email;
        $data->NIK = $request->NIK;
        $data->alamat = $request->alamat;
        $data->no_hp = $request->no_hp;
        $data->tempat_lahir = $request->tempat_lahir;
        $data->tanggal_lahir = $request->tanggal_lahir;
        $data->pendidikan_terakhir = $request->pendidikan_terakhir;
        $data->keperluan = $request->keperluan;

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

            $permohonan = Permohonan::where('status','!=', 2)->get();
            $penelitian  = Penelitian::all();
            $pembimbing  = User::where('role',2)->get();
            $objek       = Objek_penelitian::all();
            $fasilitas   = Fasilitas::all();
            $laporanPenelitian = Hasil_penelitian::all();
            return view('admin.index',compact('permohonan','penelitian','pembimbing','objek','fasilitas','laporanPenelitian'));

        } elseif (Auth::user()->role == 2) {
            return view('pembimbing.index');

        } elseif (Auth::user()->role == 3) {
            return view('pejabat.index');
        } else {
            return view('peneliti.index');
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
