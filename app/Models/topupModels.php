<?php

namespace App\Models;

use CodeIgniter\Model;

class TopupModels extends Model
{
    protected $table = 'transaksi';
    protected $useTimestamps = false;
    protected $allowedFields = ['user_id', 'saldo', 'jenis_pembayaran', 'bukti_pembayaran'];

    public function getRiwayat($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }
        return $this->where(['id' => $id])->first();
    }

    public function search($keyword = 'none')
    {
        return $this->table('transaksi')->like('user_id', $keyword);
    }

    public function approval($approve = 'none')
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "profitable";

        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $sql = "INSERT INTO transaksi (firstname, lastname, email)
        VALUES ('John', 'Doe', 'john@example.com')";

        return $this->table('transaksi')->like('approval', $approve);
    }
}
