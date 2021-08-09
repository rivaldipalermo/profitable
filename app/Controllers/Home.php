<?php

namespace App\Controllers;

use CodeIgniter\HTTP\Response;
use App\Models\FaQModel;
use App\Models\TestimoniModel;
use CodeIgniter\Validation\Validation as ValidationValidation;
use Config\Validation;

class Home extends BaseController
{
	public function __construct()
	{
		$this->FaQModel = new FaQModel();
		$this->TestimoniModel = new TestimoniModel();
	}

	public function index()
	{
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
