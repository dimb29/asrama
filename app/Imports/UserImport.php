<?php

namespace App\Imports;

use App\User;
use Maatwebsite\Excel\Concerns\ToModel;
use Hash;
class UserImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        ini_set('max_execution_time', 300);
        return new User([
                'id'             => $row[0],
                'name'           => $row[1],
                'tp_lahir'       => $row[2],
                'tgl_lahir'      => $row[3],
                'thangkatan'     => $row[4],
                'username'       => $row[5],
                'email'          => $row[6],
                'telepon'        => $row[7],
                'alamat_mhs'     => $row[8],
                'prodi'          => $row[9],
                'nama_ayah'      => $row[10],
                'nama_ibu'       => $row[11],
                'alamat_ortu'    => $row[12],
                'notelp_ortu'    => $row[13],
                'goldar'         => $row[14],
                'masalah_kes'    => $row[15],
                'kons_obat'      => $row[16],
                'alergi_mkn'     => $row[17],
                'foto'           => $row[18],
                'status'         => $row[19],
                'password'       => Hash::make($row[20]),
        ]);
    }
}
