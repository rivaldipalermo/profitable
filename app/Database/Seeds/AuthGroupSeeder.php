<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class AuthGroupSeeder extends Seeder
{
	public function run()
	{
		$data = [
			[
				'name'			=> 'admin',
				'description'	=> 'admin'
			],
			[
				'name'			=> 'user',
				'description'	=> 'user'
			]
		];

		foreach ($data as $d) {
			// insert semua data ke tabel
			$this->db->table('auth_groups')->insert($d);
		}
	}
}
