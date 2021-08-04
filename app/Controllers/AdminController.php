<?php

namespace App\Controllers;

use App\Models\PropertiModel;
use App\Models\TopupModels;

class AdminController extends BaseController
{
	public function __construct()
	{

		$this->TopupModels = new TopupModels();
	}

	/*	public function index()
	{
		$this->PropertiModel = new PropertiModel();
		$data = [
			'title' => 'Dashboard',
			'jumlahProperti' => $this->PropertiModel->countAll()
		];
		return view('Admin/index', $data);
	}
*/

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
			'title' => 'Top-up History',
			'transaksi' => $user_id->paginate(25, 'artikel'),
			'pager' => $this->TopupModels->pager,
			'page_akhir' => $page_akhir
		];

		return view('Admin/topupadmin', $data);
	}
	public function delete($id)
	{
		$this->TopupModels->delete($id);
		session()->setFlashdata('pesan', 'Data berhasil dihapus!');
		return redirect()->to('AdminController/riwayatopup');
	}
}
