<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pemilik; 
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;


class Data_pemilikController extends Controller
{
     public function DataPemilik() {
        $datapemilik = Pemilik::with('user')->get();
        return view('Roles.Admin.View.Data_pemilik', compact('datapemilik'));
    }

    public function create()
    {
        $datapemilik = Pemilik::with('user')->get();
        return view('Roles.Admin.Feature.Tambah_pemilik', compact('datapemilik'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:500',
            'email' => 'required|email|unique:user,email',
            'password' => 'required|min:6',
            'no_wa' => 'required|string|max:45',
            'alamat' => 'required|string|max:100',
        ]);

        DB::beginTransaction();
        try {
            $user = User::create([
                'nama' => $request->nama,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);

            Pemilik::create([
                'iduser' => $user->iduser,
                'no_wa' => $request->no_wa,
                'alamat' => $request->alamat,
            ]);

            DB::commit();
            return redirect()->route('data_pemilik')
                ->with('success', 'Data pemilik berhasil ditambahkan');
        } catch (\Exception $e) {
            DB::rollback();
            return back()->with('error', 'Gagal menambahkan data pemilik');
        }
    }

    public function edit($id)
    {
        $pemilik = Pemilik::with('user')->findOrFail($id);
        return view('Roles.Admin.Feature.Edit_pemilik', compact('pemilik'));
    }

    public function update(Request $request, $id)
    {
        $pemilik = Pemilik::findOrFail($id);
        
        $request->validate([
            'nama' => 'required|string|max:500',
            'email' => 'required|email|unique:user,email,' . $pemilik->iduser . ',iduser',
            'no_wa' => 'required|string|max:45',
            'alamat' => 'required|string|max:100',
        ]);

        DB::beginTransaction();
        try {
            $user = User::findOrFail($pemilik->iduser);
            $user->nama = $request->nama;
            $user->email = $request->email;
            
            if ($request->filled('password')) {
                $user->password = Hash::make($request->password);
            }
            
            $user->save();

            $pemilik->update([
                'no_wa' => $request->no_wa,
                'alamat' => $request->alamat,
            ]);

            DB::commit();
            return redirect()->route('data_pemilik')
                ->with('success', 'Data pemilik berhasil diupdate');
        } catch (\Exception $e) {
            DB::rollback();
            return back()->with('error', 'Gagal mengupdate data pemilik');
        }
    }

    public function destroy($id)
    {
        DB::beginTransaction();
        try {
            $pemilik = Pemilik::findOrFail($id);
            $user = User::findOrFail($pemilik->iduser);
            
            $pemilik->delete();
            $user->delete();

            DB::commit();
            return redirect()->route('data_pemilik')
                ->with('success', 'Data pemilik berhasil dihapus');
        } catch (\Exception $e) {
            DB::rollback();
            return back()->with('error', 'Gagal menghapus data pemilik');
        }
    }
}
