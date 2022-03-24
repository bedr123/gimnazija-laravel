<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function oSkoli()
    {
        return view('skola');
    }

    public function historija()
    {
        return view('historija');
    }

    public function kodeks()
    {
        return view('kodeks');
    }

    public function osoblje()
    {
        return view('osoblje');
    }
    
    public function kontakt()
    {
        return view('kontakt');
    }
}
