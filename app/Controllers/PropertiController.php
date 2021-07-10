<?php

namespace App\Controllers;

use CodeIgniter\HTTP\Response;
use App\Models\PropertiModel;
use CodeIgniter\Validation\Validation as ValidationValidation;
use Config\Validation;

class PropertiController extends BaseController
{
    private $url = "https://api.rajaongkir.com/starter/";
    private $apiKey = "d58acb32de3bb67e7efaa6a1f30291b0";

    public function __construct()
    {
        $this->PropertiModel = new PropertiModel();
    }

	public function index()
	{
        $data = [
            'title' => 'Data Properti',
            'properti' => $this->PropertiModel->findAll()
        ];
		return view('Admin/Properti/list_properti', $data);
	}

    public function addProperti()
    {
        $provinsi = $this->daerahIndonesia('province');
        $data = [
            'title' => 'Tambah Properti',
            'validation' => \Config\Services::validation(),
            'provinsi'  =>  json_decode($provinsi)->rajaongkir->results
        ];
        return view('Admin/Properti/add_properti', $data);
    }

    public function editProperti($id)
    {
        $provinsi = $this->daerahIndonesia('province');
        $data = [
            'title' => 'Edit Properti',
            'properti'  => $this->PropertiModel->find($id),
            'validation' => \Config\Services::validation(),
            'provinsi' => json_decode($provinsi)->rajaongkir->results
        ];
        return view('Admin/Properti/edit_properti',$data);
    }

    public function getCity()
    {
        if($this->request->isAJAX())
        {
            $id_provinsi = $this->request->getGet('id_provinsi');
            $data = $this->daerahIndonesia('city', $id_provinsi);
            return $this->response->setJSON($data);
        }
    }

    private function daerahIndonesia($method, $id_provinsi=null)
    {
        $endPoint = $this->url.$method;

        if($id_provinsi!=null)
        {
            $endPoint = $endPoint."?province=".$id_provinsi;
        }

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => $endPoint,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
            "key: ".$this->apiKey
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        return $response;
    }

    public function storeProperti()
    {
        if(!$this->validate(
            [
                'lokasi_properti' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Lokasi properti harus diisi'
                    ]
                ],
                'provinsi' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Provinsi harus diisi'
                    ]
                ],
                'kabupaten' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Kabupaten harus diisi'
                    ]
                ],
                'dokumen_kepemilikan' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Dokumen Kepemilikan harus diisi'
                    ]
                ],
                'luas_tanah' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Luas Tanah harus diisi'
                    ]
                ],
                'luas_bangunan' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Luas Bangunan harus diisi'
                    ]
                ],
                'deskripsi_properti' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Deskripsi harus diisi'
                    ]
                ],
                'harga_properti' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Harga Properti harus diisi'
                    ]
                ]
            ]
        )){
            $validation = \Config\Services::validation();
            return redirect()->to('/admin/properti/add')->withInput()->with('validation', $validation);
        }

        $filegambar = $this->request->getFile('foto_properti');
        $namagambar = $filegambar->getRandomName();
        $filegambar->move('assets/images/properti/', $namagambar);

        $data = [
            'lokasi_properti' => $this->request->getVar('lokasi_properti'),
            'provinsi' => $this->request->getVar('provinsi'),
            'kabupaten' => $this->request->getVar('kabupaten'),
            'luas_tanah' => $this->request->getVar('luas_tanah'),
            'luas_bangunan' => $this->request->getVar('luas_bangunan'),
            'deskripsi_properti' => $this->request->getVar('deskripsi_properti'),
            'dokumen_kepemilikan' => $this->request->getVar('dokumen_kepemilikan'),
            'harga_properti' => $this->request->getVar('harga_properti'),
            'foto_properti' => $namagambar
        ];
        $this->PropertiModel->save($data);
        session()->setFlashdata('pesan', 'Properti Berhasil Ditambahkan');
        return redirect()->to('/admin/properti');
    }

    public function deleteProperti($id)
    {
        $properti = $this->PropertiModel->find($id);
        unlink('assets/images/properti/'.$properti['foto_properti']);
        $this->PropertiModel->delete($id);
        session()->setFlashdata('pesan', 'Data berhasil dihapus');
        return redirect()->to('/admin/properti');
    }

    public function updateProperti()
    {
        if(!$this->validate(
            [
                'lokasi_properti' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Lokasi properti harus diisi'
                    ]
                ],
                'provinsi' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Provinsi harus diisi'
                    ]
                ],
                'kabupaten' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Kabupaten harus diisi'
                    ]
                ],
                'dokumen_kepemilikan' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Dokumen Kepemilikan harus diisi'
                    ]
                ],
                'luas_tanah' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Luas Tanah harus diisi'
                    ]
                ],
                'luas_bangunan' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Luas Bangunan harus diisi'
                    ]
                ],
                'deskripsi_properti' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Deskripsi harus diisi'
                    ]
                ],
                'harga_properti' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Harga Properti harus diisi'
                    ]
                ]
            ]
        )){
            $validation = \Config\Services::validation();
            return redirect()->to('/admin/properti/add')->withInput()->with('validation', $validation);
        }

        $filegambar = $this->request->getFile('foto_properti');
        if($filegambar->getError() == 4) {
            $namagambar = $this->request->getVar('foto_properti_old');
        } else {
            $namagambar = $filegambar->getRandomName();
            $filegambar->move('assets/images/properti/', $namagambar);
            unlink('assets/images/properti/'.$this->request->getVar('foto_properti_old'));
        }

        $id = $this->request->getVar('id');
        $data = [
            'lokasi_properti' => $this->request->getVar('lokasi_properti'),
            'provinsi' => $this->request->getVar('provinsi'),
            'kabupaten' => $this->request->getVar('kabupaten'),
            'luas_tanah' => $this->request->getVar('luas_tanah'),
            'luas_bangunan' => $this->request->getVar('luas_bangunan'),
            'deskripsi_properti' => $this->request->getVar('deskripsi_properti'),
            'dokumen_kepemilikan' => $this->request->getVar('dokumen_kepemilikan'),
            'harga_properti' => $this->request->getVar('harga_properti'),
            'foto_properti' => $namagambar
        ];
        $this->PropertiModel->update($id,$data);
        session()->setFlashdata('pesan', 'Properti Berhasil Diubah');
        return redirect()->to('/admin/properti');
    }
}