<?php

namespace App\Controllers;

use CodeIgniter\HTTP\Response;
use Config\Validation;
use CodeIgniter\Validation\Validation as ValidationValidation;

class VerifikasiController extends BaseController
{

    public function index()
    {
        return view('welcome_message');
    }

    public function verifikasi_investasi()
    {
        $data = [
            'title' => "Verifikasi Investasi",
        ];
        return view('Admin/Verifikasi/verifikasi_investasi', $data);
    }

    public function verifikasi_pencairan()
    {
        $data = [
            'title' => "Verifikasi Pencairan",
        ];
        return view('Admin/Verifikasi/verifikasi_pencairan', $data);
    }
}
