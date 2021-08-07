<?php

namespace App\Models;

use CodeIgniter\Model;

class TransaksiInvestasiModel extends Model
{
	protected $table                = 'transaksi_investasi';
	protected $primaryKey           = 'id_transaksi_investasi';
<<<<<<< HEAD
	protected $allowedFields        = ['id_transaksi_investasi', 'id_investasi', 'id_properti', 'slot', 'profit'];
=======
	protected $allowedFields        = ['id_transaksi_investasi','id_investasi','id_properti','slot','profit','id_user'];
>>>>>>> 9dd0d5b2dd7e55ee53602e214068707f396d227b

	protected $useAutoIncrement     = true;
	protected $useTimestamps        = true;
	protected $dateFormat           = 'datetime';
	protected $createdField         = 'created_at';
	protected $updatedField         = 'updated_at';
<<<<<<< HEAD
=======

	public function danaTerkumpul()
	{
		$builder = $this->db->table('transaksi_investasi');
		$builder->select('sum(slot * 1000000) as `danaTerkumpul`');
		$query = $builder->get()->getResultArray();
		return $query;
	}
>>>>>>> 9dd0d5b2dd7e55ee53602e214068707f396d227b
}
