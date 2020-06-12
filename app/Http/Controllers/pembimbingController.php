<?php

namespace App\Http\Controllers;

use App\Data_personal;
use App\Penelitian;
use App\User;
use Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class pembimbingController extends Controller
{
    public function index()
    {
        $data = User::OrderBy('id', 'Desc')->where('role', 2)->get();

        return view('admin.pembimbing.index', compact('data'));
    }

    public function profil()
    {
        $data = User::findOrFail(Auth::id());
        return view('pembimbing.profil', compact('data'));
    }

    public function profileUpdate(Request $request)
    {
        $data = User::findOrFail(Auth::id());
        $data->fill($request->all())->save();
        if (isset($request->password)) {
            $data->password = Hash::make($request->password);
        }
        if ($request->foto != null) {
            $img = $request->file('foto');
            $FotoExt = $img->getClientOriginalExtension();
            $FotoName = $data->id;
            $foto = $FotoName . '.' . $FotoExt;
            $img->move('images/pembimbing', $foto);
            $data->foto = $foto;
        } else {
            $data->foto = $data->foto;
        }
        $data->update();
        $data_personal = Data_personal::findOrFail($data->data_personal->id);
        $data_personal->fill($request->all())->save();

        return redirect()->back()->withSuccess('Profile berhasil diubah');
    }

    public function store(Request $request)
    {
        $user = new User;
        $user->nama = $request->nama;
        $user->username = $request->username;
        $user->password = Hash::make($request->password);
        if ($request->foto != null) {
            $img = $request->file('foto');
            $FotoExt = $img->getClientOriginalExtension();
            $FotoName = $data->id;
            $foto = $FotoName . '.' . $FotoExt;
            $img->move('images/pembimbing', $foto);
            $user->foto = $foto;
        } else {
            $user->foto = 'default.png';
        }
        $user->role = 2;
        $user->save();

        $personal = new Data_personal;
        $personal->user_id = $user->id;
        $personal->NIP = $request->NIP;
        $personal->jabatan = $request->jabatan;
        $personal->no_hp = $request->no_hp;
        $personal->tempat_lahir = $request->tempat_lahir;
        $personal->tanggal_lahir = $request->tanggal_lahir;
        $personal->alamat = $request->alamat;
        $personal->save();

        return redirect()->route('pembimbingIndex')->with('success', 'Berhasil menyimpan data');
    }

    public function edit($uuid)
    {
        $data = User::where('uuid', $uuid)->first();
        return view('admin.pembimbing.edit', compact('data'));
    }

    public function update(Request $request, $uuid)
    {
        $user = user::where('uuid', $uuid)->first();

        $user->nama = $request->nama;
        $user->username = $request->username;
        if (isset($request->password)) {
            $user->password = Hash::make($request->password);
        } else {
            $user->password = $user->password;
        }
        if ($request->foto != null) {
            $img = $request->file('foto');
            $FotoExt = $img->getClientOriginalExtension();
            $FotoName = $user->id;
            $foto = $FotoName . '.' . $FotoExt;
            $img->move('images/pembimbing', $foto);
            $user->foto = $foto;
        } else {
            $user->foto = $user->foto;
        }

        $user->update();

        $personal = Data_personal::where('user_id', $user->id)->first();

        $personal->user_id = $user->id;
        $personal->NIP = $request->NIP;
        $personal->jabatan = $request->jabatan;
        $personal->no_hp = $request->no_hp;
        $personal->tempat_lahir = $request->tempat_lahir;
        $personal->tanggal_lahir = $request->tanggal_lahir;
        $personal->alamat = $request->alamat;

        $personal->update();

        return redirect()->route('pembimbingIndex')->with('success', 'Berhasil mengubah data');

    }

    public function destroy($uuid)
    {
        $user = User::where('uuid', $uuid)->first()->delete();

        return redirect()->route('pembimbingIndex')->with('success', 'Berhasil menghapus data');

    }

    public function penelitiPembimbingIndex()
    {
        $peneliti_id = Auth::user()->peneliti->id;
        $penelitian = Penelitian::findOrFail($peneliti_id);
        $data = User::where('id', $penelitian->user_id)->OrderBy('id', 'Desc')->where('role', 2)->get();
        return view('peneliti.pembimbing.index', compact('data'));
    }
}
