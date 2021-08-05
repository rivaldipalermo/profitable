<?php

namespace App\Models;

use CodeIgniter\Model;

class InvestasiModel extends Model
{
	protected $table                = 'investasi';
	protected $primaryKey           = 'id_investasi';
	protected $allowedFields        = ['id_investasi','id_properti','durasi_proyek','imbal_balik','slot','target'];

	// Dates
	protected $useTimestamps        = true;
	protected $dateFormat           = 'datetime';
	protected $createdField         = 'created_at';
	protected $updatedField         = 'updated_at';

	public function getInvestasi()
	{
        $builder = $this->db->table('investasi');
        $builder->select('*');
        $builder->join('properti', 'investasi.id_properti = properti.id');
        $query = $builder->get()->getResultArray();
        return $query;
	}

	public function getInvestasiDetail($id)
	{
        $builder = $this->db->table('investasi');
        $builder->select('*');
        $builder->join('properti', 'investasi.id_properti = properti.id');
		$builder->where('id_investasi', $id);
        $query = $builder->get()->getResultArray();
        return $query;
	}
}
