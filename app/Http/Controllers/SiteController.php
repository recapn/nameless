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
    public function protetorados()
    {
        return view('contents.protetorados');
    }
    public function grupos()
    {
        return view('contents.grupos');
    }
    public function historia()
    {
        return view('contents.historia');
    }
}
