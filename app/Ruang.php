<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ruang extends Model
{
	protected $table = "tb_ruangan";
    protected $fillable = [
    	'id_ruang','nama_ruang', 'gedung_id', 'lantai', 'kapasitas', 'fasilitas', 'terpakai'
    ];
}
