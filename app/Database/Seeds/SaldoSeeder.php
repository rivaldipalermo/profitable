<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class SaldoSeeder extends Seeder
{
	public function run()
	{
		$data = [];
		//   $data = [
		// 	[
		//       'user_id' => '123',
		// 	  'saldo'    => '300000',
		// 	  'is_verified' => true,
		// 	  'created_at' => $myTime,
		// 	  'updated_at' => $myTime,
		// 	]
		//   ];
		$myTime = new Time('now');
		$singledata = ['user_id' => '1', 'saldo' => 0, 'is_verified' => 0, 'created_at' => $myTime, 'updated_at' => $myTime];
		array_push($data, $singledata);
		$userids = array(2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30);
		$saldos = array(0);
		foreach ($userids as &$ids) {
			$myTime = new Time('now');
			$singledata['is_verified'] = 0;
			$singledata['user_id'] = $ids;
			$singledata['saldo'] = $saldos[array_rand($saldos)];
			array_push($data, $singledata);
		}
		// $userids = array(123, 124, 125, 126, 127);
		// $saldos = array(50000, 150000, 300000, 100000);
		// foreach ($userids as &$ids) {
		// 	$myTime = new Time('now');
		// 	$singledata['is_verified'] = 0;
		// 	$singledata['user_id'] = $ids;
		// 	$singledata['saldo'] = $saldos[array_rand($saldos)];
		// 	array_push($data, $singledata);
		// }
		$this->db->table('Saldo')->insertBatch($data);
	}
}
