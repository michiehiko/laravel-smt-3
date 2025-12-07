<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pet; 
use App\Models\Ras_hewan;
use App\Models\Pemilik;
use App\Models\Jenis_hewan;

class Data_hewanController extends Controller
{
    public function DataHewan()
    {
        $pets = Pet::with([
            'pemilik.user',
            'rasHewan.jenisHewan'
        ])->get();

        return view('Roles.Admin.View.Data_hewan', compact('pets'));
    }

    public function create()
    {
        $pemiliks = \App\Models\Pemilik::with('user')->get();
        $rasHewans = \App\Models\Ras_Hewan::with('jenisHewan')->get();

        return view('Roles.Admin.Feature.Tambah_hewan', compact('pemiliks', 'rasHewans'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:100',
            'tanggal_lahir' => 'required|date',
            'warna_tanda' => 'required|string|max:45',
            'jenis_kelamin' => 'required|in:J,B',
            'idpemilik' => 'required|exists:pemilik,idpemilik',
            'idras_hewan' => 'required|exists:ras_hewan,idras_hewan',
        ]);

        try {
            Pet::create([
                'nama' => $request->nama,
                'tanggal_lahir' => $request->tanggal_lahir,
                'warna_tanda' => $request->warna_tanda,
                'jenis_kelamin' => $request->jenis_kelamin,
                'idpemilik' => $request->idpemilik,
                'idras_hewan' => $request->idras_hewan,
            ]);

            return redirect()->route('data_hewan')
                ->with('success', 'Data hewan berhasil ditambahkan');
        } catch (\Exception $e) {
            return back()->with('error', 'Gagal menambahkan data hewan');
        }
    }

    public function edit($id)
    {
        $pet = Pet::findOrFail($id);
        $pemiliks = \App\Models\Pemilik::with('user')->get();
        $rasHewans = \App\Models\Ras_Hewan::with('jenisHewan')->get();
        return view('Roles.Admin.Feature.Edit_hewan', compact('pet', 'pemiliks', 'rasHewans'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:100',
            'tanggal_lahir' => 'required|date',
            'warna_tanda' => 'required|string|max:45',
            'jenis_kelamin' => 'required|in:J,B',
            'idpemilik' => 'required|exists:pemilik,idpemilik',
            'idras_hewan' => 'required|exists:ras_hewan,idras_hewan',
        ]);

        try {
            $pet = Pet::findOrFail($id);
            $pet->update([
                'nama' => $request->nama,
                'tanggal_lahir' => $request->tanggal_lahir,
                'warna_tanda' => $request->warna_tanda,
                'jenis_kelamin' => $request->jenis_kelamin,
                'idpemilik' => $request->idpemilik,
                'idras_hewan' => $request->idras_hewan,
            ]);

            return redirect()->route('data_hewan')
                ->with('success', 'Data hewan berhasil diupdate');
        } catch (\Exception $e) {
            return back()->with('error', 'Gagal mengupdate data hewan');
        }
    }

    public function destroy($id)
    {
        $pet = Pet::findOrFail($id);
        $pet->delete();

        return redirect()->route('data_hewan')->with('success', 'Data hewan berhasil dihapus');
    }
}
