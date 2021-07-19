<?php

//kotaModel.php

namespace App\Models;

use CodeIgniter\Model;

class KotaModel extends Model{

	protected $table = 'kota';

	protected $primaryKey = 'kota_id';

	protected $allowedFields = ['provinsi_id', 'kota_name'];

	public function getKota($id=false)
    {
        if ($id==false){
                return $this->findAll();
        }
        return $this->where(['id'=> $id])->first();
    }

}	

?>