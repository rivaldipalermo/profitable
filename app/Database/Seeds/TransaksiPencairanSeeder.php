<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class TransaksiPencairanSeeder extends Seeder
{
    public function run()
    {
        $data = [];
        $myTime = new Time('now');
        $singledata = ['user_id' => '124', 'saldo' => '50000', 'created_at' => $myTime, 'updated_at' => $myTime];
        array_push($data, $singledata);
        $userids = array(123, 124, 125, 126, 127);
        $saldos = array(50000, 150000, 100000, 25000, 200000);
        for ($i = 1; $i <= 5; $i++) {
            $myTime = new Time('now');
            $singledata['user_id'] = $userids[array_rand($userids)];
            $singledata['saldo'] = $saldos[array_rand($saldos)];
            array_push($data, $singledata);
        }
        $this->db->table('Transaksi_Pencairan')->insertBatch($data);
    }
}
