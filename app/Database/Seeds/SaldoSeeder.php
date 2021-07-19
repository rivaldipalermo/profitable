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
	  $singledata = ['user_id'=>'124', 'saldo'=>'50000', 'is_verified'=>true, 'created_at'=>$myTime, 'updated_at'=>$myTime];
	  array_push($data, $singledata);
	  $userids = array(123, 124, 125, 126, 127);
	  $saldos = array(50000, 150000, 300000, 100000);
	  foreach ($userids as &$ids){
		$myTime = new Time('now');
		$singledata['user_id'] = $ids;
		$singledata['saldo'] = $saldos[array_rand($saldos)];
		array_push($data, $singledata);
	  }
	  $this->db->table('Saldo')->insertBatch($data);
	}
}
