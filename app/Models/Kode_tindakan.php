<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kode_tindakan extends Model
{
    protected $table = 'kode_tindakan_terapi';
    protected $primaryKey = 'idkode_tindakan_terapi';
    protected $fillable = [
        'kode',
        'deskripsi_tindakan_terapi',
        'idkategori',
        'idkategori_klinis',
    ];
    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'idkategori', 'idkategori');
    }
    public function kategoriKlinis()
    {
        return $this->belongsTo(Kategori_klinis::class, 'idkategori_klinis','idkategori_klinis');
    }
    public function detailRekamMedis()
    {
        return $this->hasMany(Detail_rekam_medis::class, 'idkode_tindakan_terapi', 'idkode_tindakan_terapi');
    }


}
