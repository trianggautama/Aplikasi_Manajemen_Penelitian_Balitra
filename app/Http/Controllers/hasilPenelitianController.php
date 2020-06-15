<?php

namespace App\Http\Controllers;

use App\Penelitian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class hasilPenelitianController extends Controller
{
    public function index(){

        $peneliti_id = Auth::user()->peneliti->id;
        $data = Penelitian::where('peneliti_id', $peneliti_id)->first();
        
        return view('peneliti.hasilPenelitian.index',compact('data'));
    }

    public function pembimbingIndex(){
        $data = Penelitian::all();
        return view('pembimbing.hasilPenelitian.index',compact('data'));
    }

    public function pembimbingDetail($uuid){
        $data = Penelitian::where('uuid', $uuid)->first();
        return view('pembimbing.hasilPenelitian.show',compact('data'));
    }
}
