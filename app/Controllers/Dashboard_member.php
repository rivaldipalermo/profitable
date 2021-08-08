<?php

namespace App\Controllers;

use App\Models\SaldoModel;
use App\Models\TransaksiInvestasiModel;

class Dashboard_member extends BaseController
{
	public function __construct()
	{
		$this->SaldoModel = new SaldoModel();
		$this->TransaksiInvestasiModel = new TransaksiInvestasiModel();
	}

	public function index()
	{
		$data = [
			'saldo' => $this->SaldoModel->getSaldo(user_id())
		];
		return view('member/index', $data);
	}

	public function porto()
	{
		$data = [
			'porto' => $this->TransaksiInvestasiModel->getPortofolio(user_id())
		];
		return view('member/porto', $data);
	}

	public function Transaksi()
	{
		return view('member/transaksi');
	}
}
