<?php

namespace App\Http\Controllers\Resepsionis;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardResepsionisController extends Controller
{
    public function Dashboard()
    {
        return view('Roles.Resepsionis.Dashboard_resepsionis');
    }
}
