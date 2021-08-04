<?php

namespace App\Controllers;
use App\Models\TransaksiModel;
use App\Models\BiodataModel;
use App\Models\KotaModel;
use App\Models\Modeltopup;



class UserController extends BaseController
{
	
	
	
	public function __construct(){
		$this->transaksiModel = new TransaksiModel();
		$this->biodataModel = new BiodataModel();
		$this->kotaModel = new KotaModel();
		$this->Modeltopup = new Modeltopup();
		
	}

	public function index()
	{
        $data = [
            'title' => 'Dashboard'
        ];
		return view('user/u_index', $data);
	}
	public function topup()
	{
        $data = [
            'title' => 'topup',
			// 'topup' => $this-> Modeltopup -> gettopup()
        ];
		return view('user/topup', $data);
	}
	public function halamantunggu()
	{
        $data = [
            'title' => 'topup'
        ];
		return view('user/halamantunggu', $data);
	}
	public function topupsave()
	{
		
        $this->Modeltopup->save(
            [
                'nominal' => $this->request->getVar('nominal'),
                'nama_bank' => $this->request->getVar('nama_bank'),
                'nomor_kartu' => $this->request->getVar('nomor_kartu')
			]);
			return redirect()->to('/UserController/halamantunggu');
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
		return view('user/biodata', $data);
	}
	
	public function riwayat_tu()
	{
        $data = [
            'title' => 'Transaksi'
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
	public function resiko()
	{
        $data = [
            'title' => 'Resiko'
        ];
		return view('User/u_resiko', $data);
	}
}
