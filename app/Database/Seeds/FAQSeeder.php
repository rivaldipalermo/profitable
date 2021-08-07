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
				'tipe'			=> 'frequently',
				'kategori'		=> 'none',
				'created_at' => Time::now(),
				'updated_at' => Time::now()
			],
			[
				'pertanyaan' 	=> 'Apakah Investasi di Profitable aman?',
				'jawaban'		=> 'Aman. Karena dana investasi di Profitable 100% dijadikan dalam bentuk aset TANAH dan BANGUNAN yang sudah di analisis ketat oleh tim Profitable yang berpengalaman. Namun secara umum setiap investasi pasti tetap memiliki resiko, lebih lengkapnya bisa dilihat di tab "resiko" di website ini.',
				'tipe'			=> 'frequently',
				'kategori'		=> 'none',
				'created_at' => Time::now(),
				'updated_at' => Time::now()
			],
			[
				'pertanyaan' 	=> 'Apa itu Flipping Properti?',
				'jawaban'		=> 'Flipping properti adalah jenis investasi di unit properti dengan jangka pendek. Flipper mencari properti di bawah harga pasar (dibuktikan dari data appraisal), mengumpulkan dana investor melalui crowdfunding pada platform Profitable, membelinya dengan harga di bawah pasar tersebut, merenovasinya jika diperlukan dan menjualnya kembali dalam waktu singkat. Margin keuntungan penjualan digunakan untuk mengembalikan dana investor.',
				'tipe'			=> 'frequently',
				'kategori'		=> 'none',
				'created_at' => Time::now(),
				'updated_at' => Time::now()
			],
			[
				'pertanyaan' 	=> 'Bagaimana Flipper bisa mendapatkan Properti Flip di bawah harga pasar?',
				'jawaban'		=> 'Properti untuk di Flip tidak harus di bawah harga pasar, yang terpenting adalah adanya margin keuntungan ketika dijual kembali. Namun Flipper kebanyakan mencari properti dibawah harga pasar biasanya dengan cara mencari properti yang bangunannya butuh direnovasi sehingga dijual murah, atau juga mendapatkan properti hasil lelang dari Bank atau dengan mencari pemilik rumah yang ingin rumahnya terjual cepat sehingga memberikan diskon kepada Flipper.',
				'tipe'			=> 'frequently',
				'kategori'		=> 'none',
				'created_at' => Time::now(),
				'updated_at' => Time::now()
			],
			[
				'pertanyaan' 	=> 'Apakah setiap Properti yang masuk ke Provesty langsung ditampilkan di website?',
				'jawaban'		=> 'Tujuan pembelian properti melalui Profitable ini adalah untuk investasi bukan untuk ditempati, karena akan dijual kembali (Flip) dan mendapat margin. Sehingga kepemilikan secara intrinsik adalah kepemilikan bersama seluruh investor. Namun secara legal, sertifikat rumah akan atas nama badan hukum Profitable atau Flipper sebagai kuasa/wakil dari para investor. Namun sertifikat properti akan dipegang oleh Tim Profitable melalui Notaris rekanan sehingga Flipper tidak memungkinkan untuk menjual secara sepihak tanpa persetujuan Tim Profitable.',
				'tipe'			=> 'frequently',
				'kategori'		=> 'none',
				'created_at' => Time::now(),
				'updated_at' => Time::now()
			],
			[
				'pertanyaan' 	=> 'Apakah saya bisa mencairkan sewaktu-waktu investasi saya?',
				'jawaban'		=> 'Untuk saat ini, pencairan hanya dapat dilakukan di akhir masa tenor (untuk pinjaman) atau ketika property tersebut terjual (untuk bagi hasil). Namun dengan skema Flipping, jangka waktu pengembalian ditargetkan hanya jangka pendek, kurang dari 6 bulan sampai 1 tahun. Kedepannya Provesty juga akan membuat fitur trading, yaitu investor dapat menjual investasinya ke investor lain melalui secondary market kapanpun investor mau (coming soon).',
				'tipe'			=> 'frequently',
				'kategori'		=> 'none',
				'created_at' => Time::now(),
				'updated_at' => Time::now()
			],
			[
				'pertanyaan' 	=> 'Apa itu Profitable?',
				'jawaban'		=> 'Profitable adalah platform crowdfunding peer-to-peer pertama di Indonesia untuk investasi di sektor properti. Saat ini Provesty fokus di investasi jangka pendek dengan skema Flipping (beli-renovasi-jual) bekerja sama dengan Flipper lokal.',
				'tipe'			=> 'frequently',
				'kategori'		=> 'profitable',
				'created_at' => Time::now(),
				'updated_at' => Time::now()
			],
			[
				'pertanyaan' 	=> 'Bagaimana cara kerja Profitable?',
				'jawaban'		=> 'Profitable menghubungkan crowd investor dengan flipper lokal (perorangan atau badan hukum). Flipper mencari properti dengan harga di bawah pasar, merenovasinya untuk meningkatkan harga jual, kemudian menjualnya kepada pembeli baru. Keuntungan dari penjualan digunakan untuk mengembalikan dana investor.',
				'tipe'			=> 'default',
				'kategori'		=> 'profitable',
				'created_at' => Time::now(),
				'updated_at' => Time::now()
			],
			[
				'pertanyaan' 	=> 'Bagaimana cara menjadi investor Profitable?',
				'jawaban'		=> 'Anda cukup register/login dengan menggunakan email ataupun menghubungkan ke akun facebook/gmail.',
				'tipe'			=> 'default',
				'kategori'		=> 'profitable',
				'created_at' => Time::now(),
				'updated_at' => Time::now()
			],
			[
				'pertanyaan' 	=> 'Bagaimana cara menjadi investor Profitable?',
				'jawaban'		=> 'Anda cukup register/login dengan menggunakan email ataupun menghubungkan ke akun facebook/gmail.',
				'tipe'			=> 'default',
				'kategori'		=> 'profitable',
				'created_at' => Time::now(),
				'updated_at' => Time::now()
			],
			[
				'pertanyaan' 	=> 'Apa saja jenis investasi properti yang ada di Profitable?',
				'jawaban'		=> 'Untuk saat ini Profitable berfokus di investasi Flipping jangka pendek karena resiko nya lebih kecil daripada pembiayaan proyek pembangunan ataupun pemberian dana talangan ke pemilik rumah.',
				'tipe'			=> 'default',
				'kategori'		=> 'investasi',
				'created_at' => Time::now(),
				'updated_at' => Time::now()
			],
			[
				'pertanyaan' 	=> 'Bagaimana dengan kepemilikan properti?',
				'jawaban'		=> 'Tujuan pembelian properti melalui Profitable ini adalah untuk investasi bukan untuk ditempati, karena akan dijual kembali (Flip) dan mendapat margin. Sehingga kepemilikan secara intrinsik adalah kepemilikan bersama seluruh investor. Namun secara legal, sertifikat rumah akan atas nama badan hukum Profitable atau Flipper sebagai kuasa/wakil dari para investor. Namun sertifikat properti akan dipegang oleh Tim Profitable melalui Notaris rekanan sehingga Flipper tidak memungkinkan untuk menjual secara sepihak tanpa persetujuan Tim Profitable.',
				'tipe'			=> 'frequently',
				'kategori'		=> 'investasi',
				'created_at' => Time::now(),
				'updated_at' => Time::now()
			],
			[
				'pertanyaan' 	=> 'Bagaimana skema pembagian keuntungan?',
				'jawaban'		=> 'Setiap proyek Flipping memiliki skema pembagian tersendiri yang biasanya tergantung jenis dan Flipper yang mengerjakan. Untuk detailnya bisa dilihat di detail masing-masing proyek.',
				'tipe'			=> 'default',
				'kategori'		=> 'skema',
				'created_at' => Time::now(),
				'updated_at' => Time::now()
			],
			[
				'pertanyaan' 	=> 'Apakah imbal hasil yang didapatkan investor berasal dari bunga?',
				'jawaban'		=> 'Tidak, Profitable menggunakan sistem bagi hasil atau jual beli/sewa sehingga imbal hasil yang didapatkan investor bukan berasal dari bunga. Setiap penyertaan modal dari investor akan digunakan untuk mengerjakan proyek Flipping yang mempunyai keuntungan dan tingkat resiko tertentu.',
				'tipe'			=> 'default',
				'kategori'		=> 'skema',
				'created_at' => Time::now(),
				'updated_at' => Time::now()
			],
			[
				'pertanyaan' 	=> 'Apakah akan ada surat perjanjian ketika saya menyertakan uang saya ke investasi?',
				'jawaban'		=> 'Akan ada MOU yang templatenya juga bisa ditemui di masing-masing halaman proyek di bagian dokumen. Setelah anda turut dalam investasi maka akan ada MOU yang digenerate secara otomatis khusus untuk Anda yang bisa anda temukan di halaman portfolio Anda.',
				'tipe'			=> 'default',
				'kategori'		=> 'skema',
				'created_at' => Time::now(),
				'updated_at' => Time::now()
			],
			[
				'pertanyaan' 	=> 'Apakah ada biaya dari Profitable?',
				'jawaban'		=> 'Saat ini Profitable akan men-charge operating fee sebesar 1-5% dari jumlah dana yang terkumpul dari setiap proyek yang fullfunded. Besar persentase bergantung pada masing-masing proyek. Fee ini tidak akan dipotong dari return yang akan didapat investor. Investor tetap akan menerima ROI sesuai dengan bagi hasil yang tertera pada masing-masing proyek. Jika suatu proyek full funded, namun karena satu dan lain hal proyek
				tersebut batal, maka uang investor akan dikembalikan 100% ke saldo wallet masing-masing investor, dan Profitable sama sekali tidak akan men-charge operating fee. Ketentuan ini dapat berubah sewaktu-waktu sesuai kebijakan Profitable.',
				'tipe'			=> 'default',
				'kategori'		=> 'biaya',
				'created_at' => Time::now(),
				'updated_at' => Time::now()
			],
			[
				'pertanyaan' 	=> 'Apakah ada biaya dari Profitable?',
				'jawaban'		=> 'Saat ini Profitable akan men-charge operating fee sebesar 1-5% dari jumlah dana yang terkumpul dari setiap proyek yang fullfunded. Besar persentase bergantung pada masing-masing proyek. Fee ini tidak akan dipotong dari return yang akan didapat investor. Investor tetap akan menerima ROI sesuai dengan bagi hasil yang tertera pada masing-masing proyek. Jika suatu proyek full funded, namun karena satu dan lain hal proyek
				tersebut batal, maka uang investor akan dikembalikan 100% ke saldo wallet masing-masing investor, dan Profitable sama sekali tidak akan men-charge operating fee. Ketentuan ini dapat berubah sewaktu-waktu sesuai kebijakan Profitable.',
				'tipe'			=> 'default',
				'kategori'		=> 'biaya',
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
