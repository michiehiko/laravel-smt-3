<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ras_hewan;
use App\Models\Jenis_hewan;

class Ras_hewanController extends Controller
{
     public function DataRasHewan()
    {
        $rasHewans = Ras_hewan::with('jenisHewan')->get();
        return view('Roles.Admin.View.Ras_hewan', compact('rasHewans'));
    }

    public function create()
    {
        $jenisHewans = Jenis_hewan::all();
        return view('Roles.Admin.Feature.Tambah_ras', compact('jenisHewans'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_ras' => 'required|string|max:100',
            'idjenis_hewan' => 'required|exists:jenis_hewan,idjenis_hewan',
        ]);

        try {
            Ras_hewan::create([
                'nama_ras' => $request->nama_ras,
                'idjenis_hewan' => $request->idjenis_hewan,
            ]);

            return redirect()->route('ras_hewan')
                ->with('success', 'Ras hewan berhasil ditambahkan');
        } catch (\Exception $e) {
            return back()->with('error', 'Gagal menambahkan ras hewan');
        }
    }

    public function edit($id)
    {
        $rasHewan = Ras_hewan::findOrFail($id);
        $jenisHewans = Jenis_hewan::all();
        return view('Roles.Admin.Feature.Edit_ras', compact('rasHewan', 'jenisHewans'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_ras' => 'required|string|max:100',
            'idjenis_hewan' => 'required|exists:jenis_hewan,idjenis_hewan',
        ]);

        try {
            $rasHewan = Ras_hewan::findOrFail($id);
            $rasHewan->update([
                'nama_ras' => $request->nama_ras,
                'idjenis_hewan' => $request->idjenis_hewan,
            ]);

            return redirect()->route('ras_hewan')
                ->with('success', 'Ras hewan berhasil diupdate');
        } catch (\Exception $e) {
            return back()->with('error', 'Gagal mengupdate ras hewan');
        }
    }

    public function destroy($id)
    {
        try {
            $rasHewan = Ras_hewan::findOrFail($id);
            $rasHewan->delete();

            return redirect()->route('ras_hewan')
                ->with('success', 'Ras hewan berhasil dihapus');
        } catch (\Exception $e) {
            return back()->with('error', 'Gagal menghapus ras hewan');
        }
    }
}
