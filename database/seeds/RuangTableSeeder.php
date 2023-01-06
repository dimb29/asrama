<?php

use Illuminate\Database\Seeder;

class RuangTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tb_ruangan')->insert([
        	// [
        	// 	'id_ruang'		=> 'AGA01101',
        	// 	'gedung_id'		=> 'AGA',
        	// 	'nama_ruang'	=> '101',
        	// 	'lantai'		=> '01',
        	// 	'kapasitas'		=> '4',
        	// 	'terpakai'		=> '0',
        	// 	'fasilitas'		=> 'Tempat Tidur, Kasur, Bantal, Meja Belajar, Kursi',
        	// ],[
        	// 	'id_ruang'		=> 'AGA01102',
        	// 	'gedung_id'		=> 'AGA',
        	// 	'nama_ruang'	=> '102',
        	// 	'lantai'		=> '01',
        	// 	'kapasitas'		=> '4',
        	// 	'terpakai'		=> '0',
        	// 	'fasilitas'		=> 'Tempat Tidur, Kasur, Bantal, Meja Belajar, Kursi',
        	// ],[
        	// 	'id_ruang'		=> 'AGA01103',
        	// 	'gedung_id'		=> 'AGA',
        	// 	'nama_ruang'	=> '103',
        	// 	'lantai'		=> '01',
        	// 	'kapasitas'		=> '4',
        	// 	'terpakai'		=> '0',
        	// 	'fasilitas'		=> 'Tempat Tidur, Kasur, Bantal, Meja Belajar, Kursi',
        	// ],[
        	// 	'id_ruang'		=> 'AGA01104',
        	// 	'gedung_id'		=> 'AGA',
        	// 	'nama_ruang'	=> '104',
        	// 	'lantai'		=> '01',
        	// 	'kapasitas'		=> '4',
        	// 	'terpakai'		=> '0',
        	// 	'fasilitas'		=> 'Tempat Tidur, Kasur, Bantal, Meja Belajar, Kursi',
        	// ],
        ]);
    }
}
