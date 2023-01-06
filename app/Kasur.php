<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kasur extends Model
{
    protected $table = 'tb_kasur';

    protected $fillable = [
    	'id_kasur', 'id_ruang', 'terpakai',
    ];

    public function booking()
    {
        return $this->hasMany(Booking::class);
    }
}
