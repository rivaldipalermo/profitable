<?php

namespace App\Models;

use CodeIgniter\Model;

class TransaksiModel extends Model{
    protected $table = 'Transaksi';
    protected $useTimestamps = true;
    protected $allowedFields = ['id', 'user_id', 'saldo', 'jenis_pembayaran', 'bukti_pembayaran', 'status'];
    public function getTransaksi($id=false){
        if ($id == false){
            return $this->findAll();  
        }
        return $this->where(['id' => $id])->first();
    }
}