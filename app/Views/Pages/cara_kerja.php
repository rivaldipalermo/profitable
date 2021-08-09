<?= $this->extend('Guest/g_layout') ?>
<?= $this->section('content'); ?>
<section class="hero-section d-flex align-items-center">
    <div class="container">
        <div class="row">
            <div class="
              col-lg-6
              d-flex
              flex-column
              justify-content-center
              pt-4 pt-lg-0
              order-2 order-lg-1
            ">
                <h3>Akses & Kemudahan Investasi Flipping properti melalui Profitable</h3>
                <h2>Profitable saat ini fokus pada investasi jangka pendek Flipping properti. Sederhananya adalah mencari properti di bawah harga pasar,
                    merenovasinya untuk menambah nilai jual, dan menjualnya kembali dalam waktu singkat.
                </h2>
                <div class="d-lg-flex">
                    <a href="#about" class="btn-pelajari scrollto">Pelajari Investasi</a>
                    <a href="/pendanaan" class="btn-mulai scrollto ml-3">Mulai Investasi</a>
                </div>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                <img src="<?= base_url() ?>/assets/images/illustration/banner-3.png" class="img-fluid animated" alt="">
            </div>
        </div>
    </div>
</section>

<section class="step-flipping">
    <div class="header">
        <center>
            <h3>Apa itu Flipping?</h3>
            <p>Flipping adalah jenis investasi jangka pendek di sektor Properti dengan 3 pendekatan : Beli, Renovasi, Jual</p>
        </center>
    </div>

    <div class="container">
        <div class="card-group">
            <div class="card text-center h-100" style="width: 18rem;">
                <br>
                <center><img src="<?= base_url() ?>/assets/images/logo/beli.png" class="card-img-top" style="width: 5rem"></center>
                <div class="card-body">
                    <h5 class="card-title">Beli</h5>
                    <p class="card-text">Partner Flipper Profitable mencari properti di daerah sekitar mereka, dengan lokasi yang bagus dan market yang tumbuh, diutamakan dengan harga di bawah pasar</p>
                </div>
            </div>


            <div class="card text-center h-100" style="width: 18rem;">
                <br>
                <center><img src="<?= base_url() ?>/assets/images/logo/renov.png" class="card-img-top" style="width: 5rem"></center>
                <div class="card-body">
                    <h5 class="card-title">Renovasi</h5>
                    <p class="card-text">Untuk meningkatkan harga jual, Flipper merenovasi bangunan tersebut, seperti mengecat ulang, memperbaiki atap atau menaikan bangunan menjadi 2 lantai</p>
                </div>
            </div>

            <div class="card text-center h-100" style="width: 18rem;">
                <br>
                <center><img src="<?= base_url() ?>/assets/images/logo/jual.png" class="card-img-top" style="width: 5rem"></center>
                <div class="card-body">
                    <h5 class="card-title">Jual</h5>
                    <p class="card-text">Setelah direnovasi, Flipper langsung menjual properti dengan harga lebih tinggi kepada pembeli baru (end user) dalam waktu singkat dan mengembalikan dana investor</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="skema-section">
    <div class="container">
        <div class="row">
            <h3 class="px-3">Skema Investasi</h3>
        </div>
        <div class="row">
            <p class="px-3">Terdapat 2 skema dalam berinvestasi di provesty yaitu skema pinjaman dan skema bagi hasil</p>
        </div>
        <div class="row mt-3">
            <div class="col-lg-5 col-md-12">
                <img src="<?= base_url() ?>/assets/images/illustration/skema.png" class="img-fluid">
            </div>
            <div class="col-lg-7">
                <div class="skema_swipe-btn">
                    <label for="margin" class="active">Skema Fix Margin
                        <input type="radio" id="margin" />
                    </label>
                    <label for="bagi">Skema Bagi Hasil
                        <input type="radio" id="bagi" />
                    </label>
                </div>
                <div class="margin_plans content active">
                    <div class="row">
                        <div class="col-1">
                            <ul>
                                <li>
                                    <i class="fas fa-circle"></i>
                                </li>
                            </ul>
                        </div>
                        <div class="col-10">
                            <p>Skema yang digunakan bisa jual beli (Murabahah) atau sewa (Ijarah), yaitu investor membeli propertinya terlebih dahulu dengan skema crowdfunding, dengan kepemilikan dikuasakan melalui badan hukum Provesty. Untuk skema sewa, unit ini kemudian disewakan ke flipper dan kemudian dibayarkan seluruh pokok dan marginnya ketika rumah terjual</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-1">
                            <ul>
                                <li>
                                    <i class="fas fa-circle"></i>
                                </li>
                            </ul>
                        </div>
                        <div class="col-10">
                            <p>Jangka waktu dapat kurang dari 6 bulan hingga 1 tahun</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-1">
                            <ul>
                                <li>
                                    <i class="fas fa-circle"></i>
                                </li>
                            </ul>
                        </div>
                        <div class="col-10">
                            <p>Imbal hasil mulai dari 15% - 30% per tahun</p>
                        </div>
                    </div>
                </div>
                <div class="bagi_plans content">
                    <div class="row">
                        <div class="col-1">
                            <ul>
                                <li>
                                    <i class="fas fa-circle"></i>
                                </li>
                            </ul>
                        </div>
                        <div class="col-10">
                            <p>
                                Skema yang digunakan adalah profit sharing. Yaitu investor dan Flipper mengumpulkan dana untuk membeli Properti. Merenovasinya. Kemudian menjualnya kembali. Margin keuntungan yang didapat dibagi antara investor dan Flipper sesuai persetujuan yang sudah disepakati.
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-1">
                            <ul>
                                <li>
                                    <i class="fas fa-circle"></i>
                                </li>
                            </ul>
                        </div>
                        <div class="col-10">
                            <p>
                                Skema bagi hasil lebih beresiko dari pinjaman, namun investor juga bisa mendapatkan imbal hasil lebih tinggi jika properti terjual lebih cepat
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-1">
                            <ul>
                                <li>
                                    <i class="fas fa-circle"></i>
                                </li>
                            </ul>
                        </div>
                        <div class="col-10">
                            <p>
                                Pastikan kamu mempelajari resiko di setiap investasi yang akan kamu lakukan
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>


