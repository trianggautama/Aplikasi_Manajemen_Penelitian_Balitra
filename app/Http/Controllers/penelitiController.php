<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class penelitiController extends Controller
{
    public function index()
    {
        return view('admin.peneliti.index');
    }

    public function detail()
    {
        return view('admin.peneliti.detail');
    }
}
