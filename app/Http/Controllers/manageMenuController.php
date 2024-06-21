<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class manageMenuController extends Controller
{
    public function index()
    {
        return view('admin.manageMenu.dataManageMenu');
    }
}
