<?php

namespace App\Controllers;
use App\Models\blogModel;
use Config\Validation;

class AdminBlog extends BaseController
{
	public function __construct()
    {
        $this->blogModel = new BlogModel();
    }
	public function index()
	{
		$data=[
            'title'=>"Blog Management",
    	    'adminblog'=>$this->blogModel->getAdminBlog()
        ];
        return view('Admin/viewBlog',$data);
	}
    public function add()
	{
		$data=[
			'title'=>'Blog Baru',
			'validation'=>\Config\Services::validation()
			];
			return view('Admin/addBlog',$data);
	}
    public function save()
	{
		if(!$this->validate(
			[
				'judul'=>[
					'rules'=>'required|is_unique[blog.judul]',
					'errors'=>[
						'required'=>'{field} Blog Tidak Boleh Kosong.',
						'is_unique'=>'{field} Blog Tidak Boleh Sama'
					]
	
					]
			]
			))
			{
				return redirect()->to('Admin/addBlog')->withInput();
			}
			$this->blogModel->save(
				[
					'judul'=>$this->request->getVar('judul'),
					'author'=>$this->request->getVar('author'),
					'isi'=>$this->request->getVar('isi'),
					'created_at'=>$this->request->getVar('created_at'),
					'updated_at'=>$this->request->getVar('updated_at'),
				]
			);
			session()->setFlashdata('pesan','Data Sudah Ditambahkan');
			return redirect()->to('/viewBlog');
	}
    public function edit()
	{
		return view('welcome_message');
	}
    public function delete()
	{
		return view('welcome_message');
	}
}
