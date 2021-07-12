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
        return view('Admin/Blog/viewBlog',$data);
	}
    public function add()
	{
		$data=[
			'title'=>'Blog Baru',
			'validation'=>\Config\Services::validation()
			];
			return view('Admin/Blog/addBlog',$data);
	}
    public function simpan()
	{
			$this->blogModel->save(
				[
					'judul'=>$this->request->getVar('judul'),
					'author'=>$this->request->getVar('author'),
					'isi'=>$this->request->getVar('isi'),
					'created_at'=>$this->request->getVar('created_at'),
					'updated_at'=>$this->request->getVar('updated_at'),
				]
			);
			return redirect()->to('Admin');
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
