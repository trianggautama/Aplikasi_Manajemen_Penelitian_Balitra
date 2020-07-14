<?php

namespace App;

use App\Traits\Uuid;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;
    use Uuid;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nama', 'username',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function data_personal()
    {
        return $this->hasOne(Data_personal::class);
    }

    public function permohonan()
    {
        return $this->hasOne(Permohonan::class);
    }

    public function peneliti()
    {
        return $this->hasOne(Peneliti::class);
    }

    public function penelitian()
    {
        return $this->hasMany(Penelitian::class);
    }
}
