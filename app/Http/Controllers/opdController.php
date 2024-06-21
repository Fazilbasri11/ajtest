<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class opdController extends Controller
{
    public function index()
    {
        return view('admin.OPD.dataOPD');
    }
}
