<?php

namespace App\Controllers;

use App\Models\InvestasiModel;
use App\Models\PropertiModel;
use App\Models\TransaksiModel;
use App\Models\SaldoModel;
use App\Models\TransaksiInvestasiModel;
use App\Models\TransaksiPencairanModel;
use Myth\Auth\Models\UserModel;

class PencairanController extends BaseController
{
    public function __construct()
    {
        $this->PropertiModel = new PropertiModel();
        $this->InvestasiModel = new InvestasiModel();
        $this->TransaksiInvestasiModel = new TransaksiInvestasiModel();
        $this->TransaksiPencairanModel = new TransaksiPencairanModel();
        $this->UserModel = new UserModel();
        $this->SaldoModel = new SaldoModel();
    }

    public function pencairan_saldo()
    {
        if(!$this->validate(
            [
                'saldo' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Saldo harus diisi'
                    ]
                ]
            ]
        )){
            $validation = \Config\Services::validation();
            return redirect()->to('/Dashboard_member/index');
        }

        $penarikan = $this->request->getVar('saldo');

        $saldo_sebelum = $this->SaldoModel->where('user_id', user_id())->first();
        $saldo_sebelum = $saldo_sebelum['saldo'];
        
        if($saldo_sebelum >= $penarikan) {
            $data = [
                'user_id'       => user_id(),
                'saldo'         => $penarikan,
                'status'        => 'pending',
            ];
            $this->TransaksiPencairanModel->insert($data);
            
            session()->setFlashdata('pesan', 'Penarikan sedang diproses oleh admin');
            return redirect()->to('/Dashboard_member/index');
        } else {
            session()->setFlashdata('pesan', 'Penarikan Gagal Diproses, Silahkan Coba Lagi');
            return redirect()->to('/Dashboard_member/index');
        }
    }
}
