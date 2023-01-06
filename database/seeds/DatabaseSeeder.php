<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
        	UserTableSeeder::class,
        	AdminTableSeeder::class,
        	GedungTableSeeder::class,
        	ImagesTableSeeder::class,
        	KampusTableSeeder::class,
        	RuangTableSeeder::class,
            KamarTableSeeder::class,
        ]);
    }
}

