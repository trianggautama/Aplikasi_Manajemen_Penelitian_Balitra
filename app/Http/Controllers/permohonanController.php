<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class permohonanController extends Controller
{
    public function index()
    {
        return view('admin.permohonan.index');
    }

    public function detail()
    {
        return view('admin.permohonan.detail');
    }
}
