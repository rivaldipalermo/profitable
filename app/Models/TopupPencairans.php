<?php

namespace App\Models;

use CodeIgniter\Model;

class TopupPencairans extends Model
{
    protected $table = 'Transaksi_Pencairan';
    protected $useTimestamps = false;
    protected $allowedFields = ['user_id', 'saldo'];

    public function getRiwayat($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }
        return $this->where(['id' => $id])->first();
    }

    public function search($keyword = 'none')
    {
        return $this->table('transaksi_pencairan')->like('user_id', $keyword);
    }

    public function approval($approve = 'none')
    {
        return $this->table('transaksi_pencairan')->like('approval', $approve);
    }
}
