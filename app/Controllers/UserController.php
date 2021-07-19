<?php

namespace App\Controllers;

class UserController extends BaseController
{
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
}
