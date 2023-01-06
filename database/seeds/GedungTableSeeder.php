<?php

use Illuminate\Database\Seeder;

class GedungTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ms_gedung')->insert([

        	[
        		'id_gedung'			=> 'AGA',
        		'id_kampus'			=> 'A',
        		'nama_gedung'		=> 'Gedung Asrama A',
        		'description'		=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
        	],
        	[
        		'id_gedung'			=> 'AGB',
        		'id_kampus'			=> 'A',
        		'nama_gedung'		=> 'Gedung Asrama B',
        		'description'		=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
        	],
        	[
        		'id_gedung'			=> 'AGC',
        		'id_kampus'			=> 'A',
        		'nama_gedung'		=> 'Gedung Asrama C',
        		'description'		=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
        	],
        	[
        		'id_gedung'			=> 'BGA',
        		'id_kampus'			=> 'B',
        		'nama_gedung'		=> 'Gedung Asrama Kendal',
        		'description'		=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
        	],
        	[
        		'id_gedung'			=> 'CGA',
        		'id_kampus'			=> 'C',
        		'nama_gedung'		=> 'Gedung Asrama A Keb MGL',
        		'description'		=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
        	],
            [
                'id_gedung'         => 'CGB',
                'id_kampus'         => 'C',
                'nama_gedung'       => 'Gedung Asrama B Keb MGL',
                'description'       => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
            ],
            [
                'id_gedung'         => 'CGC',
                'id_kampus'         => 'C',
                'nama_gedung'       => 'Gedung Asrama C Keb MGL',
                'description'       => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
            ],
        	[
        		'id_gedung'			=> 'DGA',
        		'id_kampus'			=> 'D',
        		'nama_gedung'		=> 'Gedung Asrama Kep MGL',
        		'description'		=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
        	],
        	[
        		'id_gedung'			=> 'EGA',
        		'id_kampus'			=> 'E',
        		'nama_gedung'		=> 'Gedung Asrama PWT',
        		'description'		=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
        	],
        	[
        		'id_gedung'			=> 'FGA',
        		'id_kampus'			=> 'F',
        		'nama_gedung'		=> 'Gedung Asrama Blora',
        		'description'		=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
        	],
        ]);
    }
}
