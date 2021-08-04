<?php

namespace App\Controllers;
use App\Models\TransaksiModel;
use App\Models\UriwayattModel;		
use App\Models\BiodataModel;
use App\Models\KotaModel;


class UserController extends BaseController
{
	
	
	
	public function __construct(){
		$this->transaksiModel = new TransaksiModel();
		$this->biodataModel = new BiodataModel();
		$this->kotaModel = new KotaModel();
		$this->uriwayattModel = new UriwayattModel();
	}

	public function index()
	{
        $data = [
            'title' => 'Dashboard'
        ];
		return view('User/u_index', $data);
	}
	public function topup()
	{
        $data = [
            'title' => 'topup'
        ];
		return view('user/topup', $data);
	}
	public function action()
	{
		if($this->request->getVar('action'))
		{
			$action = $this->request->getVar('action');

			if($action == 'get_kota')
			{
				$kotaModel = new kotaModel();

				$kotadata = $kotaModel->where('provinsi_id', $this->request->getVar('provinsi_id'))->findAll();

				echo json_encode($kotadata);
			}

			
		}
	}

	public function biodata()
	{

        $data = [
            'title' => 'Biodata',
			'provinsi' => $this-> biodataModel -> getBiodata(),
			'kota' => $this -> kotaModel -> getKota()
        ];
		return view('User/biodata', $data);
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

		

		return view('User/u_riwayat_trans', $data);
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
