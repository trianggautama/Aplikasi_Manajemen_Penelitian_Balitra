<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class peminjamanController extends Controller
{
    public function index(){

        return view('admin.peminjaman.index');
    }
    public function edit(){

        return view('admin.peminjaman.edit');
    }
}
