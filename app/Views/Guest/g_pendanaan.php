<?= $this->extend('Guest/g_layout') ?>
<?= $this->section('content'); ?>

<div class="portfolio-container">
    <section id="team" class="team section-bg">

        <div class="container">
            <div class="row mb-4">
                <div class="col-lg-4 text-center">
                    <h3><?= $jumlahProperti; ?></h3>
                    <p>Proyek</p>
                </div>
                <div class="col-lg-4 text-center">
                    <h3><?= $danaTerkumpul; ?></h3>
                    <p>Dana Terkumpul</p>
                </div>
                <div class="col-lg-4 text-center">
                    <h3><?= $jumlahInvestor; ?></h3>
                    <p>Investor Terdaftar</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <p class="text-center">Memberikan kemudahaan dan aksesibilitas bagi setiap orang untuk <br>bisa
                        berinvestasi pada properti dengan menggunakan teknologi.</p>
                </div>
            </div>
            <div class="section-title">
                <span>Proyek Pendanaan</span>
                <h2>Investasi</h2>
                <p></p>
            </div>

            <div class="mb-3">
                <form action="/front" method="POST">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Pencarian" name="kunci">
                        <button class="btn btn-outline-secondary" type="submit" id="button-addon2"
                            name="submit">Cari</button>
                    </div>
                </form>
            </div>

            <div class="row">
                    <?php foreach($investasi as $row): ?>
                    <div class="col-lg-4 mb-4">
                    <div class="card" style="height: 650px;">
                        <img src="<?= base_url()?>/assets/images/properti/<?= $row['foto_properti']; ?>" class="card-img-top" style="height: 200px;">
                        <div class="card-body">
                            <h5 class="card-title"><?= $row['lokasi_properti']; ?></h5>
                            <div class="row mb-3">
                                <div class="col-lg-12">
                                    <p>Terkumpul : 25%</p>
                                    <div class="progress" style="margin-top: -10px;">
                                        <div class="progress-bar" role="progressbar" style="width: 25%;"
                                            aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                                    </div>
                                </div>
                            </div>
                            <div class="row row-cols-2">
                                <div class="col">Imbal Hasil :<br>
                                    <p class="font-weight-bold">
                                        <?= "Rp " . number_format($row['harga_properti'],0,',','.'); ?></p>
                                </div>
                                <div class="col">Terkumpul :<br>
                                    <p class="font-weight-bold">
                                        <?= "Rp " . number_format($row['harga_properti'],0,',','.'); ?></p>
                                </div>
                            </div>
                            <div class="row row-cols-2">
                                <div class="col">Durasi Proyek :<br>
                                    <p class="font-weight-bold">12 bulan</p>
                                </div>
                                <div class="col">Target :<br>
                                    <p class="font-weight-bold">
                                        <?= "Rp " . number_format($row['harga_properti'],0,',','.'); ?></p>
                                </div>
                            </div>
                            <div class="row row-cols-2">
                                <div class="col">Resiko :<br>
                                    <p class="font-weight-bold">Menengah</p>
                                </div>
                                <div class="col">Minimum Investasi :<br>
                                    <p class="font-weight-bold">1.000.000</p>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <?php if (logged_in()) : ?>
                            <a href="/investasi/<?= $row['id_investasi']; ?>" class="btn btn-primary float-right">Investasi</a>
                            <?php else : ?>
                            <a href="/login" class="btn btn-primary float-right">Investasi</a>
                            <?php endif; ?>
                        </div>
                    </div>
                    </div>
                    <?php endforeach; ?>
            </div>


            <br>

            <nav>
                <ul class="pagination">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item active" aria-current="page">
                        <a class="page-link" href="#">2</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav>

        </div>
    </section>
</div>
<?= $this->endSection(); ?>