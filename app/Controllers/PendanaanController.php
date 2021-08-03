<?php

namespace App\Controllers;

class PendanaanController extends BaseController
{
    public function index()
    { {
            return view('welcome_message');
        }
    }

    public function pendanaan()
    {
        $data = [
            'title' => 'Proyek Pendanaan '
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
