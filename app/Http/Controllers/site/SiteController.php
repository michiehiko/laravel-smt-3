<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function home()
    {
        return view('site.home');
    }

    public function about()
    {
        return view('site.about');
    }

    public function layanan()
    {
        return view('site.layanan');
    }

    public function struktur()
    {
        return view('site.struktur');
    }

    public function visimisi(){
        return view('site.visimisi');
    }
}
