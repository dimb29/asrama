<?php

namespace App\Imports;

use App\Ruang;
use Maatwebsite\Excel\Concerns\ToModel;

class RuangImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Ruang([
                'id_ruang'      => $row[0],
                'nama_ruang'    => $row[1],
                'gedung_id'     => $row[2],
                'lantai'        => $row[3],
                'kapasitas'     => $row[4],
                'fasilitas'     => $row[5],
                'terpakai'      => $row[6],
        ]);
    }
}
