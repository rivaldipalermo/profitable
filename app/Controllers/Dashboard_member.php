<?php

namespace App\Controllers;

use App\Models\SaldoModel;

class Dashboard_member extends BaseController
{
	public function __construct()
	{
		$this->SaldoModel = new SaldoModel();
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
		return view('member/porto');
	}

	public function Transaksi()
	{
		return view('member/transaksi');
	}
}
