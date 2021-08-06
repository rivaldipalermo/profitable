<?php

namespace App\Models;

use CodeIgniter\Model;

class BuktitopupModel extends Model
{
    protected $table      = 'transaksi';
    protected $useTimestamps = true;
    protected $allowedFields = ['user_id', 'saldo', 'jenis_pembayaran', 'status', 'bukti_pembayaran'];

    public function getBuktitopup($id=false)
    {
        if ($id==false){
                return $this->findAll();
        }
        return $this->where(['id'=> $id])->first();
    }

}	
       