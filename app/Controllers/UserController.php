<?php

namespace App\Controllers;
use App\Models\TransaksiModel;

class UserController extends BaseController
{
	public function index()
	{
        $data = [
            'title' => 'Dashboard'
        ];
		return view('user/u_index', $data);
	}

	public function biodata()
	{
        $data = [
            'title' => 'Dashboard'
        ];
		return view('user/biodata', $data);
	}
	
	public function riwayat_tu()
	{
        $data = [
            'title' => 'Transaksi'
        ];
		return view('user/u_riwayat_trans', $data);
	}
	public function __construct(){
		$this->transaksiModel = new TransaksiModel();
	}
	public function getInvoice($id){
		$table = $this->transaksiModel->getTransaksi($id);
		$data = [
			'title' => 'Invoice Topup',
			'table' => $table,
		];
		return view('User/invoice', $data);
	}
	public function resiko()
	{
        $data = [
            'title' => 'Resiko'
        ];
		return view('User/u_resiko', $data);
	}
}
