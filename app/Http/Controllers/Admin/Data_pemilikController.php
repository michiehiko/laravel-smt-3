<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pemilik; 

class Data_pemilikController extends Controller
{
     public function DataPemilik() {
        $datapemilik = Pemilik::with('user')->get();
        return view('Roles/Admin/View/Data_pemilik', compact('datapemilik'));
    }
}
