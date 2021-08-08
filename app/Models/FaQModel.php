<?php

namespace App\Models;


use CodeIgniter\Model;

class FaQModel extends Model
{
    protected $table = 'faq';
    protected $useTimestamps = true;
    protected $allowedFields = ['pertanyaan', 'jawaban', 'tipe', 'created_at', 'updated_at'];

    public function viewFAQ()
    {
        return $this->db->table('faq')->get();
    }

    public function getFAQ($condition, $start = 0)
    {
        if ($condition == 'default' || $condition == 'frequently') {
            $query = $this->select(['pertanyaan', 'jawaban'])
                ->where('tipe', $condition)
                ->limit(4, $start)
                ->get();
        } else {
            $query = $this->select(['pertanyaan', 'jawaban'])
                ->where('kategori', $condition)
                ->get();
        }
        return $query->getResultArray();
        // $query = $this->db->query("SELECT pertanyaan, jawaban FROM faq LIMIT 4, $start WHERE tipe = $tipe")->get();

    }

    public function search($key)
    {
        return $this->table('faq')->like('pertanyaan', $key);
    }
}
