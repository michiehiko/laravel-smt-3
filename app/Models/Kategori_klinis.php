<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kategori_klinis extends Model
{
    protected $table = 'kategori_klinis';
    protected $primaryKey = 'idkategori_klinis';
    protected $fillable = [
        'nama_kategori_klinis',
    ];
    
    public function kodeTindakanTerapi()
    {
        return $this->hasMany(Kode_tindakan::class, 'idkategori_klinis', 'idkategori_klinis');
    }
}
