<?php

namespace App\Http\Controllers;

use App\Objek_penelitian;
use App\Fasilitas;
use App\Permohonan;
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
}
