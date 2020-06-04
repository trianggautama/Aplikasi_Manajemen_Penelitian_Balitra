<?php

namespace App\Http\Controllers;

use App\Objek_penelitian;
use App\Peneliti;
use App\Penelitian;
use App\Permohonan;
use App\User;
use Illuminate\Http\Request;

class penelitianController extends Controller
{
    public function index()
    {
        $data = Penelitian::orderBy('id', 'desc')->get();
        $peneliti = Peneliti::orderBy('id', 'desc')->get();
        $pembimbing = User::where('role', 2)->orderBy('id', 'desc')->get();
        $permohonan = Permohonan::where('status', 2)->orderBy('id', 'desc')->get();
        return view('admin.penelitian.index', compact('data', 'peneliti', 'pembimbing', 'permohonan'));
    }

    public function store(Request $request)
    {
        $data = new Penelitian;
        $data->peneliti_id = $request->peneliti_id;
        $data->user_id = $request->user_id;
        $data->objek_penelitian_id = $request->objek_penelitian_id;
        $data->uraian = $request->uraian;
        $data->estimasi = $request->estimasi;

        $data->save();

        return redirect()->back()->with('success', 'Data berhasil disimpan');
    }

    public function show($uuid)
    {
        $data = Penelitian::where('uuid', $uuid)->first();
        return view('admin.penelitian.detail', compact('data'));
    }

    public function edit($uuid)
    {
        $data = Penelitian::where('uuid', $uuid)->first();
        // $peneliti = Peneliti::orderBy('id', 'desc')->get();
        $pembimbing = User::where('role', 2)->orderBy('id', 'desc')->get();
        $objek = Objek_penelitian::orderBy('id', 'desc')->get();

        return view('admin.penelitian.edit', compact('data', 'pembimbing', 'objek'));
    }

    public function update(Request $request, $uuid)
    {
        $data = Penelitian::where('uuid', $uuid)->first();
        // $data->peneliti_id = $request->peneliti_id;
        $data->user_id = $request->user_id;
        $data->objek_penelitian_id = $request->objek_penelitian_id;
        $data->uraian = $request->uraian;
        $data->estimasi = $request->estimasi;

        $data->update();

        return redirect()->route('penelitianIndex')->with('success', 'Data berhasil diubah');
    }

    public function destroy($uuid)
    {
        $data = Penelitian::where('uuid', $uuid)->first()->delete();

        return redirect()->back()->with('success', 'Data berhasil dihapus');
    }

    public function pembimbingPenelitianIndex()
    {
        $data = Penelitian::orderBy('id', 'desc')->get();
        return view('pembimbing.penelitian.index', compact('data'));
    }

    public function jobdesk($uuid)
    {
        $data = Penelitian::where('uuid', $uuid)->first();
        return view('pembimbing.penelitian.jobdesk', compact('data'));
    }
}
