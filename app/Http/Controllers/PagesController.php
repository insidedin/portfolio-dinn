<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function mobile()
    {
        return view('pages.mobile');
    }
    
    public function website()
    {
        return view('pages.web');
    }

    public function uiux()
    {
        return view('pages.uiux');
    }

    public function desain()
    {
        return view('pages.desain');
    }
}