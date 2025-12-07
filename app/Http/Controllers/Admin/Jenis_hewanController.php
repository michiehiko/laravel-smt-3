<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Jenis_hewan;


class Jenis_hewanController extends Controller
{
     public function DataJenisHewan()
    {
        $jenishewan = jenis_hewan::all();
        return view('Roles.Admin.View.Jenis_hewan', compact('jenishewan'));
    }

    public function create()
    {
        $jenishewan = jenis_hewan::all();
        return view('Roles.Admin.Feature.Tambah_jenis', compact('jenishewan'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_jenis_hewan' => 'required|string|max:100',
        ]);

        try {
            Jenis_hewan::create([
                'nama_jenis_hewan' => $request->nama_jenis_hewan,
            ]);

            return redirect()->route('jenis_hewan')
                ->with('success', 'Jenis hewan berhasil ditambahkan');
        } catch (\Exception $e) {
            return back()->with('error', 'Gagal menambahkan jenis hewan');
        }
    }

    public function edit($id)
    {
        $jenisHewan = Jenis_hewan::findOrFail($id);
        return view('Roles.Admin.Feature.Edit_jenis', compact('jenisHewan'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_jenis_hewan' => 'required|string|max:100',
        ]);

        try {
            $jenisHewan = Jenis_hewan::findOrFail($id);
            $jenisHewan->update([
                'nama_jenis_hewan' => $request->nama_jenis_hewan,
            ]);

            return redirect()->route('jenis_hewan')
                ->with('success', 'Jenis hewan berhasil diupdate');
        } catch (\Exception $e) {
            return back()->with('error', 'Gagal mengupdate jenis hewan');
        }
    }

    public function destroy($id)
    {
        try {
            $jenisHewan = Jenis_hewan::findOrFail($id);
            $jenisHewan->delete();

            return redirect()->route('jenis_hewan')
                ->with('success', 'Jenis hewan berhasil dihapus');
        } catch (\Exception $e) {
            return back()->with('error', 'Gagal menghapus jenis hewan');
        }
    }
}
