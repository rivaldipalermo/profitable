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
                    <a href="#invest" class="btn-mulai scrollto ml-3">Mulai Investasi</a>
                </div>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                <img src="<?= base_url() ?>/assets/images/illustration/banner-3.png" class="img-fluid animated" alt="">
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