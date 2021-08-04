<?php

namespace App\Models;

use CodeIgniter\Model;

class BuktitopupModel extends Model
{
    protected $table      = 'buktitopup';
    protected $useTimestamps = true;
    protected $allowedFields = ['bukti'];

    public function getBuktitopup($id=false)
    {
        if ($id==false){
                return $this->findAll();
        }
        return $this->where(['id'=> $id])->first();
    }

}	
       