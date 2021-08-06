<?php

namespace App\Models;

use CodeIgniter\Model;

class TransaksiInvestasiModel extends Model
{
	protected $table                = 'transaksi_investasi';
	protected $primaryKey           = 'id_transaksi_investasi';
	protected $allowedFields        = ['id_transaksi_investasi','id_investasi','id_properti','slot','profit','id_user'];

    protected $useAutoIncrement     = true;
	protected $useTimestamps        = true;
	protected $dateFormat           = 'datetime';
	protected $createdField         = 'created_at';
	protected $updatedField         = 'updated_at';

	public function danaTerkumpul()
	{
		$builder = $this->db->table('transaksi_investasi');
		$builder->select('sum(slot * 1000000) as `danaTerkumpul`');
		$query = $builder->get()->getResultArray();
		return $query;
	}
}
