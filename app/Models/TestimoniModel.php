<?php

//provinsiModel.php

namespace App\Models;

use CodeIgniter\Model;

class TestimoniModel extends Model
{

    protected $table = 'testimoni_investor';
    protected $primaryKey = 'id_testimoni';
    protected $allowedFields = ['id_testimoni, testimoni, id_user, id_biodata'];

    // Dates
    protected $useAutoIncrement     = true;
    protected $useTimestamps        = true;
    protected $dateFormat           = 'datetime';
    protected $createdField         = 'created_at';
    protected $updatedField         = 'updated_at';

    public function getTestimoni()
    {
        return $this->db->table('testimoni_investor')
            ->join('biodata', 'testimoni_investor.id_biodata = biodata.id')
            ->join('users', 'testimoni_investor.id_user = users.id')
            ->where('testimoni_investor.id_user', 'biodata.user_id')
            ->get()->getResultArray();
    }

    public function search($search)
    {
        return $this->table('testimoni')->like('id_user', $search);
    }
}
