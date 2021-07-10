<?php
namespace App\Models;

use CodeIgniter\Model;

class PropertiModel extends Model
{
    protected $table      = 'properti';
    protected $useTimestamps = true;
    protected $allowedFields = ['lokasi_properti', 'provinsi', 'kabupaten', 'luas_tanah', 'luas_bangunan', 'deskripsi_properti', 'dokumen_kepemilikan','harga_properti', 'foto_properti','created_at','updated_at'];

}