<?php

namespace App\Http\Controllers;
use App\Objek_penelitian;
use Auth;

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
        if(Auth::user()->role == 1)
        {
            return view('admin.index');

        }elseif(Auth::user()->role == 2)
        {
            return view('pembimbing.index');

        }elseif(Auth::user()->role == 3)
        {
            return view('pejabat.index');
        }else
        {
            return view('pejabat.index');
        }
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
