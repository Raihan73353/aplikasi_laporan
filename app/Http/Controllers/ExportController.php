<?php

namespace App\Http\Controllers;


use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\DB;

class ExportController extends Controller
{
    public function export()
    {
        // Menggunakan Excel::create() dari versi 1.1
        Excel::create('LaporanData', function($excel) {
            $excel->sheet('Sheet 1', function($sheet) {
                $data = DB::table('nama_tabel')->select([
                    'petugas_id', 'mdd_ci', 'priode_id', 'tgl_ci', 'pop_e', 'bw_doc',
                    'doc', 'jenis_pakan', 'tkp_sak', 'sp_sak', 'terpakai', 'umur',
                    'mor_e', 'mor', 'ayam_hidup', 'bw', 'fi', 'act_fcr', 'std_fcr',
                    'dif', 'pbbh', 'std_pbbh', 'progres', 'ep', 'std_eph', 'suhu',
                    'rh', 'hi', 'kepadatan', 'tra', 'tma', 'treatment_ovk', 'kondisi', 'saran'
                ])->get();

                // Mengkonversi data ke array
                $dataArray = [];
                foreach ($data as $dt) {
                    $dataArray[] = (array) $dt;
                }

                // Menambahkan data ke sheet
                $sheet->fromArray($dataArray, null, 'A1', false, false);
                $sheet->row(1, [
                    'Petugas ID', 'MDD CI', 'Priode ID', 'Tgl CI', 'Pop E', 'BW DOC', 'DOC',
                    'Jenis Pakan', 'TKP Sak', 'SP Sak', 'Terpakai', 'Umur', 'Mor E',
                    'Mor', 'Ayam Hidup', 'BW', 'FI', 'Act FCR', 'Std FCR', 'Dif',
                    'PBBH', 'Std PBBH', 'Progres', 'EP', 'Std EPH', 'Suhu', 'RH', 'HI',
                    'Kepadatan', 'TRA', 'TMA', 'Treatment OVK', 'Kondisi', 'Saran'
                ]);
            });
        })->export('xls');
    }
}