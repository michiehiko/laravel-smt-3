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
        return view('Roles.Admin.View.Data_kategori', compact('kategoris'));
    }

    public function create()
    {
         $kategoris = Kategori::all();
        return view('Roles.Admin.Feature.Tambah_kategori', compact('kategoris'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_kategori' => 'required|string|max:100',
        ]);

        try {
            Kategori::create([
                'nama_kategori' => $request->nama_kategori,
            ]);

            return redirect()->route('data_kategori')
                ->with('success', 'Kategori berhasil ditambahkan');
        } catch (\Exception $e) {
            return back()->with('error', 'Gagal menambahkan kategori');
        }
    }

    public function edit($id)
    {
        $kategori = Kategori::findOrFail($id);
        return view('Roles.Admin.Feature.Edit_kategori', compact('kategori'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_kategori' => 'required|string|max:100',
        ]);

        try {
            $kategori = Kategori::findOrFail($id);
            $kategori->update([
                'nama_kategori' => $request->nama_kategori,
            ]);

            return redirect()->route('data_kategori')
                ->with('success', 'Kategori berhasil diupdate');
        } catch (\Exception $e) {
            return back()->with('error', 'Gagal mengupdate kategori');
        }
    }

    public function destroy($id)
    {
        try {
            $kategori = Kategori::findOrFail($id);
            $kategori->delete();

            return redirect()->route('data_kategori')
                ->with('success', 'Kategori berhasil dihapus');
        } catch (\Exception $e) {
            return back()->with('error', 'Gagal menghapus kategori');
        }
    }
}



