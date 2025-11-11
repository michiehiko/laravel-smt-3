<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jenis_hewan extends Model
{
    protected $table = 'jenis_hewan';
    protected $primaryKey = 'idjenis_hewan';
    public $timestamps = false;

    protected $fillable = [
        'nama_jenis_hewan',
    ];

    public function rasHewans()
    {
        return $this->hasMany(Ras_hewan::class, 'idjenis_hewan', 'idjenis_hewan');
    }
}
