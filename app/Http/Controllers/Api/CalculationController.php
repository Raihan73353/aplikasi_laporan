<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\fcr; // Sesuaikan dengan model Anda
use App\Models\pbbh; // Sesuaikan dengan model Anda

class CalculationController extends Controller
{
    public function getFcr(Request $request)
    {
        $bw = $request->query('bw');
        $fcr = fcr::where('bw', '>=', $bw)->orderBy('bw')->first();

        return response()->json(['fcr' => $fcr->fcr ?? null]);
    }

    public function getPbbh(Request $request)
    {
        $umur = $request->query('umur');
        $pbbh = pbbh::where('umur', '>=', $umur)->orderBy('umur')->first();

        return response()->json(['pbbh' => $pbbh->pbbh ?? null]);
    }

    public function getEph(Request $request)
    {
        $umur = $request->query('umur');
        $eph = pbbh::where('umur', '>=', $umur)->orderBy('umur')->first();

        return response()->json(['eph' => $eph->eph ?? null]);
    }
}

