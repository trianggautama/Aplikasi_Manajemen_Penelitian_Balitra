<?php

namespace App\Http\Controllers;

use App\Data_personal;
use App\User;
use Hash;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('admin.user.index');
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
            $FotoName = $request->nama;
            $foto = $FotoName . '.' . $FotoExt;
            $img->move('images/user', $foto);
            $user->foto = $foto;
        } else {
            $user->foto = 'default.png';
        }
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

        return redirect()->route('userIndex')->with('success', 'Berhasil menyimpan data');
    }
}
