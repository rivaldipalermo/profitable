<?php

namespace App\Controllers;
use App\Models\TransaksiModel;

class GuestController extends BaseController

{
    public function index()
	{
        $data = [
            'title' => 'Dashboard'
        ];
		return view('Guest/g_index', $data);
	}
    public function resiko()
	{
        $data = [
            'title' => 'Resiko'
        ];
		return view('Guest/g_resiko', $data);
	} 
 
}