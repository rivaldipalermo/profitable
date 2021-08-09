<?php

//provinsiModel.php

namespace App\Models;

use CodeIgniter\Model;

class BiodataModel extends Model{

	protected $table = 'provinsi';

	protected $primaryKey = 'provinsi_id';

	protected $allowedFields = ['provinsi_name'];

	public function getBiodata($id=false)
    {
        if ($id==false){
                return $this->findAll();
        }
        return $this->where(['id'=> $id])->first();
    }

}
