<?php

namespace App\Http\Controllers;

use App\Objek_penelitian;
use App\Fasilitas;
use App\Peneliti;
use App\Permohonan;
use App\Penelitian;
use App\User;
use PDF;
use Carbon\Carbon;
use Illuminate\Http\Request;

class reportController extends Controller
{
    public function objekPenelitianCetak()
    {
        $data         = Objek_penelitian::all();
        $tgl= Carbon::now()->format('d-m-Y');
        $pdf          = PDF::loadView('formCetak.dataObjekPenelitian', ['data'=>$data,'tgl'=>$tgl]);
        $pdf->setPaper('a4', 'portrait');

        return $pdf->stream('Laporan Data Penelitian.pdf');
    }

    public function fasilitasCetak()
    {
        $data         = Fasilitas::all();
        $tgl= Carbon::now()->format('d-m-Y');
        $pdf          = PDF::loadView('formCetak.dataFasilitas', ['data'=>$data,'tgl'=>$tgl]);
        $pdf->setPaper('a4', 'portrait');

        return $pdf->stream('Laporan Data Penelitian.pdf');
    }

    public function permohonanCetak()
    {
        $data = Permohonan::whereIn('status', [1, 3])->orderBy('status', 'asc')->get();
        $tgl= Carbon::now()->format('d-m-Y');
        $pdf          = PDF::loadView('formCetak.dataPermohonan', ['data'=>$data,'tgl'=>$tgl]);
        $pdf->setPaper('a4', 'portrait');

        return $pdf->stream('Laporan Data Penelitian.pdf');
    }

    public function permohonanfilter(Request $request)
    {
        $data = Permohonan::where('status',$request->status)->orderBy('id', 'asc')->get();
        $tgl= Carbon::now()->format('d-m-Y');
        $pdf          = PDF::loadView('formCetak.dataPermohonanFilter', ['data'=>$data,'tgl'=>$tgl]);
        $pdf->setPaper('a4', 'portrait');
        return $pdf->stream('Laporan Data Penelitian.pdf');
    }

    public function pembimbingCetakBiodata($uuid)
    {
        $data         = User::OrderBy('id', 'Desc')->where('uuid', $uuid)->first();
        $tgl          = Carbon::now()->format('d-m-Y');
        $pdf          = PDF::loadView('formCetak.bioadataPembimbing', ['data'=>$data,'tgl'=>$tgl]);
        $pdf->setPaper('a4', 'portrait');
        return $pdf->stream('Laporan Data Penelitian.pdf');
    }

    public function penelitianCetak()
    {
        $data = Penelitian::all();
        $tgl= Carbon::now()->format('d-m-Y');
        $pdf          = PDF::loadView('formCetak.dataPenelitian', ['data'=>$data,'tgl'=>$tgl]);
        $pdf->setPaper('a4', 'portrait');

        return $pdf->stream('Laporan Data Penelitian.pdf');
    }


    public function skPenelitian($uuid)
    {
        $data = Penelitian::where('uuid',$uuid)->first();
        $tgl= Carbon::now()->format('d-m-Y');
        $pdf          = PDF::loadView('formCetak.skPenelitian', ['data'=>$data,'tgl'=>$tgl]);
        $pdf->setPaper('a4', 'portrait');

        return $pdf->stream('Laporan Data Penelitian.pdf');
    }

    public function penelitiCetak()
    {
        $data = Peneliti::all();
        $tgl= Carbon::now()->format('d-m-Y');
        $pdf          = PDF::loadView('formCetak.dataPeneliti', ['data'=>$data,'tgl'=>$tgl]);
        $pdf->setPaper('a4', 'portrait');

        return $pdf->stream('Laporan Data Penelitian.pdf');
    }
}