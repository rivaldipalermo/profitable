<?php

namespace App\Controllers;
use App\Models\TransaksiModel;
use App\Models\UriwayattModel;		
use App\Models\BiodataModel;
use App\Models\BiosaveModel;
use App\Models\KotaModel;
use App\Models\Modeltopup;

use App\Models\BuktitopupModel;


class UserController extends BaseController
{
	
	
	
	public function __construct(){
		$this->transaksiModel = new TransaksiModel();
		$this->biodataModel = new BiodataModel();
		$this->kotaModel = new KotaModel();
		$this->Modeltopup = new Modeltopup();
		
		$this->biosaveModel = new BiosaveModel();
		$this->buktitopupModel = new BuktitopupModel();

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

	public function biosave()
	{
		$this->biosaveModel->save(
            [
                'nama' => $this->request->getVar('nama'),
                'panggilan' => $this->request->getVar('panggilan'),
                'tl' => $this->request->getVar('tl'),
                'phone' => $this->request->getVar('phone'), 
				'provinsi' => $this->request->getVar('provinsi'),
                'kota' => $this->request->getVar('kota'),
                'alamat' => $this->request->getVar('alamat'),
                'pekerjaan' => $this->request->getVar('pekerjaan'),     
				'sumber' => $this->request->getVar('sumber'), 
				'nbank' => $this->request->getVar('nbank'),
                'cabang' => $this->request->getVar('cabang'),
                'anama' => $this->request->getVar('anama'),     
				'norek' => $this->request->getVar('norek'),     
            ]
        );
		return redirect()->to('/UserController/biodata');
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

	public function buktisave()
	{
		$this->buktitopupModel->save(
			[
				'bukti' => $this->request->getVar('bukti'),    
			]
		);
		return redirect()->to('/UserController/biodata');
	}

	public function buktitopup()
	{
        $data = [
            'title' => 'Bukti Topup',
        ];
		return view('user/buktitopup', $data);

		// $this->buktitopupModel->save(
		// 	    [
		// 	        'bukti' => $this->request->getVar('bukti'),    
		// 	    ]
		// 	);
		// 	return redirect()->to('/UserController/biodata');
		
	}

	// public function buktisave()
    // {
    //     $this->buktitopupModel->save(
    //         [
    //             'bukti' => $this->request->getVar('bukti'),      
    //         ]
    //     );
    //         session()->setFlashdata('pesan','Data Berhasil Ditambahkan!');
    //         // return redirect()->to('/UserController/biodata');
	// 		return redirect()->to('/UserController/biodata')->withInput();
    // }
	
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
	public function getHelp($id){
		$table = $this->transaksiModel->getTransaksi($id);
		$data = [
			'title' => 'Bantuan Topup',
			'table' => $table,
		];
		return view('User/bantuan_topup', $data);
	}
	public function resiko()
	{
        $data = [
            'title' => 'Resiko'
        ];
		return view('User/u_resiko', $data);
	}
}
