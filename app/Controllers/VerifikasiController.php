<?php

namespace App\Controllers;

use App\Models\TransaksiPencairanModel;
use App\Models\SaldoModel;
use App\Models\TopupPencairans;
use CodeIgniter\HTTP\Response;
use Config\Validation;
use CodeIgniter\Validation\Validation as ValidationValidation;

class VerifikasiController extends BaseController
{
    public function __construct()
    {
        $this->transaksiPencairanModel = new TransaksiPencairanModel();
        $this->saldoModel = new SaldoModel();
        $this->TopupPencairans = new TopupPencairans();
    }

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
        $table = $this->saldoModel->getSaldo($user_id);
        $saldoadd = $table['saldo'];
        $tra = $this->transaksiPencairanModel->getTransaksiPencairan($id);
        $saldotrans = $tra['saldo'];

        $saldobaru = $saldoadd - $saldotrans;

        $this->saldoModel->update(
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
