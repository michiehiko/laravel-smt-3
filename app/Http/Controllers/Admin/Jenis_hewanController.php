<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Jenis_hewanController extends Controller
{
     public function DataJenisHewan()
    {
        $jenishewan = jenis_hewan::all();
        return view('Roles/Admin/View/Jenis_hewan', compact('jenishewan'));
    }
}
