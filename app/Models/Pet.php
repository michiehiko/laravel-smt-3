<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    protected $table = 'pet';
    protected $primaryKey = 'idpet';
    protected $fillable = [
        'nama',
        'tanggal_lahir',
        'jenis_kelamin', 
        'warna_tanda',
        'idpemilik',
        'idras_hewan',
    ];
    public function pemilik()
    {
        return $this->belongsTo(Pemilik::class, 'idpemilik', 'idpemilik');      
    }
    public function rasHewan()
    {
        return $this->belongsTo(Ras_hewan::class, 'idras_hewan', 'idras_hewan');
    }
    public function temuDokter()
    {
        return $this->hasMany(Temu_dokter::class, 'idpet    ', 'idpet');        
    }

}
