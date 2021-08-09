<?php

namespace App\Controllers;

use App\Models\TransaksiModel;
use App\Models\SaldoModel;
use App\Models\PropertiModel;
use App\Models\TopupModels;

class AdminController extends BaseController
{
	public function __construct()
	{
		$this->transaksiModel = new TransaksiModel();
		$this->saldoModel = new SaldoModel();
		$this->TopupModels = new TopupModels();
	}

	public function index()
	{
		$this->PropertiModel = new PropertiModel();
		$data = [
			'title' => 'Dashboard',
			'jumlahProperti' => $this->PropertiModel->countAll()
		];
		return view('Admin/index', $data);
	}


	/* RIWAYAT TOPUP ADMIN */
	public function riwayatopup()
	{
		$keyword = $this->request->getVar('keyword');
		if ($keyword) {
			$user_id = $this->TopupModels->search($keyword);
		} else {
			$user_id = $this->TopupModels;
		}
		$page_akhir = $this->request->getVar('page_artikel') ? $this->request->getVar('page_artikel') : 1;

		$data = [
			'title' => 'Verifikasi Top-up',
			'transaksi' => $user_id->paginate(25, 'artikel'),
			'pager' => $this->TopupModels->pager,
			'page_akhir' => $page_akhir
		];
		return view('Admin/topupadmin', $data);
	}
	public function pengaturan()
	{
		$data = [
			'title' => 'My Profile Admin'
		];
		return view('Admin/pengaturan', $data);
	}


	public function reject($id)
	{
		$this->transaksiModel->update(
			$id,
			[
				'status' => 'rejected'
			]
		);
		return redirect()->to('AdminController/riwayatopup');
	}

	public function approve($id)
	{
		$user_id = intval(user_id());
		$table = $this->saldoModel->getSaldo($user_id);
		$saldoadd = $table['saldo'];
		$tra = $this->transaksiModel->getTransaksi($id);
		$saldotrans = $tra['saldo'];

		$saldobaru = $saldoadd + $saldotrans;

		$this->saldoModel->update(
			$tra['user_id'];
			[
				'saldo' => $saldobaru
			]
		);

		$this->transaksiModel->update(
			$id,
			[
				'status' => 'success'
			]
		);
		return redirect()->to('AdminController/riwayatopup');
	}
}
