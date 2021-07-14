<?php
namespace App\Models;

use CodeIgniter\Database\SQLite3\Table;
use CodeIgniter\Model;

class blogModel extends Model
{
    protected $table      = 'blog';
    protected $useTimestamps = true;
    protected $allowedFields=['judul','author','isi'];

    public function getAdminBlog($id = false)
    {
        if($id == false)
        {
            return $this->findAll();
        }
            return $this->where(['id'=>$id])->first();
    }
    public function search($search)
    {
        return $this->table('properti')->like('judul', $search)->orLike('author', $search);
    }
}