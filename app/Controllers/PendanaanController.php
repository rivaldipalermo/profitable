<?php

namespace App\Controllers;

use App\Models\InvestasiModel;
use App\Models\PropertiModel;
use App\Models\TransaksiModel;
use App\Models\TransaksiInvestasiModel;
use Myth\Auth\Models\UserModel;

class PendanaanController extends BaseController
{
    public function __construct()
    {
        $this->PropertiModel = new PropertiModel();  
        $this->InvestasiModel = new InvestasiModel() ;
        $this->TransaksiInvestasiModel = new TransaksiInvestasiModel();
        $this->UserModel = new UserModel();
    }

    public function index()
    {
        return view('welcome_message');
    }

    public function pendanaan()
    {
        $data = [
            'title' => 'Proyek Pendanaan',
            'investasi' => $this->InvestasiModel->getInvestasi(),
            'jumlahProperti' => $this->PropertiModel->countAll(),
            'danaTerkumpul' => $this->InvestasiModel->countAll(),
            'jumlahInvestor' => $this->UserModel->countAll(),
        ];
        return view('guest/g_pendanaan', $data);
    }

    public function investasi($id)
    {
        $data = [
            'title' => 'Proyek Pendanaan',
            'investasi' => $this->InvestasiModel->getInvestasiDetail($id)
        ];
        return view('investasi/detail_investasi', $data);
    }
}
