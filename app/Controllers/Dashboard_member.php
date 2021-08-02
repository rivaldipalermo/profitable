<?php

namespace App\Controllers;

class Dashboard_member extends BaseController
{
	public function index()
	{	
		return view('member/index');
	}

		public function porto()
	{
		return view('member/porto');
	}

		public function Transaksi()
	{
		return view('member/transaksi');
	}

}
