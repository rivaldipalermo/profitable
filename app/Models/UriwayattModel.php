<?php

namespace App\Models;

use CodeIgniter\Model;

class UriwayattModel extends Model{
    protected $table = 'Transaksi';
    protected $useTimestamps = false;
    protected $allowedFields = ['user_id', 'saldo', 'jenis_pembayaran', 'status', 'bukti_pembayaran'];
    
    public function getRiwayattu($id=false)
    {
        if ($id==false){
                return $this->findAll();
        }
        return $this->where(['id'=> $id])->first();
    }

    public function getRiwayatbydate($firstdate, $enddate)
    {
        
        return $this->findAll();
    }
}