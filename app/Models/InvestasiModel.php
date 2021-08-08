<?php

namespace App\Models;

use CodeIgniter\Model;

class InvestasiModel extends Model
{
	protected $table                = 'investasi';
	protected $primaryKey           = 'id_investasi';
	protected $allowedFields        = ['id_investasi','id_properti','durasi_proyek','imbal_hasil','slot','sisa_slot','target'];

	// Dates
	protected $useTimestamps        = true;
	protected $dateFormat           = 'datetime';
	protected $createdField         = 'created_at';
	protected $updatedField         = 'updated_at';

	public function getInvestasi()
	{
        $builder = $this->db->table('investasi');
        $builder->select('*');
        $builder->select('investasi.id_investasi as `id_investasi`');
        $builder->join('properti', 'investasi.id_properti = properti.id');
        $query = $builder->get()->getResultArray();
        return $query;
	}
	
    // public function getInvestasi()
	// {
    //     $builder = $this->db->table('investasi');
    //     $builder->select('*');
    //     $builder->select('investasi.id_investasi as `id_investasi`');
    //     $builder->select('investasi.slot as `slot`, (transaksi_investasi.slot) as `slot_dibeli`');
    //     $builder->select('(transaksi_investasi.slot * 1000000) as `terkumpul`');
    //     $builder->join('properti', 'investasi.id_properti = properti.id');
    //     $builder->join('transaksi_investasi', 'investasi.id_investasi = transaksi_investasi.id_investasi', 'right outer');
    //     $builder->where('is_active', 1);
    //     $query = $builder->get()->getResultArray();
    //     return $query;
	// }

	public function getInvestasiDetail($id)
	{
        $builder = $this->db->table('investasi');
        $builder->select('*');
        $builder->select('investasi.id_investasi as `id_investasi`');
        $builder->select('investasi.slot as `slot`, sum(transaksi_investasi.slot) as `slot_dibeli`');
        $builder->select('sum(transaksi_investasi.slot * 1000000) as `terkumpul`');
        $builder->join('properti', 'investasi.id_properti = properti.id');
        $builder->join('transaksi_investasi', 'investasi.id_investasi = transaksi_investasi.id_investasi', 'left outer');
		$builder->where('investasi.id_investasi', $id);
        $query = $builder->get()->getResultArray();
        return $query;
	}

	public function pagianteInvestasi()
	{
		return $this->select()->join('properti', 'investasi.id_properti = properti.id')->paginate(10);
	}

	public function search($search)
    {
        return $this->table('investasi')->like('lokasi_properti', $search)->orLike('slot', $search)->orLike('target', $search);
    }

	public function custom_id(){
		$q = $this->db->query("SELECT MAX(RIGHT(id_investasi,4)) AS kd_max FROM investasi");
		$prefix = "PRO";
        $kd = "";
        if($q->getNumRows()>0){
            foreach($q->getResult() as $k){
                $tmp = ((int)$k->kd_max)+1;
                $kd = sprintf("%04s", $tmp);
            }
        }else{
            $kd = "0001";
        }
        return $prefix.$kd;
    }
}
