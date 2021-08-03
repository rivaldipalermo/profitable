<?php

namespace App\Controllers;

use App\Models\FaQModel;

class Home extends BaseController
{
	protected $faqModel;
	public function __construct()
	{
		$this->faqModel = new FaQModel();
	}

	public function index()
	{
		return view('Pages/index');
	}

	public function caraKerja()
	{
		$data = [
			'faqCol1' => $this->faqModel->getFAQ(4, 0),
			'faqCol2' => $this->faqModel->getFAQ(4, 4)
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
		return view('Guest/Blog',$data);
	}
}
