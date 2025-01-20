<?php

namespace App\Http\Controllers;

use App\Models\peternakan;
use App\Models\laporan;

use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $totalpeternakan = peternakan::count();
        $totalAdmins = User::where('role', 'admin')->count();
        $totalPetugas = User::where('role', 'petugas')->count();
        $totallaporan = laporan::count();
        $latestlaporan = laporan::latest()->paginate(5);
        return view('dashboard',[
            'totalpeternakan'=> $totalpeternakan,
            'totalAdmins'=> $totalAdmins,
            'totalPetugas'=> $totalPetugas,
            'totallaporan'=> $totallaporan,
            'latestlaporan'=> $latestlaporan,
            "title" => "dahsboard",
        ]);
    }
}
