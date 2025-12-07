<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kategori_klinis;

class Kategori_klinisController extends Controller
{
    public function DataKategoriKlinis()
    {
        $kategori_klinis = Kategori_klinis::all();
        return view('Roles.Admin.View.Data_kategori_klinis', compact('kategori_klinis'));
    }

    public function create()
    {
        return view('Roles.Admin.Feature.Tambah_kategori_klinis');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_kategori_klinis' => 'required|string|max:50',
        ]);

        try {
            Kategori_klinis::create([
                'nama_kategori_klinis' => $request->nama_kategori_klinis,
            ]);

            return redirect()->route('data_kategori_klinis')
                ->with('success', 'Kategori klinis berhasil ditambahkan');
        } catch (\Exception $e) {
            return back()->with('error', 'Gagal menambahkan kategori klinis');
        }
    }

    public function edit($id)
    {
        $kategoriKlinis = Kategori_klinis::findOrFail($id);
        return view('Roles.Admin.Feature.Edit_kategori_klinis', compact('kategoriKlinis'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_kategori_klinis' => 'required|string|max:50',
        ]);

        try {
            $kategoriKlinis = Kategori_klinis::findOrFail($id);
            $kategoriKlinis->update([
                'nama_kategori_klinis' => $request->nama_kategori_klinis,
            ]);

            return redirect()->route('data_kategori_klinis')
                ->with('success', 'Kategori klinis berhasil diupdate');
        } catch (\Exception $e) {
            return back()->with('error', 'Gagal mengupdate kategori klinis');
        }
    }

    public function destroy($id)
    {
        try {
            $kategoriKlinis = Kategori_klinis::findOrFail($id);
            $kategoriKlinis->delete();

            return redirect()->route('data_kategori_klinis')
                ->with('success', 'Kategori klinis berhasil dihapus');
        } catch (\Exception $e) {
            return back()->with('error', 'Gagal menghapus kategori klinis');
        }
    }
}
