<?php

namespace App\Controllers;
use CodeIgniter\HTTP\Response;
use App\Models\blogModel;
use Config\Validation;
use CodeIgniter\Validation\Validation as ValidationValidation;

class AdminBlog extends BaseController
{
	public function __construct()
    {
        $this->blogModel = new BlogModel();
    }
	public function index()
	{
		$currentPage = $this->request->getVar('page_blog') ? $this->request->getVar('page_blog') : 1;
        $search = $this->request->getVar('search');
        if ($search) {
            $blog = $this->blogModel->search($search);
        } else {
            $blog = $this->blogModel;
		}	
		$data=[
            'title'=>"Blog Management",
    	    'adminblog'=>$blog->paginate(2, 'blog'),
			'pager' => $this->blogModel->pager,
            'currentPage' => $currentPage
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
				]
			);
			return redirect()->to('admin/blog');
	}
    public function edit($id)
	{
		$data=[
			'title'=>'Edit Blog',
			'validation'=>\Config\Services::validation(),
			'adminblog'=>$this->blogModel->getAdminBlog($id)
			];
			return view('Admin/Blog/editBlog',$data);
	}
	public function update()
	{
			$this->blogModel->save(
				[
					'judul'=>$this->request->getVar('judul'),
					'author'=>$this->request->getVar('author'),
					'isi'=>$this->request->getVar('isi'),
				]
			);
			return redirect()->to('/admin/blog');
	}
    public function delete($id)
	{
		$this->blogModel->delete($id);
        session()->setFlashdata('pesan','Data Sudah Dihapus');

        return redirect()->to('/admin/blog');
	}
}
