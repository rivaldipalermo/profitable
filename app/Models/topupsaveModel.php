<?php

//provinsiModel.php

namespace App\Models;

use CodeIgniter\Model;

class Modeltopup extends Model{

	protected $table = 'topup';

	protected $primaryKey = 'id';

	protected $allowedFields = ['nominal','nama_bank'];

	public function gettopup($id=false)
    {
        if ($id==false){
                return $this->findAll();
        }
        return $this->where(['id'=> $id])->first();
    }

}	

?>