<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class objekPenelitianController extends Controller
{
    public function index()
    {
        return view('admin.objekPenelitian.index');
    }

    public function edit()
    {
        return view('admin.objekPenelitian.edit');
    }
}
