<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class fasilitasDaerah extends Controller
{
    public function index()
    {
        return view('admin.fasilitasDaerah.dataFasilitasDaerah');
    }
}
