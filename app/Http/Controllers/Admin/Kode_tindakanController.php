<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kode_tindakan;
use App\Models\Kategori;
use App\Models\Kategori_klinis;

class Kode_tindakanController extends Controller
{
    public function DataKodeTindakanTerapi()
    {
        $kode_tindakan = Kode_tindakan::with(relations: 'kategoriklinis')->get();
        return view('Roles.Admin.View.Data_kode_tindakan', compact('kode_tindakan'));
    }

    public function create()
    {
        $kategoris = Kategori::all();
        $kategoriKlinis = Kategori_klinis::all();
        $kode_tindakan = Kode_tindakan::with(relations: 'kategoriklinis')->get();
        return view('Roles.Admin.Feature.Tambah_kode_tindakan', compact('kategoris', 'kategoriKlinis', 'kode_tindakan'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode' => 'required|string|max:5|unique:kode_tindakan_terapi,kode',
            'deskripsi_tindakan_terapi' => 'required|string|max:1000',
            'idkategori' => 'required|exists:kategori,idkategori',
            'idkategori_klinis' => 'required|exists:kategori_klinis,idkategori_klinis',
        ]);

        try {
            Kode_tindakan::create([
                'kode' => $request->kode,
                'deskripsi_tindakan_terapi' => $request->deskripsi_tindakan_terapi,
                'idkategori' => $request->idkategori,
                'idkategori_klinis' => $request->idkategori_klinis,
            ]);

            return redirect()->route('data_kode_tindakan')
                ->with('success', 'Kode tindakan berhasil ditambahkan');
        } catch (\Exception $e) {
            return back()->with('error', 'Gagal menambahkan kode tindakan');
        }
    }

    public function edit($id)
    {
        $kodeTindakan = Kode_tindakan::findOrFail($id);
        $kategoris = Kategori::all();
        $kategoriKlinis = Kategori_klinis::all();
        return view('Roles.Admin.Feature.Edit_kode_tindakan', compact('kodeTindakan', 'kategoris', 'kategoriKlinis'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'kode' => 'required|string|max:5|unique:kode_tindakan_terapi,kode,' . $id . ',idkode_tindakan_terapi',
            'deskripsi_tindakan_terapi' => 'required|string|max:1000',
            'idkategori' => 'required|exists:kategori,idkategori',
            'idkategori_klinis' => 'required|exists:kategori_klinis,idkategori_klinis',
        ]);

        try {
            $kodeTindakan = Kode_tindakan::findOrFail($id);
            $kodeTindakan->update([
                'kode' => $request->kode,
                'deskripsi_tindakan_terapi' => $request->deskripsi_tindakan_terapi,
                'idkategori' => $request->idkategori,
                'idkategori_klinis' => $request->idkategori_klinis,
            ]);

            return redirect()->route('data_kode_tindakan')
                ->with('success', 'Kode tindakan berhasil diupdate');
        } catch (\Exception $e) {
            return back()->with('error', 'Gagal mengupdate kode tindakan');
        }
    }

    public function destroy($id)
    {
        $item = Kode_tindakan::findOrFail($id);
        $item->delete();

        return redirect()->route('data_kode_tindakan')->with('success', 'Data kode tindakan terapi berhasil dihapus');
    }
}
