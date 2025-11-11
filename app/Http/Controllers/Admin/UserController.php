<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function DataUser()
    {
        $users = User::all();
        return view('Roles/Admin/View/Data_user', compact('users'));
    }
}
