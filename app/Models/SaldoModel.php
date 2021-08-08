<?php

namespace App\Models;

use CodeIgniter\Model;

class SaldoModel extends Model
{
    protected $table = 'Saldo';
    protected $useTimestamps = true;
    protected $primaryKey = 'user_id';
    protected $allowedFields = ['user_id', 'saldo', 'is_verified'];

    public function getSaldo($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }
        return $this->where(['user_id' => $id])->first();
    }
    
}

