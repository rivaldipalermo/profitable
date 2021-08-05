<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class FAQSeeder extends Seeder
{
	public function run()
	{
		$faq_data = [
			[
				'pertanyaan' 	=> 'Siapa saja yang bisa Invest di Profitable?',
				'jawaban'		=> 'Siapa saja yang memiliki KTP dapat berinvestasi di Profitable',
				'created_at' => Time::now(),
				'updated_at' => Time::now()
			],
			[
				'pertanyaan' 	=> 'Apakah Investasi di Profitable aman?',
				'jawaban'		=> 'Aman. Karena dana investasi di Profitable 100% dijadikan dalam bentuk aset TANAH dan BANGUNAN yang sudah di analisis ketat oleh tim Profitable yang berpengalaman. Namun secara umum setiap investasi pasti tetap memiliki resiko, lebih lengkapnya bisa dilihat di tab "resiko" di website ini.',
				'created_at' => Time::now(),
				'updated_at' => Time::now()
			],
			[
				'pertanyaan' 	=> 'Apa itu Flipping Properti?',
				'jawaban'		=> 'Flipping properti adalah jenis investasi di unit properti dengan jangka pendek. Flipper mencari properti di bawah harga pasar (dibuktikan dari data appraisal), mengumpulkan dana investor melalui crowdfunding pada platform Profitable, membelinya dengan harga di bawah pasar tersebut, merenovasinya jika diperlukan dan menjualnya kembali dalam waktu singkat. Margin keuntungan penjualan digunakan untuk mengembalikan dana investor.',
			],
			[
				'pertanyaan' 	=> 'Bagaimana Flipper bisa mendapatkan Properti Flip di bawah harga pasar?',
				'jawaban'		=> 'Properti untuk di Flip tidak harus di bawah harga pasar, yang terpenting adalah adanya margin keuntungan ketika dijual kembali. Namun Flipper kebanyakan mencari properti dibawah harga pasar biasanya dengan cara mencari properti yang bangunannya butuh direnovasi sehingga dijual murah, atau juga mendapatkan properti hasil lelang dari Bank atau dengan mencari pemilik rumah yang ingin rumahnya terjual cepat sehingga memberikan diskon kepada Flipper.',
				'created_at' => Time::now(),
				'updated_at' => Time::now()
			],
			[
				'pertanyaan' 	=> 'Apakah setiap Properti yang masuk ke Provesty langsung ditampilkan di website?',
				'jawaban'		=> 'Tujuan pembelian properti melalui Profitable ini adalah untuk investasi bukan untuk ditempati, karena akan dijual kembali (Flip) dan mendapat margin. Sehingga kepemilikan secara intrinsik adalah kepemilikan bersama seluruh investor. Namun secara legal, sertifikat rumah akan atas nama badan hukum Profitable atau Flipper sebagai kuasa/wakil dari para investor. Namun sertifikat properti akan dipegang oleh Tim Profitable melalui Notaris rekanan sehingga Flipper tidak memungkinkan untuk menjual secara sepihak tanpa persetujuan Tim Profitable.',
				'created_at' => Time::now(),
				'updated_at' => Time::now()
			],
			[
				'pertanyaan' 	=> 'Bagaimana dengan kepemilikan Properti?',
				'jawaban'		=> 'TIDAK. Provesty akan melakukan analisis dan due diligence untuk setiap properti yang masuk. Mulai dari legal, keuangan, resiko, kredibilitas flipper, track record dll. Provesty memiliki tim dan advisor yang sudah berpengalaman dalam dunia properti. Jika diperlukan Provesty juga akan menggunakan pihak ketiga untuk melakukan appraisal dari property tersebut. Sehingga setiap properti yang ditampilkan sudah melewati serangkaian panjang analisis untuk memastikan keamanan, return yang efisien dan resiko yang terukur untuk para investor.',
				'created_at' => Time::now(),
				'updated_at' => Time::now()
			],
			[
				'pertanyaan' 	=> 'Apakah saya bisa mencairkan sewaktu-waktu investasi saya?',
				'jawaban'		=> 'Untuk saat ini, pencairan hanya dapat dilakukan di akhir masa tenor (untuk pinjaman) atau ketika property tersebut terjual (untuk bagi hasil). Namun dengan skema Flipping, jangka waktu pengembalian ditargetkan hanya jangka pendek, kurang dari 6 bulan sampai 1 tahun. Kedepannya Provesty juga akan membuat fitur trading, yaitu investor dapat menjual investasinya ke investor lain melalui secondary market kapanpun investor mau (coming soon).',
				'created_at' => Time::now(),
				'updated_at' => Time::now()
			],
		];

		foreach ($faq_data as $data) {
			// insert semua data ke tabel
			$this->db->table('faq')->insert($data);
		}
	}
}
