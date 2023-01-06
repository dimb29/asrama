<?php

use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('admins')->insert([
        	[
        		'name'				=> 'Admin',
        		'username'			=> 'admin',
        		'email'				=> 'admin@poltekkes-smg.ac.id',
        		'password'			=> Hash::make('admin12345'),
                // 'isAdmin'           => '1',
                // 'foto'              => '../../images/tools/poltekkes-logo.png',
        	],
            [
                'name'              => 'User',
                'username'          => 'user',
                'email'             => 'user@gmail.com',
                'password'          => Hash::make('user12345'),
                // 'isAdmin'           => '1',
                // 'foto'              => '../../images/tools/poltekkes-logo.png',
            ],
        ]);
    }
}
