<?php

namespace App\Http\Controllers;

use App\Models\priode;
use App\Models\laporan;
use Illuminate\View\View;
use App\Models\peternakan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Carbon\Carbon;

use Illuminate\Support\Facades\Validator;

class LaporanController extends Controller
{
    //
    public function index(){
        $laporan=laporan::all();
        return view('laporan.index',[
            "title"=>"laporan",
            "data"=>$laporan,
         ]);
    }
    public function select(){
        $laporan=peternakan::all();
        $priode = priode::all();
        $petugas_role = Auth::user()->role;
        if ($petugas_role == 'admin') {
        return view('laporan.select',[
            "title"=>"laporan",
            "data"=>$laporan,
            "priode" => $priode
         ]);
        }elseif ($petugas_role == 'petugas') {
            return view('petugas.select',[
                "title"=>"laporan",
                "data"=>$laporan,
                "priode" => $priode
             ]);
        }

    }


    public function show($id): View {

        $laporan = laporan::where('priode_id', $id)->get();
       // $laporan1 = laporan::latest()->paginate(1)->where('priode_id', $id);
        $laporan1 = laporan::where('priode_id', $id)->get();;
        $petugas_role = Auth::user()->role;
 //dd($petugas_id);
 if ($petugas_role == 'admin') {
    return view('laporan.show')->with([
        "title" => "laporan",
        "data" => $laporan
    ]);
} elseif ($petugas_role == 'petugas') {
    return view('petugas.show')->with([
        "title" => "laporan",
        "data" => $laporan1
    ]);
}

        abort(403, 'Anda tidak memiliki izin untuk melihat halaman ini.');
    }
    public function create($id){
        $tgl=priode::find($id);
        $data=$tgl->tgl_mulai;
        //dd($data);
        return view('laporan.create1', [
            "title" => "Tambah Laporan",
            "priode_id" => $id,
            "tgl"=>$data
        ]);
    }

    public function store(Request $request,)
{

    $validator = Validator::make($request->all(), [
        'petugas_id' => 'required',
        'tgl_kunjungan' => 'required',
        'mdd_ci' => 'required',
        'priode_id' => 'required',
        'tgl_ci' => 'required',
        'pop_e' => 'required',
        'bw_doc' => 'required',
        'doc' => 'required',
        'jenis_pakan' => 'required',
        'tkp_sak' => 'required',
        'sp_sak' => 'required',
        'terpakai' => 'required',
        'umur' => 'required',
        'mor_e' => 'required',
        'mor' => 'required',
        'ayam_hidup' => 'required',
        'bw' => 'required',
        'fi' => 'required',
        'act_fcr' => 'required',
        'std_fcr' => 'required',
        'dif' => 'required',
        'pbbh' => 'required',
        'std_pbbh' => 'required',
        'progres' => 'required',
        'ep' => 'required',
        'std_eph' => 'required',
        'progres2' => 'required',
        'suhu' => 'required',
        'rh' => 'required',
        'hi' => 'required',
        'kepadatan' => 'required',
        'tra' => 'required',
        'tma' => 'required',
        'treatment_ovk' => 'required',
        'kondisi' => 'required',
        'saran' => 'required'
    ]);

    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }

    // Ambil data periode berdasarkan priod_id
    $priode_tgl = priode::find($request->priode_id);

    // Ambil id petugas yang sedang login
    $petugas_id = Auth::id();

    // Hitung umur berdasarkan selisih tgl_kunjungan dan tgl_ci
    $tglKunjungan = Carbon::parse($request->tgl_kunjungan);
    $tglCi = Carbon::parse($priode_tgl->tgl_mulai);
    $umur = $tglKunjungan->diffInDays($tglCi);

    // Simpan data laporan ke dalam database
    Laporan::create([
        'petugas_id' => $petugas_id,
        'tgl_kunjungan' => $request->tgl_kunjungan,
        'mdd_ci' => $request->mdd_ci,
        'priode_id' => $request->priode_id,
        'map' => $request->map,
        'tgl_ci' => $priode_tgl->tgl_mulai,
        'pop_e' => $request->pop_e,
        'bw_doc' => $request->bw_doc,
        'doc' => $request->doc,
        'jenis_pakan' => $request->jenis_pakan,
        'tkp_sak' => $request->tkp_sak,
        'sp_sak' => $request->sp_sak,
        'terpakai' => $request->terpakai,
        'umur' => $umur,
        'mor_e' => $request->mor_e,
        'mor' => $request->mor,
        'ayam_hidup' => $request->ayam_hidup,
        'bw' => $request->bw,
        'fi' => $request->fi,
        'act_fcr' => $request->act_fcr,
        'std_fcr' => $request->std_fcr,
        'dif' => $request->dif,
        'pbbh' => $request->pbbh,
        'std_pbbh' => $request->std_pbbh,
        'progres' => $request->progres,
        'ep' => $request->ep,
        'std_eph' => $request->std_eph,
        'progres2' => $request->progres2,
        'suhu' => $request->suhu,
        'rh' => $request->rh,
        'hi' => $request->hi,
        'kepadatan' => $request->kepadatan,
        'tra' => $request->tra,
        'tma' => $request->tma,
        'treatment_ovk' => $request->treatment_ovk,
        'kondisi' => $request->kondisi,
        'saran' => $request->saran,
    ]);

