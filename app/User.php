<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'users';
    protected $fillable = [
        'id','name','tp_lahir','tgl_lahir','username', 'email','thangkatan','telepon','alamat_mhs','password','prodi','status','nama_ayah','nama_ibu', 'alamat_ortu', 'no_telp ortu', 'goldar', 'masalah_kes', 'kons_obat', 'alergi_mkn', 'foto','first_time_login'
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

    public function booking()
    {
        return $this->hasMany(Booking::class);
    }
}
