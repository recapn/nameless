<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function home()
    {
        return view('contents.home');
    }
    public function mapas()
    {
        return view('contents.mapas');
    }
}
