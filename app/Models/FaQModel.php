<?php

namespace App\Models;


use CodeIgniter\Model;

class FaQModel extends Model
{
    protected $table = 'faq';
    protected $useTimestamps = true;
    protected $allowedFields = ['pertanyaan', 'jawaban', 'created_at', 'updated_at'];

    public function viewFAQ()
    {
        return $this->db->table('faq')->get();
    }

    public function getFAQ($total, $start)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('faq');

        return $builder->get($total, $start)->getResultArray();
    }

    public function search($key)
    {
        return $this->table('faq')->like('pertanyaan', $key);
    }
}
