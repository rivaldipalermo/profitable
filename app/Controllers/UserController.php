<?php

namespace App\Controllers;

use App\Models\TransaksiModel;
use App\Models\UriwayattModel;
use App\Models\BiodataModel;
use App\Models\BiosaveModel;
use App\Models\KotaModel;
use App\Models\Modeltopup;

use App\Models\BuktitopupModel;
use App\Models\SaldoModel;


class UserController extends BaseController
{



	public function __construct()
	{
		$this->transaksiModel = new TransaksiModel();
		$this->biodataModel = new BiodataModel();
		$this->kotaModel = new KotaModel();
		$this->Modeltopup = new Modeltopup();

		$this->biosaveModel = new BiosaveModel();
		$this->buktitopupModel = new BuktitopupModel();

		$this->uriwayattModel = new UriwayattModel();
		$this->saldoModel = new SaldoModel();
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
		return view('User/topup', $data);
	}
	public function halamantunggu()
	{
		$data = [
			'title' => 'topup'
		];
		return view('User/HalamanTunggu', $data);
	}
	public function topupsave()
	{

		$this->Modeltopup->save(
			[
				'nominal' => $this->request->getVar('nominal'),
				'nama_bank' => $this->request->getVar('nama_bank'),
				'nomor_kartu' => $this->request->getVar('nomor_kartu')
			]
		);
		return redirect()->to('/UserController/halamantunggu');
	}
	public function action()
	{
		if ($this->request->getVar('action')) {
			$action = $this->request->getVar('action');

			if ($action == 'get_kota') {
				$kotaModel = new kotaModel();

				$kotadata = $kotaModel->where('provinsi_id', $this->request->getVar('provinsi_id'))->findAll();

				echo json_encode($kotadata);
			}
		}
	}

	public function biosave()
	{
		$this->saldoModel->update(
			intval(user_id()),
			[
				'is_verified' => '1'
			]
		);
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
				// 'id' => 1,
				'user_id' => intval(user_id()),

			]
		);
		return redirect()->to('/user/u_riwayat_trans');
		return redirect()->to('/UserController/riwayat_tu');
	}


	public function biodata()
	{
		$data = [
			'title' => 'Biodata',
			'provinsi' => $this->biodataModel->getBiodata(),
			'kota' => $this->kotaModel->getKota()
		];
		return view('User/biodata', $data);
	}

	// public function buktisave()
	// {
	// 	$this->buktitopupModel->save(
	// 		[
	// 			'bukti_pembayaran' => $this->request->getVar('bukti'),    
	// 		]
	// 	);
	// 	return redirect()->to('/user/u_riwayat_trans');
	// 	return redirect()->to('/UserController/riwayat_tu');
	// }

	public function buktitopup()
	{
		$data = [
			'title' => 'Bukti Topup',
		];
		return view('User/buktitopup', $data);

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

	public function validtopup()
	{
		$user_id = intval(user_id());
		$table = $this->saldoModel->getSaldo($user_id);

		if ($table['is_verified'] == 1) {
			return redirect()->to('/UserController/topup');
		} else {
			return redirect()->to('/UserController/biodata');
		}
	}

	public function riwayat_tu()
	{
		$page_akhir = $this->request->getVar('page_riwayattu') ? $this->request->getVar('page_riwayattu') : 1;
		$transaksi = null;
		$user_id = intval(user_id());
		//dd($user_id);


		if ($this->request->getVar('dt_from')) {
			$transaksi = $this->uriwayattModel->where('user_id=' . $user_id . ' and created_at BETWEEN "' . date('Y-m-d', strtotime($this->request->getVar('dt_from'))) . '" and "' . date('Y-m-d', strtotime($this->request->getVar('dt_to'))) . '"')->paginate(5, 'riwayattu');
			//return dd($page_akhir);
		} else {
			$transaksi = $this->uriwayattModel->where(['user_id' => $user_id])->paginate(5, 'riwayattu');
		}


		$data = [
			'table' => $this->saldoModel->getSaldo($user_id),
			'title' => 'Transaksi',
			//'saldo' => $this->saldoModel->where(['user_id'=>127]),
			'transaksi' => $transaksi, //$this->uriwayattModel->where(['user_id'=>124])->paginate(5,'riwayattu'),//getRiwayattu(),
			'pager' => $this->uriwayattModel->pager,
			'page_akhir' => $page_akhir
		];


		return view('User/u_riwayat_trans', $data);
	}

	public function add_bukti($id)
	{
		$data = [
			'title' => 'Upload Bukti Pembayaran',
			'validation' => \Config\Services::validation(),
			'transaksi' => $this->transaksiModel->getTransaksi($id)
		];

		return view('User/u_upload_bukti', $data);
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
            
            return redirect()->to('/user/u_upload_bukti/' .($id))->withInput();
			//return redirect()->to('/User/u_upload_bukti')->withInput();
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

        
		//session()->setFlashdata('pesan', 'Data Berhasil ditambah');

		$page_akhir = $this->request->getVar('page_riwayattu') ? $this->request->getVar('page_riwayattu') : 1;

		$data = [
			'transaksi' => $this->uriwayattModel->paginate(5, 'artikel'), //getRiwayattu(),
			'pager' => $this->uriwayattModel->pager,
			'page_akhir' => $page_akhir
		];

		return redirect()->to('/user/u_riwayat_trans');
	}

	public function getInvoice($id)
	{
		$table = $this->transaksiModel->getTransaksi($id);
		$data = [
			'title' => 'Invoice Topup',
			'table' => $table,
		];
		return view('User/invoice', $data);
	}
	public function getHelp($id)
	{
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
