<?php

namespace App\Controllers;

use CodeIgniter\HTTP\Response;
use App\Models\TestimoniModel;
use CodeIgniter\Validation\Validation as ValidationValidation;
use Config\Validation;

class TestimoniController extends BaseController
{
    public function __construct()
    {
        $this->TestimoniModel = new TestimoniModel();
    }

    public function index()
    {
        return view('Testimoni/index');
    }

    public function storeTesti()
    {
        $data = [
            'testimoni' => $this->request->getVar('testimoni'),
            'id_user' => $this->request->getVar('user_id'),
        ];
        
        $this->TestimoniModel->save($data);
        return redirect()->to('/');
    }
}
