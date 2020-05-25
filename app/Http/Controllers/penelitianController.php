<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class penelitianController extends Controller
{
    public function index()
    {
        return view('admin.penelitian.index');
    }

    public function detail()
    {
        return view('admin.penelitian.detail');
    }

    public function edit()
    {
        return view('admin.penelitian.edit');
    }
}
