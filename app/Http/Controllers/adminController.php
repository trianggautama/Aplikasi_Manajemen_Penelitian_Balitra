<?php

namespace App\Http\Controllers;

class adminController extends Controller
{
    public function permohonanInput()
    {
        return view('permohonanInput');
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
}
