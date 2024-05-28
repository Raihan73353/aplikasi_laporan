<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class laporan extends Model
{
    use HasFactory;
    protected $fillable = [
        'petugas_id',
        'mdd_ci',
        'peternakan_id',
        'map',
        'tgl_ci',
        'pop_e',
        'bw_doc',
        'doc',
        'jenis_pakan',
        'tkp_sak',
        'sp_sak',
        'terpakai',
        'umur',
        'mor_e',
        'mor',
        'ayam_hidup',
        'bw',
        'fi',
        'act_fcr',
        'std_fcr',
        'dif',
        'pbbh',
        'std_pbbh',
        'progres',
        'ep',
        'std_eph',
        'suhu',
        'rh',
        'hi',
        'kepadatan',
        'tra',
        'tma',
        'treatment_ovk',
        'kondisi',
        'saran'
    ];
    // public function petugas()
    // {
    //     return $this->belongsTo(petuga::class, 'petugas_id');
    // }

    public function peternakan()
    {
        return $this->belongsTo(peternakan::class, 'peternakan_id');
    }
}
