<?php

namespace App\Imports;

use App\Kasur;
use Maatwebsite\Excel\Concerns\ToModel;

class KasurImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Kasur([
                'id_kasur'      => $row[0],
                'id_ruang'      => $row[1],
                'terpakai'      => 0,
        ]);
    }
}
