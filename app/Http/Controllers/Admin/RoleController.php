<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class RoleController extends Controller
{
    public function DataRole()
    {
        $users = User::with([
            'roles' => function ($q) {
                $q->withPivot('idrole_user', 'status');
            }
        ])->get();
        return view('Roles/Admin/View/Data_role', compact('users'));
    }
}
