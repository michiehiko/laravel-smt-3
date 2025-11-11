<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Kode_tindakanController extends Controller
{
    public function DataKodeTindakanTerapi()
    {
        $kode_tindakan_terapis = Kode_tindakan::with(relations: 'kategoriklinis')->get();
        return view('Roles/Admin/View/Data_kode_tindakan', compact('kode_tindakan_terapis'));
    }
}
