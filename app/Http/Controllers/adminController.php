<?php

namespace App\Http\Controllers;
use App\Objek_penelitian;
class adminController extends Controller
{   
    public function depan()
    {   
        $objekPenelitian = Objek_penelitian::all();
        return view('welcome',compact('objekPenelitian'));
    }

    public function permohonanInput()
    {   
        $objekPenelitian = Objek_penelitian::all();
        return view('permohonanInput',compact('objekPenelitian'));
    }

    public function index()
    {
        return view('admin.index');
    }

    public function pembimbingIndex()
    {
        return view('admin.pembimbing.index');
    }

    public function pejabatIndex()
    {
        return view('admin.pejabat.index');
    }

    public function permohonanIndex()
    {
        return view('admin.permohonan.index');
    }

}
