<?php

namespace App\Models;
use CodeIgniter\Model;

class TestimoniModel extends Model
{
    protected $table = 'testimoni_investor';
    protected $useTimestamps = true;
    protected $allowedFields = ['id', 'testimoni', 'id_user'];

    public function viewTesti()
    {
        // return $this->db->table('testimoni_investor')->get();

        $builder = $this->db->table('testimoni_investor');
        $builder->select('*');
        $builder->join('users', 'testimoni_investor.id_user = users.id');
        $query = $builder->get()->getResultArray();
        return $query;
    }
}
