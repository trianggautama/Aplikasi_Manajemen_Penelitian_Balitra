<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class fasilitasController extends Controller
{
    public function index()
    {
        return view('admin.fasilitas.index');
    }

    public function edit()
    {
        return view('admin.fasilitas.edit');
    }
}
