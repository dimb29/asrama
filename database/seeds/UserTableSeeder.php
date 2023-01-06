<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('users')->insert([
        	[
        		'id'                => '1',
                'name'				=> 'Admin',
        		'username'			=> 'admin',
        		'email'				=> 'admin@poltekkes-smg.ac.id',
        		'password'			=> Hash::make('admin123'),
                'telepon'           => '',
                'alamat_mhs'            => 'Jl. Trito Agung Pedalangan Banyumanik',
                'prodi'             => 'D III Keperawatan Semarang',
                'status'            => '1',
                // 'foto'              => '../../images/tools/poltekkes-logo.png',
        	],
            [
                'id'                => '2',
                'name'              => 'User',
                'username'          => 'user',
                'email'             => 'user@gmail.com',
                'password'          => Hash::make('user123'),
                'telepon'           => '',
                'alamat_mhs'            => 'Jl. Trito Agung Pedalangan Banyumanik',
                'prodi'             => 'D IV Keperawatan Semarang',
                'status'            => '1',
                // 'foto'              => '../../images/tools/poltekkes-logo.png',
            ],
        ]);
    }
}
