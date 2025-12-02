<?php

namespace App\Http\Controllers\Dokter;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardDokterController extends Controller
{
    public function Dashboard()
    {
        return view('Roles.Dokter.Dashboard_dokter');
    }
}