<?php

use Illuminate\Database\Seeder;

class ImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tb_images')->insert([
        	[
        		'url'		=> 'images/kamar1.jpg',
        		'id_parent'	=> 'AGA01101',
        	],
        	[
        		'url'		=> 'images/kamar2.jpg',
        		'id_parent'	=> 'AGA01101',
        	],
        	[
        		'url'		=> 'images/hotel1.jpg',
        		'id_parent'	=> 'AGA',
        	],
        	[
        		'url'		=> 'images/hotel2.jpg',
        		'id_parent'	=> 'AGA',
        	],
        ]);
    }
}
