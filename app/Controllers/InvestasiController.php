<?php

namespace App\Controllers;

use App\Models\InvestasiModel;
use App\Models\PropertiModel;
use App\Models\TransaksiModel;
use App\Models\TransaksiInvestasiModel;
use Myth\Auth\Models\UserModel;

class InvestasiController extends BaseController
{
    public function __construct()
    {
        $this->PropertiModel = new PropertiModel();  
        $this->InvestasiModel = new InvestasiModel();
        $this->TransaksiInvestasiModel = new TransaksiInvestasiModel();
        $this->UserModel = new UserModel();
    }

    public function index()
    {
        $currentPage = $this->request->getVar('page_investasi') ? $this->request->getVar('page_investasi') : 1;
        $search = $this->request->getVar('search');
        if ($search) {
            $investasi = $this->InvestasiModel->search($search)->pagianteInvestasi();
        } else {
            $investasi = $this->InvestasiModel->pagianteInvestasi();
        }

        $data = [
            'title' => 'Data Master Investasi',
            'investasi' => $investasi,
            'pager' => $this->InvestasiModel->pager,
            'currentPage' => $currentPage
        ];
        return view('Admin/Investasi/list_investasi', $data);
    }

    public function detail($id)
    {
        $data = [
            'title' => 'Proyek Pendanaan',
            'investasi' => $this->InvestasiModel->getInvestasiDetail($id)
        ];
        return view('investasi/detail_investasi', $data);
    }

    public function addInvestasi()
    {
        $data = [
            'title' => 'Tambah Proyek Investasi',
            'properti' => $this->PropertiModel->findAll(),
            'validation' => \Config\Services::validation()
        ];
        return view('Admin/Investasi/add_investasi', $data);
    }

    public function storeInvestasi()
    {
        if(!$this->validate(
            [
                'id_properti' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Properti harus diisi'
                    ]
                ],
                'imbal_hasil' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Imbal harus diisi'
                    ]
                ]
            ]
        )){
            $validation = \Config\Services::validation();
            return redirect()->to('/admin/investasi/add')->withInput()->with('validation', $validation);
        }

        $idpro = $this->request->getVar('id_properti');

        $properti = $this->PropertiModel->where('id', $idpro)->first();
        $slot = $properti['harga_properti']/1000000;

        $data = [
            'id_investasi'  => $this->InvestasiModel->custom_id(),
            'id_properti'   => $this->request->getVar('id_properti'),
            'durasi_proyek' => 12,
            'imbal_hasil'   => $this->request->getVar('imbal_hasil'),
            'slot'          => $slot,
            'sisa_slot'     => $slot,
            'target'        => $properti['harga_properti']
        ];
        $this->InvestasiModel->insert($data);
        session()->setFlashdata('pesan', 'Data Investasi Berhasil Ditambahkan');
        return redirect()->to('/admin/investasi');
    }

    public function deleteinvestasi($id)
    {
        $this->InvestasiModel->delete($id);
        session()->setFlashdata('pesan', 'Data investasi berhasil dihapus');
        return redirect()->to('/admin/investasi');
    }
}
