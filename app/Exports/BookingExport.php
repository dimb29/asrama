<?php

namespace App\Exports;

use App\Booking;
use Maatwebsite\Excel\Concerns\FromCollection;

class BookingExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
    	$data = Booking::with(['user','kasur'])
    	// ->where('user.id','tb_boking.id_user')
    	->get(); 
        // return Booking::with(['user','kasur'])->get();
        dd($data);
    }
}
