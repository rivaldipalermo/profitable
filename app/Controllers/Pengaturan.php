<?php

namespace App\Controllers;

use App\Models\BiodataModel;
use App\Models\BiosaveModel;
use App\Models\KotaModel;
use CodeIgniter\Validation\Validation as ValidationValidation;
use Config\Validation;

class Pengaturan extends BaseController
{
	private $url = "https://api.rajaongkir.com/starter/";
	private $apiKey = "d58acb32de3bb67e7efaa6a1f30291b0";

	public function __construct()
	{
		$this->biosaveModel = new BiosaveModel();
	}


	public function index()
	{
		$provinsi = $this->daerahIndonesia('province');
		$data = [
			'bio' => $this->biosaveModel->getBiosave(),
			'mb' => $this->biosaveModel->mbBiosave(),
			'validation' => \Config\Services::validation(),
			'provinsi'  =>  json_decode($provinsi)->rajaongkir->results
		];
		return view('pengaturan/index',$data);
	}

	private function daerahIndonesia($method, $id_provinsi = null)

	{

		$endPoint = $this->url . $method;

		if ($id_provinsi != null) {
			$endPoint = $endPoint . "?province=" . $id_provinsi;
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
				"key: " . $this->apiKey
			),
		));

		$response = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);

		return $response;
	}

	public function getCity()
	{
		if ($this->request->isAJAX()) {
			$id_provinsi = $this->request->getGet('id_provinsi');
			$data = $this->daerahIndonesia('city', $id_provinsi);
			return $this->response->setJSON($data);
		}
	}

	public function biosave()
	{
		$filegambar = $this->request->getFile('image');
		$namagambar = $filegambar->getRandomName();
		$filegambar->move('assets/images/member/', $namagambar);

		$this->biosaveModel->save(
			$data = [
				'nama' => $this->request->getVar('nama'),
				'panggilan' => $this->request->getVar('panggilan'),
				'tl' => $this->request->getVar('tl'),
				'phone' => $this->request->getVar('phone'),
				'provinsi' => $this->request->getVar('provinsi'),
				'kota' => $this->request->getVar('kota'),
				'alamat' => $this->request->getVar('alamat'),
				'pekerjaan' => $this->request->getVar('pekerjaan'),
				'sumber' => $this->request->getVar('sumber'),
				'id' => $this->request->getVar('id'),
				'user_id' => $this->request->getVar('user_id'),
				'nbank' => $this->request->getVar('nbank'),
				'cabang' => $this->request->getVar('cabang'),
				'anama' => $this->request->getVar('anama'),
				'norek' => $this->request->getVar('norek'),
				'image' => $namagambar
			]
		);
		return redirect()->to('/Pengaturan');    }


	}
