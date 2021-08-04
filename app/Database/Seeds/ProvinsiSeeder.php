<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ProvinsiSeeder extends Seeder
{
	public function run()
	{
		$data = [];
		$singledata = ['provinsi_id'=>'11', 'provinsi_name'=> 'ACEH'];
		array_push($data, $singledata);
		$singledata = ['provinsi_id'=>'12', 'provinsi_name'=> 'SUMATERA UTARA'];
		array_push($data, $singledata);
		$singledata = ['provinsi_id'=>'13', 'provinsi_name'=> 'SUMATERA BARAT'];
		array_push($data, $singledata);
		$singledata = ['provinsi_id'=>'14', 'provinsi_name'=> 'RIAU'];
		array_push($data, $singledata);
		$singledata = ['provinsi_id'=>'15', 'provinsi_name'=> 'JAMBI'];
		array_push($data, $singledata);
		$singledata = ['provinsi_id'=>'16', 'provinsi_name'=> 'SUMATERA SELATAN'];
		array_push($data, $singledata);
		$singledata = ['provinsi_id'=>'17', 'provinsi_name'=> 'BENGKULU'];
		array_push($data, $singledata);
		$singledata = ['provinsi_id'=>'18', 'provinsi_name'=> 'LAMPUNG'];
		array_push($data, $singledata);
		$singledata = ['provinsi_id'=>'19', 'provinsi_name'=> 'KEPULAUAN BANGKA BELITUNG'];
		array_push($data, $singledata);
		$singledata = ['provinsi_id'=>'21', 'provinsi_name'=> 'KEPULAUAN RIAU'];
		array_push($data, $singledata);
		$singledata = ['provinsi_id'=>'31', 'provinsi_name'=> 'DKI JAKARTA'];
		array_push($data, $singledata);
		$singledata = ['provinsi_id'=>'32', 'provinsi_name'=> 'JAWA BARAT'];
		array_push($data, $singledata);
		$singledata = ['provinsi_id'=>'33', 'provinsi_name'=> 'JAWA TENGAH'];
		array_push($data, $singledata);
		$singledata = ['provinsi_id'=>'34', 'provinsi_name'=> 'DI YOGYAKARTA'];
		array_push($data, $singledata);
		$singledata = ['provinsi_id'=>'35', 'provinsi_name'=> 'JAWA TIMUR'];
		array_push($data, $singledata);
		$singledata = ['provinsi_id'=>'36', 'provinsi_name'=> 'BANTEN'];
		array_push($data, $singledata);
		$singledata = ['provinsi_id'=>'51', 'provinsi_name'=> 'BALI'];
		array_push($data, $singledata);
		$singledata = ['provinsi_id'=>'52', 'provinsi_name'=> 'NUSA TENGGARA BARAT'];
		array_push($data, $singledata);
		$singledata = ['provinsi_id'=>'53', 'provinsi_name'=> 'NUSA TENGGARA TIMUR'];
		array_push($data, $singledata);
		$singledata = ['provinsi_id'=>'61', 'provinsi_name'=> 'KALIMANTAN BARAT'];
		array_push($data, $singledata);
		$singledata = ['provinsi_id'=>'62', 'provinsi_name'=> 'KALIMANTAN TENGAH'];
		array_push($data, $singledata);
		$singledata = ['provinsi_id'=>'63', 'provinsi_name'=> 'KALIMANTAN SELATAN'];
		array_push($data, $singledata);
		$singledata = ['provinsi_id'=>'64', 'provinsi_name'=> 'KALIMANTAN TIMUR'];
		array_push($data, $singledata);
		$singledata = ['provinsi_id'=>'65', 'provinsi_name'=> 'KALIMANTAN UTARA'];
		array_push($data, $singledata);
		$singledata = ['provinsi_id'=>'71', 'provinsi_name'=> 'SULAWESI UTARA'];
		array_push($data, $singledata);
		$singledata = ['provinsi_id'=>'72', 'provinsi_name'=> 'SULAWESI TENGAH'];
		array_push($data, $singledata);
		$singledata = ['provinsi_id'=>'73', 'provinsi_name'=> 'SULAWESI SELATAN'];
		array_push($data, $singledata);
		$singledata = ['provinsi_id'=>'74', 'provinsi_name'=> 'SULAWESI TENGGARA'];
		array_push($data, $singledata);
		$singledata = ['provinsi_id'=>'75', 'provinsi_name'=> 'GORONTALO'];
		array_push($data, $singledata);
		$singledata = ['provinsi_id'=>'76', 'provinsi_name'=> 'SULAWESI BARAT'];
		array_push($data, $singledata);
		$singledata = ['provinsi_id'=>'81', 'provinsi_name'=> 'MALUKU'];
		array_push($data, $singledata);
		$singledata = ['provinsi_id'=>'82', 'provinsi_name'=> 'MALUKU UTARA'];
		array_push($data, $singledata);
		$singledata = ['provinsi_id'=>'91', 'provinsi_name'=> 'PAPUA BARAT'];
		array_push($data, $singledata);
		$singledata = ['provinsi_id'=>'94', 'provinsi_name'=> 'PAPUA'];
		array_push($data, $singledata);

		$this->db->table('provinsi')->insertBatch($data);
	}
}