<section class="struktur-section">
    <div class="container">
        <div class="row">
            <h3 class="px-3">Struktur Hukum Provesty</h3>
        </div>
        <div class="row mt-5">
            <div class="col-lg-7">
                <div class="row">
                    <div class="col-lg-1">
                        <h1>
                            1
                        </h1>
                    </div>
                    <div class="col-lg-11">
                        <h4>
                            Investor Crowdfunding
                        </h4>
                        <p>
                            Investor mengumpulkan dana & memberi kuasa pada Provesty
                        </p>
                    </div>

                </div>
                <div class="row mt-2">
                    <div class="col-lg-1">
                        <h1>
                            2
                        </h1>
                    </div>
                    <div class="col-lg-11">
                        <h4>
                            Penandatangan Perjanjian
                        </h4>
                        <p>
                            Pemilik Rumah & Provesty menandatangani perjanjian pinjaman atau bagi hasil
                        </p>
                    </div>

                </div>
                <div class="row mt-2">
                    <div class="col-lg-1">
                        <h1>
                            3
                        </h1>
                    </div>
                    <div class="col-lg-11">
                        <h4>
                            Beli, Renovasi & Jual Properti
                        </h4>
                        <p>
                            Dengan dana investor, Provesty membeli & merenovasi Properti untuk dijual dengan harga lebih tinggi
                        </p>
                    </div>

                </div>
                <div class="row mt-2">
                    <div class="col-lg-1">
                        <h1>
                            4
                        </h1>
                    </div>
                    <div class="col-lg-11">
                        <h4>
                            Notaris Mengikat Sertifikat
                        </h4>
                        <p>
                            Untuk proteksi investor, tim legal Provesty mengikat sertifikat Properti melalui notaris rekanan
                        </p>
                    </div>

                </div>
                <div class="row mt-2">
                    <div class="col-lg-1">
                        <h1>
                            5
                        </h1>
                    </div>
                    <div class="col-lg-11">
                        <h4>
                            Sertifikat disimpan Provesty
                        </h4>
                        <p>
                            Sertifikat yang sudah dijaminkan melalui badan hukum Provesty disimpan dalam deposit box yang aman
                        </p>
                    </div>

                </div>

            </div>
            <div class="col-lg-5 col-md-12">
                <img src="<?= base_url() ?>/assets/images/illustration/skema1.png" class="img-fluid ml-5">
            </div>
        </div>

    </div>
</section>

