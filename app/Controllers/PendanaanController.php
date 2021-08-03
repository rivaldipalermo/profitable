<?php

namespace App\Controllers;
use App\Models\PropertiModel;

class PendanaanController extends BaseController
{
    public function __construct()
    {
        $this->PropertiModel = new PropertiModel();    
    }

    public function index()
    {
        return view('welcome_message');
    }

    public function pendanaan()
    {
        $data = [
            'title' => 'Proyek Pendanaan',
            'properti' => $this->PropertiModel->findAll()
        ];
        return view('guest/g_pendanaan', $data);
    }

    public function investasi()
    {
        $data = [
            'title' => 'Proyek Pendanaan '
        ];
        return view('guest/g_investasi', $data);
    }
}
