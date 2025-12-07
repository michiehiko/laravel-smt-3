<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Role_user; 

class Data_dokterController extends Controller
{
    public function DataDokter()
    {
        $dokters = Role_user::with('user') 
            ->where('idrole', 2)
            ->get();
        return view('Roles.Admin.View.Data_dokter', compact('dokters'));
    }

    public function create()
    {
        return view('Roles.Admin.Feature.Tambah_dokter');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:500',
            'email' => 'required|email|unique:user,email',
            'password' => 'required|min:6',
        ]);

        DB::beginTransaction();
        try {
            $user = User::create([
                'nama' => $request->nama,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);

            Role_user::create([
                'iduser' => $user->iduser, 
                'idrole' => 2,
                'status' => 1,
            ]);

            DB::commit();
            
            return redirect()->route('data_dokter') 
                ->with('success', 'Data dokter berhasil ditambahkan');
                
        } catch (\Exception $e) {
            DB::rollback();
            // Debugging: Buka komentar di bawah kalau mau lihat pesan error aslinya
            // dd($e->getMessage()); 
            return back()->with('error', 'Gagal menambahkan data dokter: ' . $e->getMessage());
        }
    }

    public function edit($id)
    {
        $roleUser = Role_user::with('user')->findOrFail($id);
        return view('Roles.Admin.Feature.Edit_dokter', compact('roleUser'));
    }

    public function update(Request $request, $id)
    {
        $roleUser = Role_user::findOrFail($id);
        
        $request->validate([
            'nama' => 'required|string|max:500',
            'email' => 'required|email|unique:user,email,' . $roleUser->iduser . ',iduser',
        ]);

        DB::beginTransaction();
        try {
            $user = User::findOrFail($roleUser->iduser);
            $user->nama = $request->nama;
            $user->email = $request->email;
            
            if ($request->filled('password')) {
                $user->password = Hash::make($request->password);
            }
            
            $user->save();

            DB::commit();
        
            return redirect()->route('data_dokter')
                ->with('success', 'Data dokter berhasil diupdate');
                
        } catch (\Exception $e) {
            DB::rollback();
            return back()->with('error', 'Gagal mengupdate data dokter');
        }
    }

    public function destroy($id)
    {
        $dokter = Role_user::findOrFail($id);
        $dokter->delete();

        return redirect()->route('data_dokter')->with('success', 'Data dokter berhasil dihapus');
    }

    public function updateStatus($id)
    {
        try {
            // Cari data role user (dokter)
            $roleUser = Role_user::findOrFail($id);

            // Cek status sekarang, lalu balik kondisinya
            // Jika 1 (aktif) ubah jadi 0 (nonaktif)
            // Jika 0 (nonaktif) ubah jadi 1 (aktif)
            $roleUser->status = ($roleUser->status == 1) ? 0 : 1;
            
            $roleUser->save();

            // Cek status baru buat pesan notifikasi
            $statusBaru = ($roleUser->status == 1) ? 'diaktifkan' : 'dinonaktifkan';

            return back()->with('success', 'Status dokter berhasil ' . $statusBaru);

        } catch (\Exception $e) {
            return back()->with('error', 'Gagal mengubah status dokter');
        }
    }
}