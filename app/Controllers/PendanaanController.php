<?php

namespace App\Controllers;

use App\Models\InvestasiModel;
use App\Models\PropertiModel;
use App\Models\TransaksiModel;
use App\Models\SaldoModel;
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
        $this->SaldoModel = new SaldoModel();
    }

    public function pendanaan()
    {
        $data = [
            'title' => 'Proyek Pendanaan',
            'investasi' => $this->InvestasiModel->getInvestasi(),
            'jumlahProperti' => $this->PropertiModel->countAll(),
            'jumlahDana' => $this->TransaksiInvestasiModel->danaTerkumpul(),
            'jumlahInvestor' => $this->UserModel->countAll(),
        ];
        return view('Guest/g_pendanaan', $data);
    }

    public function detail($id)
    {
        $data = [
            'title' => 'Proyek Pendanaan',
            'investasi' => $this->InvestasiModel->getInvestasiDetail($id),
            'saldo' => $this->SaldoModel->getSaldo(user_id()),
            'validation' => \Config\Services::validation()
        ];
        return view('Investasi/detail_investasi', $data);
    }

    public function storePendanaan()
    {
        if(!$this->validate(
            [
                'id_properti' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Properti harus diisi'
                    ]
                ],
                'slot' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Slot harus diisi'
                    ]
                ],
                'profit' => [
                    'rules' => 'required'
                ],
                'id_properti' => [
                    'rules' => 'required'
                ],
                'id_investasi' => [
                    'rules' => 'required'
                ]
            ]
        )){
            $validation = \Config\Services::validation();
            return redirect()->to('/pendanaan')->withInput()->with('validation', $validation);
        }

        $idInvestasi = $this->request->getVar('id_investasi');
        $slot_dibeli = $this->request->getVar('slot');

        $investasi = $this->InvestasiModel->where('id_investasi', $idInvestasi)->first();
        $id_investasi = $investasi['id_investasi'];
        $slot = $investasi['sisa_slot'];
        
        if($slot >= $slot_dibeli) {
            $data = [
                'slot'          => $slot_dibeli,
                'profit'        => $this->request->getVar('profit'),
                'id_properti'   => $this->request->getVar('id_properti'),
                'id_investasi'  => $this->request->getVar('id_investasi'),
                'id_user'       => user_id()
            ];
            $this->TransaksiInvestasiModel->insert($data);
            
            //pengurangan slot
            $prosesInvestasi = [
                'sisa_slot'  => $slot - $slot_dibeli
            ];
            $this->InvestasiModel->update($id_investasi, $prosesInvestasi);
            session()->setFlashdata('pesan', 'Investasi Flipping anda sedang diverifikasi oleh admin harap menunggu, Salam Profit :)');
            return redirect()->to('/pendanaan');
        } else {
            session()->setFlashdata('pesanDanger', 'Pendanaan Gagal Diproses, Silahkan Coba Lagi');
            return redirect()->to('/pendanaan');
        }
    }
}
