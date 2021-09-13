<?php

use Illuminate\Database\Seeder;

class OrganisasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('organisasi')->insert([
        	[
        		'nama'=>'Departemen Ilmu Teknologi (IT)',
        		'parent_id'=>null
        	],
        	[
        		'nama'=>'Departemen Sumber Daya Manusia (SDM)',
        		'parent_id'=>null
        	],
        	[
        		'nama'=>'Departemen Keuangan',
        		'parent_id'=>null
			],
			[
        		'nama'=>'Departemen Pengelolaan Pelanggan',
        		'parent_id'=>null
        	],
        	[
        		'nama'=>'Departemen Pelayanan & Bisnis Wilayah 1',
        		'parent_id'=>null
        	],
        	[
        		'nama'=>'Departemen Pelayanan & Bisnis Wilayah 2',
        		'parent_id'=>null
			],
			[
        		'nama'=>'Departemen Proyek Manajemen',
        		'parent_id'=>null
        	],
        	[
        		'nama'=>'Departemen Asset',
        		'parent_id'=>null
        	],
        	[
        		'nama'=>'Departemen Produksi',
        		'parent_id'=>null
			],
			[
        		'nama'=>'Departemen Distribusi & NRW',
        		'parent_id'=>null
        	]
        ]);
    }
}
