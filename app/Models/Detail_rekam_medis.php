<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Detail_rekam_medis extends Model
{
    protected $table = 'detail_rekam_medis';
    protected $primaryKey = 'iddetail_rekam_medis';
    public $timestamps = false;

    protected $fillable = [
        'idrekam_medis',
        'idkode_tindakan_terapi',
        'detail',
    ];

    public function rekamMedis()
    {
        return $this->belongsTo(Rekam_medis::class, 'idrekam_medis', 'idrekam_medis');
    }

    public function tindakanTerapi()
    {
        return $this->belongsTo(Kode_tindakan::class, 'idkode_tindakan_terapi', 'idkode_tindakan_terapi');
    }
}
