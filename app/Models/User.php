<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
use Spatie\MediaLibrary\HasMedia;
use Spatie\Permission\Traits\HasRoles;
use Spatie\MediaLibrary\InteractsWithMedia;

class User extends Authenticatable implements HasMedia
{
    use HasFactory, Notifiable, HasRoles;
    use InteractsWithMedia;
    use HasRoles;

    protected $fillable = [
        // 'usuario',
        // 'email',
        // 'puesto',
        // 'dependencia',
        // 'empresa',
        // 'password',
        // 'imagen',
        // 'sueldo',
        // 'role'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'detalles' => 'array'
    ];

    public function jefe ()
    {
        return $this->belongsTo(User::class, 'jefe_id');
    }
}
