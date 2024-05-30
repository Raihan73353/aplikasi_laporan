<?php

namespace App\Http\Controllers;

use App\Models\peternakan;
use App\Models\priode;
use Illuminate\Http\Request;

class petugasController extends Controller
{
    //
    public function index()
    {
        $peternakan = Peternakan::all();
        $priode = Priode::where('aktif', 'on')->get();

        return view('petugas.index', [
            'title' => 'Peternakan',
            'data' => $peternakan,
            'priode' => $priode
        ]);
    }
}
