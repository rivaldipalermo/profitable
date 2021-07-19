<?php

namespace App\Controllers;
use App\Models\TransaksiModel;
use App\Models\UriwayattModel;

class UserController extends BaseController
{
	public function __construct(){
		$this->transaksiModel = new TransaksiModel();
		$this->uriwayattModel = new UriwayattModel();
	}
	
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
		$page_akhir = $this->request->getVar('page_artikel') ? $this->request->getVar('page_artikel') : 1;
		
		$data = [
            'title' => 'Transaksi',
			'transaksi' => $this->uriwayattModel->paginate(10,'artikel'),//getRiwayattu(),
			'pager' => $this->uriwayattModel->pager,  
            'page_akhir'=> $page_akhir
        ];

		

		return view('user/u_riwayat_trans', $data);
	}
	
	public function getInvoice($id){
		$table = $this->transaksiModel->getTransaksi($id);
		$data = [
			'title' => 'Invoice Topup',
			'table' => $table,
		];
		return view('User/invoice', $data);
	}
}
