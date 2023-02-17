<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticController extends Controller
{
    public function inicio()
    {
        return view('inicio');
    }
    public function dondeEstamos()
    {
        return view('dondeEstamos');
    }
    public function cookies()
    {
        return view('cookies');
    }
}
