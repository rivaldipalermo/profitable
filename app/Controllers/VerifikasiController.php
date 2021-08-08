<?php

namespace App\Controllers;

use App\Models\TransaksiPencairanModel;
use App\Models\SaldoModel;
use App\Models\TopupPencairans;
use App\Models\TransaksiInvestasiModel;
use CodeIgniter\HTTP\Response;
use Config\Validation;
use CodeIgniter\Validation\Validation as ValidationValidation;

class VerifikasiController extends BaseController
{
    public function __construct()
    {
        $this->transaksiPencairanModel = new TransaksiPencairanModel();
        $this->SaldoModel = new SaldoModel();
        $this->TopupPencairans = new TopupPencairans();
        $this->TransaksiInvestasiModel = new TransaksiInvestasiModel();
    }

    public function index()
    {
        return view('welcome_message');
    }

    public function verifikasi_investasi()
    {
        $data = [
            'title' => 'Verifikasi Investasi',
            'investasi' => $this->TransaksiInvestasiModel->getVerifikasiInvestasi()
        ];
        return view('Admin/Verifikasi/verifikasi_investasi', $data);
    }

    public function terima_investasi($id)
    {
        $transaksi = $this->TransaksiInvestasiModel->where('id_transaksi_investasi', $id)->first();
        $slot_dibeli = $transaksi['slot'] * 1000000;
        $id_user = $transaksi['id_user'];

        $saldo = $this->SaldoModel->where('user_id', $id_user)->first();
        $saldo_kemarin = $saldo['saldo'];
        
        $saldo_sekarang = $saldo_kemarin - $slot_dibeli;

        $this->SaldoModel->update(
            $id_user,
            [
                'saldo' => $saldo_sekarang
            ]
        );

        $this->TransaksiInvestasiModel->update(
            $id,
            [
                'is_verified' => 1
            ]
        );
        session()->setFlashdata('pesan', 'Verifikasi Investasi Member Diterima');
        return redirect()->to('admin/verifikasi_investasi');
    }
    
    public function tolak_investasi($id)
    {
        $this->TransaksiInvestasiModel->update(
            $id,
            [
                'is_verified' => 2
            ]
        );
        session()->setFlashdata('pesan', 'Verifikasi Investasi Member Ditolak');
        return redirect()->to('admin/verifikasi_investasi');
    }

    public function verifikasi_pencairan()
    {
        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $user_id = $this->TopupPencairans->search($keyword);
        } else {
            $user_id = $this->TopupPencairans;
        }
        $page_akhir = $this->request->getVar('page_artikel') ? $this->request->getVar('page_artikel') : 1;

        $data = [
            'title' => 'Verifikasi Pencairan',
            'transaksi' => $user_id->paginate(25, 'artikel'),
            'pager' => $this->TopupPencairans->pager,
            'page_akhir' => $page_akhir
        ];
        return view('Admin/Verifikasi/verifikasi_pencairan', $data);
    }

    public function disetujui($id)
    {
        $user_id = intval(user_id());
        $table = $this->SaldoModel->getSaldo($user_id);
        $saldoadd = $table['saldo'];
        $tra = $this->transaksiPencairanModel->getTransaksiPencairan($id);
        $saldotrans = $tra['saldo'];

        $saldobaru = $saldoadd - $saldotrans;

        $this->SaldoModel->update(
            intval(user_id()),
            [
                'saldo' => $saldobaru
            ]
        );

        $this->transaksiPencairanModel->update(
            $id,
            [
                'status' => 'success'
            ]
        );
        return redirect()->to('admin/verifikasi_pencairan');
    }

    public function ditolak($id)
    {
        $this->transaksiPencairanModel->update(
            $id,
            [
                'status' => 'rejected'
            ]
        );
        return redirect()->to('admin/verifikasi_pencairan');
    }
}
