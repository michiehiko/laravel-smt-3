<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kategori;

class Data_kategoriController extends Controller
{
        public function DataKategori()
    {
        $kategoris = Kategori::all();
        return view('Roles/Admin/View/Data_kategori', compact('kategoris'));
    }

}
