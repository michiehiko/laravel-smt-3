<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'Role';
    protected $primaryKey = 'idrole';
    protected $fillable = [
        'nama_role'
    ];

    public function users()
    {
        return $this->belongsToMany(User::class, 'Role_user', 'idrole', 'iduser')
        ->withPivot('status', 'idrole_user');
    }

    public function roleUsers()
    {
        return $this->hasMany(Role_User::class, 'idrole', 'idrole');
    }
}
