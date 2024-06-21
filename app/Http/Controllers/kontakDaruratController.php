<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class kontakDaruratController extends Controller
{
    public function index()
    {
        return view('admin.kontakDarurat.dataKontakDarurat');
    }
}
