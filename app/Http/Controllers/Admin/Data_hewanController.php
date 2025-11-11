<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Data_hewanController extends Controller
{
    public function DataHewan()
    {
        $pets = Pet::with([
            'pemilik.user',
            'rasHewan.jenisHewan'
        ])->get();

        return view('Roles/Admin/View/Data_hewan', compact('pets'));
    }
}
