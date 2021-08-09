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
            " data-aos="fade-up" data-aos-delay="200">
                <h1>Sekarang Semua Orang Bisa</h1>
                <h2>Berinvestasi di Properti</h2>
                <p>
                    Dengan teknologi, data dan skema crowdfunding, investasikan dana
                    kamu di berbagai aset properti mulai dari 1 juta rupiah. Dapatkan
                    imbal hasil jangka pendek dengan skema flipping dari Profitable
                </p>
                <div class="d-lg-flex">
                    <a href="#about" class="btn-pelajari scrollto">Pelajari Investasi</a>
                    <a href="/pendanaan" class="btn-mulai scrollto ml-3">Mulai Investasi</a>
                </div>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                <img src="<?= base_url() ?>/assets/images/illustration/banner-4.png" class="img-fluid animated" alt="">
            </div>
        </div>
    </div>
</section>

<section class="services">
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="card text-center h-100" style="width: 16rem;">
                    <br>
                    <center><img src="<?= base_url() ?>/assets/images/logo/Frame 4 (1).png" class="card-img-top" style="width: 5rem"></center>
                    <div class="card-body">
                        <h5 class="card-title">Mudah</h5>
                        <p class="card-text">Daftar dalam 5 menit & Invest di properti mulai dari Rp 1 juta</p>
                    </div>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="card text-center h-100" style="width: 16rem;">
                    <br>
                    <center><img src="<?= base_url() ?>/assets/images/logo/Frame 5.png" class="card-img-top" style="width: 5rem"></center>
                    <div class="card-body">
                        <h5 class="card-title">Transparan</h5>
                        <p class="card-text">Dapatkan update real time tanpa adanya Hidden fee</p>
                    </div>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="card text-center h-100" style="width: 16rem;">
                    <br>
                    <center><img src="<?= base_url() ?>/assets/images/logo/Frame 6.png" class="card-img-top" style="width: 5rem"></center>
                    <div class="card-body">
                        <h5 class="card-title">Terjamin</h5>
                        <p class="card-text">Pendanaan ke aset rumah yang sekaligus menjadi jaminan</p>
                    </div>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="card text-center h-100" style="width: 16rem;">
                    <br>
                    <center><img src="<?= base_url() ?>/assets/images/logo/Frame 7.png" class="card-img-top" style="width: 5rem"></center>
                    <div class="card-body">
                        <h5 class="card-title">Diverifikasi</h5>
                        <p class="card-text">Minimalisasi resiko dengan investasi di berbagai Properti</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="cara-section mt-5">
    <div class="container">
        <div class="row">
            <h3 class="px-3">Cara Berinvestasi di Provesty</h3>
        </div>
        <div class="row">
            <p class="px-3">Investasi Flipping Properti, dalam 3 langkah mudah</p>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-16">
                <img src="<?= base_url() ?>/assets/images/illustration/carainvestasi1.png" class="img-fluid">
                <center>
                    <p><b>Temukan </b> properti Flipping yang menarik untukmu. Pastikan kamu mengetahui risk dan return dari tiap pilihan.
                    </p>
                </center>
            </div>
            <div class="col-lg-4 col-md-12">
                <img src="<?= base_url() ?>/assets/images/illustration/carainvestasi2.png" class="img-fluid">
                <center>
                    <p><b>Investasikan </b> uangmu secara online. Kamu juga dapat menginvestasikan kembali hasil return dari portfolio sebelumnya.
                    </p>
                </center>
            </div>
            <div class="col-lg-4 col-md-12">
                <img src="<?= base_url() ?>/assets/images/illustration/carainvestasi3.png" class="img-fluid">
                <center>
                    <p><b>Dapatkan </b> imbal hasil jangka pendek dari proyek Flipping properti ketika properti tersebut terjual atau di akhir masa tenor.
                </center>
            </div>
        </div>
    </div>
</section>

<section class="jumlah-section mt-5">
    <div class="container">
        <div class="section-title text-center">
            <p>
                Memberikan kemudahaan dan aksesibilitas bagi setiap orang untuk bisa berinvestasi pada properti dengan menggunakan teknologi.
            </p>
        </div>
    </div>
</section>

<section id="team" class="testimoni-section mt-5">
    <div class="container">
        <div class="section-title text-center">
            <h2>Testimoni Investor</h2>
            <p>
                Silakan hubungi kontak kami yang terletak di bagian Footer jika masih terdapat pertanyaan
            </p>
        </div>
    </div>

    <div class="row slider team section-bg">
        <?php foreach($testimoni as $row): ?>
            <div class="member d-flex align-items-start">
            <div class=" pic">
                <img src="<?= base_url() ?>/assets/images/member/member-5.png" class="img-fluid">
            </div>
            <div class="member-info">
                <h4><?= $row['username']; ?></h4>
                <span>Mahasiswa</span>
                <p>
                    <?= $row['testimoni']; ?>
                </p>
            </div>
            </div>
        <?php endforeach; ?>
        <div class="member d-flex align-items-start">
            <div class="pic">
                <img src="<?= base_url() ?>/assets/images/member/member-1.png" class="img-fluid">
            </div>
            <div class="member-info">
                <h4>Gavriella</h4>
                <span>Karyawan</span>
                <p>
                    Investasi di Profitable terjangkau, prosesnya baik dan jelas. Memantau investasi juga sangat mudah karena diberikan dashboard.</p>
            </div>
        </div>

        <div class="member d-flex align-items-start">
            <div class="pic">
                <img src="<?= base_url() ?>/assets/images/member/member-2.png" class="img-fluid">
            </div>
            <div class="member-info">
                <h4>Fajri Muhammad</h4>
                <span>Pelajar</span>
                <p>
                    Profitable memudahkan millenial seperti saya untuk berinvestasi di bidang properti secara aman.
                </p>
            </div>
        </div>

        <div class="member d-flex align-items-start">
            <div class="pic">
                <img src="<?= base_url() ?>/assets/images/member/member-3.png" class="img-fluid">
            </div>
            <div class="member-info">
                <h4>Berlian Fauzan</h4>
                <span>Wiraswasta</span>
                <p>
                    Profitable mengakomodasi keinginan saya untuk berinvestasi di bidang properti dengan cara yang mudah</p>
            </div>
        </div>

        <div class="member d-flex align-items-start">
            <div class="pic">
                <img src="<?= base_url() ?>/assets/images/member/member-4.png" class="img-fluid">
            </div>
            <div class="member-info">
                <h4>Naufal Geraldi</h4>
                <span>Pelajar</span>
                <div class="line-testimoni"></div>
                <p>
                   Mudahnya investasi melalui Profitable membuat saya ingin bergabung menjadi member di Profitable</p>
            </div>
        </div>
    </div>

</section>

<?= $this->endSection(); ?>
