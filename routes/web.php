<?php

use App\Http\Controllers\LaporanController;
use App\Http\Controllers\peternakanController;
use App\Http\Controllers\petugasController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\priodeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('dashboard',[
        "title"=>"Dashboard"
    ]);
})->middleware('auth');
Route::resource('pengguna',UserController::class)->except('destroy','show','update','edit')->middleware('auth');
Route::resource('peternakan',peternakanController::class)->middleware('auth');
Route::resource('laporan',LaporanController::class)->middleware('auth');
Route::get('/laporan/create/{id}', [LaporanController::class, 'create'])->name('laporan.create')->middleware('auth');
Route::post('/laporan/store/{id}', [LaporanController::class, 'store'])->name('laporan.store')->middleware('auth');

Route::resource('petugas',petugasController::class)->middleware('auth');
Route::get('login',[LoginController::class,'loginView'])->name('login');
Route::post('login',[LoginController::class,'authenticate']);
Route::post('logout',[LoginController::class,'logout'])->middleware('auth');
Route::resource('priode',priodeController::class)->middleware('auth');
Route::get('/priode/create/{id}', [priodeController::class, 'create'])->name('priode.create')->middleware('auth');
Route::post('/priode/store/{id}', [priodeController::class, 'store'])->name('priode.store')->middleware('auth');
