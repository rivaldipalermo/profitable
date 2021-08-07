<?php

namespace App\Models;

use CodeIgniter\Model;

class TopupModels extends Model
{
    protected $table = 'transaksi';
    protected $useTimestamps = false;
    protected $allowedFields = ['user_id', 'saldo', 'jenis_pembayaran', 'bukti_pembayaran'];

    public function getRiwayat($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }
        return $this->where(['id' => $id])->first();
    }

    public function search($keyword = 'none')
    {
        return $this->table('transaksi')->like('user_id', $keyword);
    }

    public function approval($approve = 'none')
    {
        return $this->table('transaksi')->like('approval', $approve);
    }
}
