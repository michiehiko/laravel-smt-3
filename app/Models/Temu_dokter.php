<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Temu_dokter extends Model
{
    protected $table = 'temu_dokter';
    protected $primaryKey = 'idreservasi_dokter';
    protected $fillable = [
        'no_urut',
        'waktu_daftar',
        'status',
        'idpet',
        'idrole_user',
        'tanggal',
    ];
    public function pet()
    {
        return $this->belongsTo(Pet::class, 'idpet', 'idpet');
    }
    public function dokter()
    {
        return $this->belongsTo(Role_User::class, 'idrole_user', 'idrole_user');
    }
    public function rekamMedis()
    {
        return $this->hasMany(Rekam_Medis::class, 'idreservasi_dokter', 'idreservasi_dokter');
    }

}
