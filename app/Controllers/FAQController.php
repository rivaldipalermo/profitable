<?php

namespace App\Controllers;

use CodeIgniter\HTTP\Response;
use App\Models\FaQModel;
use CodeIgniter\Validation\Validation as ValidationValidation;
use Config\Validation;

class FAQController extends BaseController
{

    public function __construct()
    {
        $this->FaQModel = new FaQModel();
    }

    public function index()
    {

        $currentPage = $this->request->getVar('page_faq') ? $this->request->getVar('page_faq') : 1;
        $search = $this->request->getVar('search');
        if ($search) {
            $faq = $this->FaQModel->search($search);
        } else {
            $faq = $this->FaQModel;
        }

        $data = [
            'title' => 'Data FAQ',
            'faq' => $faq->paginate(5, 'faq'),
            'pager' => $this->FaQModel->pager,
            'currentPage' => $currentPage
        ];
        return view('Admin/FAQ/list_faq', $data);
    }

    public function addFAQ()
    {

        $data = [
            'title' => 'Tambah FAQ',
            'validation' => \Config\Services::validation(),
        ];
        return view('Admin/FAQ/add_faq', $data);
    }

    public function editFAQ($id)
    {
        $data = [
            'title' => 'Edit FAQ',
            'faq'  => $this->FaQModel->find($id),
            'validation' => \Config\Services::validation(),
        ];
        return view('Admin/FAQ/edit_faq', $data);
    }


    public function storeFAQ()
    {
        if (!$this->validate(
            [
                'pertanyaan' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Pertanyaan harus diisi'
                    ]
                ],
                'tipe' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Tipe harus diisi'
                    ]
                ]
            ]
        )) {
            $validation = \Config\Services::validation();
            return redirect()->to('/admin/faq/add')->withInput()->with('validation', $validation);
        }


        $data = [
            'pertanyaan' => $this->request->getVar('pertanyaan'),
            'jawaban' => $this->request->getVar('jawaban'),
            'tipe' => $this->request->getVar('tipe'),
            'kategori' => $this->request->getVar('kategori'),
        ];

        $this->FaQModel->save($data);
        session()->setFlashdata('pesan', 'FAQ Berhasil Ditambahkan');
        return redirect()->to('/admin/faq');
    }

    public function deleteFAQ($id)
    {
        $this->FaQModel->delete($id);
        session()->setFlashdata('pesan', 'Data berhasil dihapus');
        return redirect()->to('/admin/faq');
    }

    public function updateFAQ($id)
    {
        $data = [
            'pertanyaan' => $this->request->getVar('pertanyaan'),
            'jawaban' => $this->request->getVar('jawaban'),
            'tipe' => $this->request->getVar('tipe'),
            'kategori' => $this->request->getVar('kategori'),
        ];

        $this->FaQModel->update($id, $data);
        session()->setFlashdata('pesan', 'FAQ nomor ' . $id . ' berhasil diubah');
        return redirect()->to('/admin/faq');
    }
}