    return redirect()->route('laporan.show', $request->priode_id)
        ->with('success', 'Laporan berhasil ditambahkan');
}
// public function edit(laporan $laporan, $id):View
//     { //dd($laporan);

//         $laporan = Laporan::findOrFail($id);
//         return view('petugas.edit',compact('laporan','id'))->with([
//             "title" => "Ubah Data laporan",

//         ]);
//     }
public function edit($id)
{
    $laporan = Laporan::findOrFail($id); // Menemukan laporan berdasarkan ID
    return view('petugas.edit', compact('laporan'));
}

    public function update(Request $request, $id)
{
    $validator = Validator::make($request->all(), [
        'petugas_id' => 'required',
        'tgl_kunjungan' => 'required',
        'mdd_ci' => 'required',
        'priode_id' => 'required',
        //'tgl_ci' => 'required',
        'pop_e' => 'required',
        'bw_doc' => 'required',
        'doc' => 'required',
        'jenis_pakan' => 'required',
        'tkp_sak' => 'required',
        'sp_sak' => 'required',
        'terpakai' => 'required',
        'umur' => 'required',
        'mor_e' => 'required',
        'mor' => 'required',
        'ayam_hidup' => 'required',
        'bw' => 'required',
        'fi' => 'required',
        'act_fcr' => 'required',
        'std_fcr' => 'required',
        'dif' => 'required',
        'pbbh' => 'required',
        'std_pbbh' => 'required',
        'progres' => 'required',
        'ep' => 'required',
        'std_eph' => 'required',
        'progres2' => 'required',
        'suhu' => 'required',
        'rh' => 'required',
        'hi' => 'required',
        'kepadatan' => 'required',
        'tra' => 'required',
        'tma' => 'required',
        'treatment_ovk' => 'required',
        'kondisi' => 'required',
        'saran' => 'required'
    ]);

    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }

    $laporan = Laporan::findOrFail($id);
    $priode_tgl=priode::find($request->priode_id);
    //$priode_tgl=$request->priode_id;
   // dd($priode_tgl->tgl_mulai);
    $laporan->update([
        'petugas_id' => Auth::id(),
        'tgl_kunjungan' => $request->tgl_kunjungan,
        'mdd_ci' => $request->mdd_ci,
        'priode_id' => $request->priode_id,
        'map' => $request->map,
        'tgl_ci' => $priode_tgl->tgl_mulai,
        'pop_e' => $request->pop_e,
        'bw_doc' => $request->bw_doc,
        'doc' => $request->doc,
        'jenis_pakan' => $request->jenis_pakan,
        'tkp_sak' => $request->tkp_sak,
        'sp_sak' => $request->sp_sak,
        'terpakai' => $request->terpakai,
        'umur' => $request->umur,
        'mor_e' => $request->mor_e,
        'mor' => $request->mor,
        'ayam_hidup' => $request->ayam_hidup,
        'bw' => $request->bw,
        'fi' => $request->fi,
        'act_fcr' => $request->act_fcr,
        'std_fcr' => $request->std_fcr,
        'dif' => $request->dif,
        'pbbh' => $request->pbbh,
        'std_pbbh' => $request->std_pbbh,
        'progres' => $request->progres,
        'ep' => $request->ep,
        'std_eph' => $request->std_eph,
        'progres2' => $request->progres2,
        'suhu' => $request->suhu,
        'rh' => $request->rh,
        'hi' => $request->hi,
        'kepadatan' => $request->kepadatan,
        'tra' => $request->tra,
        'tma' => $request->tma,
        'treatment_ovk' => $request->treatment_ovk,
        'kondisi' => $request->kondisi,
        'saran' => $request->saran,
    ]);

    return redirect()->route('laporan.show', $id=$request->priode_id,
    )->with('success', 'Laporan berhasil diperbarui');
}

}
