<?php

use App\Http\Controllers\LaporanController;
use App\Http\Controllers\peternakanController;
use App\Http\Controllers\petugasController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\priodeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\fcrController;
use App\Http\Controllers\pbbhController;
use Illuminate\Support\Facades\Route;
use App\Livewire\inputData;
use App\Http\Controllers\ExportController;
use App\Exports\LaporanExport;
use Maatwebsite\Excel\Facades\Excel;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[LoginController::class,'loginView']);
Route::resource('pengguna',UserController::class)->middleware('auth');
Route::resource('user', UserController::class);
Route::resource('password', petugasController::class);
Route::resource('peternakan',peternakanController::class)->middleware('auth');
Route::resource('laporan',LaporanController::class)->middleware('auth');
//Route::get('laporan',[LaporanController::class,'showp'])->name('laporan.showp')->middleware('auth');

Route::get('select',[LaporanController::class,'select'])->name('select.select')->middleware('auth');
// Route::get('/laporan/create/{id}', [LaporanController::class, 'create'])->name('laporan.create')->middleware('auth');
// Route::post('/laporan/store/{id}', [LaporanController::class, 'store'])->name('laporan.store')->middleware('auth');

Route::resource('petugas',petugasController::class)->middleware('auth');
Route::get('login',[LoginController::class,'loginView'])->name('login');
Route::post('login',[LoginController::class,'authenticate']);
Route::post('logout',[LoginController::class,'logout'])->middleware('auth');
Route::resource('priode',priodeController::class)->middleware('auth');
Route::get('/priode/create/{id}', [priodeController::class, 'create'])->name('priode.create')->middleware('auth');
Route::post('/priode/store/{id}', [priodeController::class, 'store'])->name('priode.store')->middleware('auth');
Route::resource('laporanp', LaporanController::class);
Route::get('/laporan/{id}/edit', [LaporanController::class, 'edit'])->name('laporanp.edit');
Route::put('/laporan/{id}', [LaporanController::class, 'update'])->name('laporanp.update');



// route::get('/fcr', [fcrController::class, 'create'])->name('fcr.create');
// route::post('/fcr', [fcrController::class, 'store'])->name('fcr.store');
// route::get('/pbbh', [pbbhController::class, 'create'])->name('pbbh.create');
// route::post('/pbbh', [pbbhController::class, 'store'])->name('pbbh.store');


Route::get('laporan/create1/{priode_id}', [LaporanController::class, 'create'])->name('laporan.create1')->middleware('auth');
Route::get('laporan/create/{priode_id}', inputData::class)->name('laporan.create')->middleware('auth');
// Route::get('export-laporan', function () {
//     return Excel::download(new LaporanExport, 'laporan.xlsx');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');
