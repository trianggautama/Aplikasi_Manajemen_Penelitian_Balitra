<?php

namespace App\Http\Controllers;

use App\Permohonan;
use Illuminate\Http\Request;

class permohonanController extends Controller
{
    public function index()
    {
        $data = Permohonan::whereIn('status', [1, 3])->orderBy('status', 'asc')->get();
        return view('admin.permohonan.index', compact('data'));
    }

    public function show($uuid)
    {
        $data = Permohonan::where('uuid', $uuid)->first();
        return view('admin.permohonan.detail', compact('data'));
    }

    public function lampiranPreview($uuid)
    {
        $data = Permohonan::where('uuid', $uuid)->first();
        $pathToFile = base_path() . '/public/lampiran/permohonan/' . $data->lampiran;

        return response()->file($pathToFile);
    }

    public function verifikasiPermohonan(Request $request)
    {
        $data = Permohonan::where('uuid', $request->uuid)->first();
        $data->status = $request->status;
        if ($request->status == 2) {
            $data->tanggal_pemanggilan = $request->tanggal_pemanggilan;
        }
        $data->update();

        return redirect()->back()->with('success', 'Data berhasil diverifikasi');
    }
}
