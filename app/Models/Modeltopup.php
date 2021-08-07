<?php

//provinsiModel.php

namespace App\Models;

use CodeIgniter\Model;

class Modeltopup extends Model{

	protected $table = 'transaksi';

	protected $primaryKey = 'id';

	protected $allowedFields = ['user_id','saldo','jenis_pembayaran','bukti_pembayaran','status'];

	public function gettopup($id=false)
    {
        if ($id==false){
                return $this->findAll();
        }
        return $this->where(['id'=> $id])->first();
    }

}	

?>