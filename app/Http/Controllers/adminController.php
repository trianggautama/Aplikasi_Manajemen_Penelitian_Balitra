<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{
    public function userIndex()
    {
        return view('admin.user.index');
    }
}
