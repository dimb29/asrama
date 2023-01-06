<?php

use Illuminate\Database\Seeder;

class KamarTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tb_kasur')->insert([
        	['id_kasur' => 'AGA0110101','id_ruang' => 'AGA01101','terpakai' => '0',],
        	['id_kasur' => 'AGA0110102','id_ruang' => 'AGA01101','terpakai' => '0',],
        	['id_kasur' => 'AGA0110103','id_ruang' => 'AGA01101','terpakai' => '0',],	
        	['id_kasur' => 'AGA0110104','id_ruang' => 'AGA01101','terpakai' => '0',],
        ]);
    }
}
