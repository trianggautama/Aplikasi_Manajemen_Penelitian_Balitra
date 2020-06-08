<?php

namespace App\Http\Controllers;

use App\Peneliti;
use App\Permohonan;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class penelitiController extends Controller
{
    public function index()
    {
        $data = Peneliti::orderBy('id', 'desc')->get();
        $permohonan = Permohonan::where('status', 2)->orderBy('id', 'desc')->get();
        return view('admin.peneliti.index', compact('data', 'permohonan'));
    }

    public function store(Request $request)
    {
        $permohonan = Permohonan::findOrFail($request->permohonan_id);

        $user = new User;
        $user->nama = $permohonan->nama;
        $user->username = $request->username;
        $user->password = Hash::make($request->password);
        $user->role = 4;
        $user->save();
        if ($request->foto != null) {
            $img = $request->file('foto');
            $FotoExt = $img->getClientOriginalExtension();
            $FotoName = $user->id;
            $foto = $FotoName . '.' . $FotoExt;
            $img->move('images/user', $foto);
            $user->foto = $foto;
        } else {
            $user->foto = 'default.png';
        }
        $user->update();

        $data = new Peneliti;
        $data->user_id = $user->id;
        $data->NIK = $permohonan->NIK;
        $data->alamat = $permohonan->alamat;
        $data->no_hp = $permohonan->no_hp;
        $data->tempat_lahir = $permohonan->tempat_lahir;
        $data->tanggal_lahir = $permohonan->tanggal_lahir;
        $data->pendidikan_terakhir = $permohonan->pendidikan_terakhir;

        $data->save();

        return redirect()->back()->with('success', 'Data berhasil disimpan');
    }

    public function detail()
    {
        return view('admin.peneliti.detail');
    }

    public function show($uuid)
    {
        $data = Peneliti::where('uuid', $uuid)->first();
        return view('admin.peneliti.detail', compact('data'));
    }

    public function edit($uuid)
    {
        $data = Peneliti::where('uuid', $uuid)->first();
        return view('admin.peneliti.edit', compact('data'));
    }

    public function update(Request $request, $uuid)
    {
        $data = Peneliti::where('uuid', $uuid)->first();
        $data->NIK = $request->NIK;
        $data->alamat = $request->alamat;
        $data->no_hp = $request->no_hp;
        $data->tempat_lahir = $request->tempat_lahir;
        $data->tanggal_lahir = $request->tanggal_lahir;
        $data->pendidikan_terakhir = $request->pendidikan_terakhir;

        $data->update();

        if ($request->username != null || $request->password != null) {
            $user = User::findOrFail($data->user_id);
            if (isset($request->username)) {
                $user->username = $request->username;
            }

            if (isset($request->password)) {
                $user->password = Hash::make($request->password);
            }

            $user->update();
        }

        return redirect()->route('penelitiIndex')->with('success', 'Data berhasil diubah');
    }

    public function destroy($uuid)
    {
        $data = Peneliti::where('uuid', $uuid)->first();
        $user = User::findOrFail($data->user_id)->delete();

        return redirect()->back()->with('success', 'Data berhasil dihapus');
    }

    public function pembimbingPenelitiIndex()
    {
        $data = Peneliti::orderBy('id', 'desc')->get();
        return view('pembimbing.peneliti.index', compact('data'));
    }
}
