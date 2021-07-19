<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class TransaksiSeeder extends Seeder
{
	public function run()
	{
	  $data = [];
	  $myTime = new Time('now');
	  $singledata = ['user_id'=>'124', 'saldo'=>'50000', 'jenis_pembayaran'=>'Bank BNI' , 'created_at'=>$myTime, 'updated_at'=>$myTime];
	  array_push($data, $singledata);
	  $userids = array(123, 124, 125, 126, 127);
	  $saldos = array(50000, 150000, 100000, 25000, 200000);
	  $pembayarans = array('Bank BNI', 'Bank BRI', 'Bank Mandiri', 'Bank BTPN');
	  for($i = 1; $i<=100; $i++){
		$myTime = new Time('now');
		$singledata['user_id'] = $userids[array_rand($userids)];
		$singledata['jenis_pembayaran'] = $pembayarans[array_rand($pembayarans)];
		$singledata['saldo'] = $saldos[array_rand($saldos)];
		array_push($data, $singledata);
	  }
	  $this->db->table('Transaksi')->insertBatch($data);
	}
}
