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
		return view('user/u_index', $data);
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
		return view('user/biodata', $data);
	}
	
	public function riwayat_tu()
	{
		$page_akhir = $this->request->getVar('page_riwayattu') ? $this->request->getVar('page_riwayattu') : 1;
		$transaksi = null; 
		
		if ($this->request->getVar('dt_from')) {
			$transaksi = $this->uriwayattModel->where('created_at BETWEEN "'. date('Y-m-d', strtotime($this->request->getVar('dt_from'))). '" and "'. date('Y-m-d', strtotime($this->request->getVar('dt_to'))).'"')->paginate(5,'riwayattu');
			//return dd($page_akhir);
		} else {
			$transaksi = $this->uriwayattModel->paginate(5,'riwayattu');
		}
		

		$data = [
            'title' => 'Transaksi',
			'transaksi' => $transaksi,//$this->uriwayattModel->where(['user_id'=>124])->paginate(5,'riwayattu'),//getRiwayattu(),
			'pager' => $this->uriwayattModel->pager,  
            'page_akhir'=> $page_akhir
        ];

		
		return view('user/u_riwayat_trans', $data);
	}

	public function load_jtrans()
	{
		$jtrans = $_GET['jtrans'];
		$data = $this->db->get_where('profitable', ['saldo'=>$jtrans])->result();
		
	}

	public function add_bukti($id)
    {
        $data=[
            'title' => 'Upload Bukti Pembayaran',
			'validation'=> \Config\Services::validation(),
			'transaksi' => $this->transaksiModel->getTransaksi($id)
        ];
        
		return view('user/u_upload_bukti', $data);
    }

	
	public function update_bukti($id)
    {
		
        $active = $this->transaksiModel->getTransaksi($id);
	
        if (!$this->validate(
            [
                'bukti_pembayaran' => [
					'rules' => 'uploaded[bukti_pembayaran]|max_size[bukti_pembayaran,1024]|is_image[bukti_pembayaran]|mime_in[bukti_pembayaran,image/jpg,image/jpeg,image/png]',
					'errors' => [
						'uploaded' => 'pilih gambar terlebih dahulu',
						'max_size' => 'ukuran gambar terlalu besar',
						'is_image' => 'pilihan anda bukan format gambar',
						'mime_in' => ' pilihan anda bukan format gambar'
					]
					]
            ]
        )) {
            
            return redirect()->to('/user/u_upload_bukti/' . $this->request->getVar('user_id'))->withInput();
        }

		//$nama_gambar = $this->request->getVar('gambarLama');
        $file_gambar = $this->request->getFile('bukti_pembayaran');
        $nama_gambar = $file_gambar->getRandomName();
		$file_gambar->move('assets/images/user', $nama_gambar);
		//unlink('template/assets/img/' . $this->request->getVar('gambarLama'));

        $this->transaksiModel->update(
			$id,
            [
                'bukti_pembayaran' => $nama_gambar
            ]
        );

        session()->setFlashdata('pesan', 'Data Berhasil ditambah');

		$page_akhir = $this->request->getVar('page_artikel') ? $this->request->getVar('page_artikel') : 1;
		
		$data = [
			'transaksi' => $this->uriwayattModel->paginate(5,'artikel'),//getRiwayattu(),
			'pager' => $this->uriwayattModel->pager,  
        	'page_akhir'=> $page_akhir
        ];

        return redirect()->to('/user/u_riwayat_trans');
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
