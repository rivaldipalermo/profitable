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
        $currentPage = $this->request->getVar('page_testimoni') ? $this->request->getVar('page_testimoni') : 1;
        $search = $this->request->getVar('search');
        if ($search) {
            $testimoni = $this->TestimoniModel->search($search);
        } else {
            $testimoni = $this->TestimoniModel;
        }

        $data = [
            'title' => 'Data Testimoni',
            'testimoni' => $testimoni->paginate(2, 'testimoni'),
            'pager' => $this->TestimoniModel->pager,
            'currentPage' => $currentPage
        ];
        return view('Admin/Testimoni/list_testimoni', $data);
    }
}
