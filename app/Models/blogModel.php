<?php
namespace App\Models;

use CodeIgniter\Database\SQLite3\Table;
use CodeIgniter\Model;

class blogModel extends Model
{
    protected $table      = 'blog';
    protected $useTimestamps = true;
    protected $allowedFields=['judul','author','isi','created_at','updated_at'];

    public function getAdminBlog($judul = false)
    {
        if($judul == false)
        {
            return $this->findAll();
        }
            return $this->where(['judul'=>$judul])->first();
    }
    // public function search($kunci)
    // {
    //    return $this->table('blog')->like('judul', $kunci);
    // }
}