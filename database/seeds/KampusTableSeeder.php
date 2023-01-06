<?php

use Illuminate\Database\Seeder;

class KampusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ms_kampus')->insert([
        	[
        		'id'						=> 'A',
        		'nama_kampus'				=> 'Kampus I - Poltekkes Kemenkes Semarang',
        		'alamat'					=> 'Jl. Tirto Agung Pedalangan Banyumanik',
        		'kota'						=> 'Kota Semarang',
        		'kodepos'					=> '50268',
                'telepon'					=> '(024) 7460274',
                'email'              		=> 'admin@poltekkes-smg.ac.id',
        	],
        	[
        		'id'						=> 'B',
        		'nama_kampus'				=> 'Kampus II - Kendal',
        		'alamat'					=> 'Jl. Laut Patukang, Kec. Kendal',
        		'kota'						=> 'Kabupaten Kendal',
        		'kodepos'					=> '51311',
                'telepon'					=> '(024) 7460274',
                'email'              		=> 'admin@poltekkes-smg.ac.id',
        	],
            [
                'id'                        => 'C',
                'nama_kampus'               => 'Kampus V - Prodi Kebidanan Magelang',
                'alamat'                    => 'Jl. Perintis Kemerdekaan PO BOX 221',
                'kota'                      => 'Kota Magelang',
                'kodepos'                   => '56115',
                'telepon'                   => '0293-365185/363054',
                'email'                     => 'admin@poltekkes-smg.ac.id',
            ],
        	[
        		'id'						=> 'D',
        		'nama_kampus'				=> 'Kampus V - Prodi Keperawatan Magelang',
        		'alamat'					=> 'Jl. Perintis Kemerdekaan PO BOX 221',
        		'kota'						=> 'Kota Magelang',
        		'kodepos'					=> '56115',
                'telepon'					=> '0293-365185/363054',
                'email'              		=> 'admin@poltekkes-smg.ac.id',
        	],
        	[
        		'id'						=> 'E',
        		'nama_kampus'				=> 'Kampus VII - Prodi Kesling Kebidanan & TRR Purwokerto',
        		'alamat'					=> 'Jl. Raya Baturaden KM 12',
        		'kota'						=> 'Kota Purwokerto',
        		'kodepos'					=> '',
                'telepon'					=> '0281-681709',
                'email'              		=> 'admin@poltekkes-smg.ac.id',
        	],
        	[
        		'id'						=> 'F',
        		'nama_kampus'				=> 'Kampus IV - Prodi Keperawatan Blora',
        		'alamat'					=> 'Jl. A Yani PO BOX 2',
        		'kota'						=> 'Kabupaten Blora',
        		'kodepos'					=> '',
                'telepon'					=> '0296-5312290',
                'email'              		=> 'admin@poltekkes-smg.ac.id',
        	],
        ]);
    }
}
