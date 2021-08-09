<?php

namespace App\Controllers;

use App\Models\InvestasiModel;
use App\Models\PropertiModel;
use App\Models\TransaksiInvestasiModel;
use App\Models\FaQModel;
use App\Models\TestimoniModel;
use Myth\Auth\Models\UserModel;
use CodeIgniter\Validation\Validation as ValidationValidation;
use Config\Validation;

class Home extends BaseController
{
	public function __construct()
	{
		$this->FaQModel = new FaQModel();
	}

	public function index()
	{
		$data = [
			'jumlahProperti' => $this->PropertiModel->countAll(),
			'jumlahDana' => $this->TransaksiInvestasiModel->danaTerkumpul(),
			'jumlahInvestor' => $this->UserModel->countAll(),
			'testimoni' => $this->TestimoniModel->viewTesti(),
		];
		return view('Pages/index');
	}

	public function caraKerja()
	{

		$data = [
			'faqCol1' => $this->FaQModel->getFAQ('frequently', 0),
			'faqCol2' => $this->FaQModel->getFAQ('frequently', 4)
		];

		return view('Pages/cara_kerja', $data);
	}

	public function about()
	{
		$data = [
			'title' => 'tentang kami'
		];
		return view('Guest/About', $data);
	}

	public function blog()
	{
		$data = [
			'title' => 'blog'
		];
		return view('Guest/Blog', $data);
	}

	public function faq()
	{
		$data = [
			'title' 		=> 'FAQ',
			'faqProfitable' => $this->FaQModel->getFAQ('profitable'),
			'faqInvestasi' 	=> $this->FaQModel->getFAQ('investasi'),
			'faqSkema' 		=> $this->FaQModel->getFAQ('skema'),
			'faqBiaya' 		=> $this->FaQModel->getFAQ('biaya'),
		];

		return view('Guest/faq', $data);
	}
}
