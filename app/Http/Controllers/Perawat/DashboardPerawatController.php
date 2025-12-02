<?php

namespace App\Http\Controllers\Perawat;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardPerawatController extends Controller
{
    public function Dashboard()
    {
        return view('Roles.Perawat.Dashboard_perawat');
    }

}
