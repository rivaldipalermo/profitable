<?php

namespace App\Models;

use CodeIgniter\Model;

class BiosaveModel extends Model
{
    protected $table      = 'biodata';
    protected $useTimestamps = true;
    protected $allowedFields = ['nama','panggilan','tl','phone','provinsi','kota','alamat','pekerjaan',
                                'sumber','nbank','cabang','anama','norek','id','user_id'];

    public function getBiosave($id=false)
    {
        if ($id==false){
                return $this->findAll();
        }
        return $this->where(['id'=> $id])->first();
    }

}	
       