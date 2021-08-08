<?php

namespace App\Models;

use CodeIgniter\Model;

class TransaksiPencairanModel extends Model
{
    protected $table = 'Transaksi_Pencairan';
    protected $useTimestamps = true;
    protected $allowedFields = ['id', 'user_id', 'saldo', 'status'];
    public function getTransaksiPencairan($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }
        return $this->where(['id' => $id])->first();
    }
}
