<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User, App\Kasur;
class Booking extends Model
{
	protected $table = 'tb_booking';

	public function user()
	{
		return $this->belongsTo(User::class);
	}
	public function kasur()
	{
		return $this->belongsTo(Kasur::class);
	}
}
