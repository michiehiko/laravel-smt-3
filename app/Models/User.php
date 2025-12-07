<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    protected $table = 'User';
    protected $primaryKey = 'iduser';
    public $timestamps = false;
    protected $fillable = [
        'nama',
        'email',
        'password',
    ];

    public function roles()
    {
        return $this->belongsToMany(Role::class, 'Role_user', 'iduser', 'idrole')
        ->withPivot('status', 'idrole_user');
    }
    public function roleUsers()
    {
        return $this->hasMany(Role_User::class, 'iduser', 'iduser');
    }
    public function pemilik()
    {
        return $this->hasOne(Pemilik::class, 'iduser', 'iduser');
    }
}
