<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Ras_hewanController extends Controller
{
     public function DataRasHewan()
    {
        $rasHewans = Ras_hewan::with('jenisHewan')->get();
        return view('Roles/Admin/View/Ras_hewan', compact('rasHewans'));
    }
}
