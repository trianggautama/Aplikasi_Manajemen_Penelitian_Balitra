<?php

namespace App\Http\Controllers;
use App\User;
use Hash; 
use Illuminate\Http\Request;

class pembimbingController extends Controller
{
    public function index()
    {
        $data = User::OrderBy('id', 'Desc')->get();

        return view('admin.pembimbing.index', compact('data'));
    }
}
