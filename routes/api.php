<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\fcr;
use App\Models\pbbh;
use App\Http\Controllers\Api\CalculationController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
// Route::get('/get-std-fcr', function (Request $request) {
//     $bw = $request->query('bw');
//     $stdFcr = Fcr::where('bw', '>=', $bw)
//                   ->orderBy('bw')
//                   ->select('fcr')
//                   ->first();

//     return response()->json([
//         'std_fcr' => $stdFcr ? $stdFcr->fcr : null,
//     ]);
// });

// Route::get('/get-pbbh', function (Request $request) {
//     $umur = $request->query('umur');

//     // Cari record PBBH berdasarkan umur
//     $pbbhRecord = Pbbh::where('umur', '>=', $umur)
//                        ->orderBy('umur')
//                        ->select('pbbh')
//                        ->first();

//     // Jika data ditemukan, kembalikan pbbh, jika tidak return null
//     return response()->json([
//         'pbbh' => $pbbhRecord ? $pbbhRecord->pbbh : null,
//     ]);
// });

Route::get('/fcr', [CalculationController::class, 'getFcr']);
Route::get('/pbbh', [CalculationController::class, 'getPbbh']);
Route::get('/eph', [CalculationController::class, 'getEph']);