<section class="invest-section mt-5">
    <div class="container">
        <div class="row">
            <h3 class="px-3">Mengapa Berinvestasi di Provitable?</h3>
        </div>
        <div class="row mt-5">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-lg-2">
                                <img src="<?= base_url() ?>/assets/images/illustration/1.png" height="50" width="50">
                            </div>
                            <div class="col-lg-10">
                                <h4>
                                    Terjangkau
                                </h4>
                                <p>
                                    Dengan hanya 1 juta rupiah, kamu sudah bisa investasi di Properti dan menikmati keuntungan dan keamanan dari instrumen ini.
                                </p>
                            </div>

                        </div>
                        <div class="row mt-3">
                            <div class="col-lg-2">
                                <img src="<?= base_url() ?>/assets/images/illustration/2.png" height="50" width="50">
                            </div>
                            <div class="col-lg-10">
                                <h4>
                                    Return yang Menarik
                                </h4>
                                <p>
                                    Dengan skema Flipping Provesty (Beli-Renovasi-Jual), kamu dapat menikmati keuntungan investasi Properti jangka pendek 12-30% per tahun.
                                </p>
                            </div>

                        </div>
                        <div class="row mt-3">
                            <div class="col-lg-2">
                                <img src="<?= base_url() ?>/assets/images/illustration/3.png" height="50" width="50">
                            </div>
                            <div class="col-lg-10">
                                <h4>
                                    Diversifikasi Hanya dengan Sekali Klik
                                </h4>
                                <p>
                                    Untuk mengurangi Resiko, kamu bisa dengan mudah mendiversifikasi aset di berbagai Properti melalui platform kami. The eggs are safe in many baskets
                                </p>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-lg-2">
                                <img src="<?= base_url() ?>/assets/images/illustration/4.png" height="50" width="50">
                            </div>
                            <div class="col-lg-10">
                                <h4>
                                    Aman & Terpercaya
                                </h4>
                                <p>
                                    Kami melakukan due diligence ketat pada Properti dan partner flipper. Urusan legal, notaris dll juga ditangani tim kami yang berpengalaman
                                </p>
                            </div>

                        </div>
                        <div class="row mt-3">
                            <div class="col-lg-2">
                                <img src="<?= base_url() ?>/assets/images/illustration/5.png" height="50" width="50">
                            </div>
                            <div class="col-lg-10">
                                <h4>
                                    Di Ikat dengan Aset riil
                                </h4>
                                <p>
                                    Semua investasi diikat dengan asset riil properti tanah atau bangunan (tangible asset) sehingga resiko capital lost sangat kecil.
                                </p>
                            </div>

                        </div>
                        <div class="row mt-3">
                            <div class="col-lg-2">
                                <img src="<?= base_url() ?>/assets/images/illustration/6.png" height="50" width="50">
                            </div>
                            <div class="col-lg-10">
                                <h4>
                                    Berkontribusi di Sektor Rill
                                </h4>
                                <p>
                                    Investor mengumpulkan dana & memberi kuasa pada Provesty
                                </p>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
</section>

<section id="faq" class="faq section-bg mt-5">
    <div class="container" data-aos="fade-up">
        <div class="section-title text-center">
            <img src="<?= base_url() ?>/assets/images/illustration/faq.svg" class="img-fluid w-10 mb-3">
            <h2>Pertanyaan Yang Sering Ditanyakan</h2>
            <p>
                Silakan hubungi kontak kami yang terletak di bagian Footer jika masih terdapat pertanyaan
            </p>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <div class="faq-list">
                    <ul>
                        <?php $i = 1; ?>
                        <?php foreach ($faqCol1 as $f) : ?>
                            <li>
                                <a data-toggle="collapse" class="collapse" href="#faq_<?= $i ?>">
                                    <p class="question">
                                        <?= $f['pertanyaan']; ?>
                                    </p>
                                    <i class="fas fa-chevron-down icon-close"></i>
                                    <i class="fas fa-chevron-up icon-show"></i>
                                </a>
                                <div id="faq_<?= $i ?>" class="collapse" data-parent=".faq-list">
                                    <p>
                                        <?= $f['jawaban']; ?>
                                    </p>
                                </div>
                            </li>
                            <?php $i++ ?>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="faq-list">
                    <ul>
                        <?php $i = 5; ?>
                        <?php foreach ($faqCol2 as $f) : ?>
                            <li>
                                <a data-toggle="collapse" class="collapse" href="#faq_<?= $i ?>">
                                    <p class="question">
                                        <?= $f['pertanyaan']; ?>
                                    </p>
                                    <i class="fas fa-chevron-down icon-close"></i>
                                    <i class="fas fa-chevron-up icon-show"></i>
                                </a>
                                <div id="faq_<?= $i ?>" class="collapse" data-parent=".faq-list">
                                    <p>
                                        <?= $f['jawaban']; ?>
                                    </p>
                                </div>
                            </li>
                            <?php $i++ ?>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<?= $this->endSection(); ?>