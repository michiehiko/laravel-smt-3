<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use App\Models\Role;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $user = User::with([
            'roleUsers' => function ($query) {
                $query->where('status', 1);
            },
            'roleUsers.role'
        ])->where('email', $request->email)->first();

        if (!$user) {
            return back()->withErrors(['email' => 'Email tidak ditemukan.'])->withInput();
        }

        if (!Hash::check($request->password, $user->password)) {
            return back()->withErrors(['password' => 'Password salah.'])->withInput();
        }

        $roleActive = $user->roleUsers[0] ?? null;

        if (!$roleActive) {
            return back()->with('error', 'Role user tidak aktif!');
        }
        $namaRole = Role::find($roleActive->idrole);
        
        Auth::login($user);
        $request->session()->put([
            'user_id'         => $user->iduser,
            'user_name'       => $user->nama,
            'user_email'      => $user->email,
            'user_role'       => (string)$roleActive->idrole,  // FIX
            'user_role_name'  => $namaRole->nama_role ?? 'User',
            'user_status'     => $roleActive->status,
        ]);

        $userRole = (string)$roleActive->idrole;
        // var_dump($userRole); die();
        switch ($userRole) {
            case '1': return redirect()->route('Dashboard_admin')->with("Login Success", "Full Akses Data Master");
            case '2': return redirect()->route('Dashboard_dokter')->with("Login Success", "Akses pada data yang tersedia");
            case '3': return redirect()->route('Dashboard_perawat')->with("Login Success", "Akses pada data yang tersedia");
            case '4': return redirect()->route('Dashboard_resepsionis')->with("Login Success", "Akses pada data yang tersedia");
            case '5': return redirect()->route('Dashboard_pemilik')->with("Login Success", "Akses pada data yang tersedia");
        }

        return redirect('/home')->with('success', 'Login berhasil!');
    }


    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}