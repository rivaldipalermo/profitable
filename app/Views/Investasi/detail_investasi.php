<?= $this->extend('Guest/g_layout') ?>
<?= $this->section('content'); ?>

<!-- Gobal CSS -->

<link rel="stylesheet" href="<?= base_url(); ?>/assets/css/pendanaan/style.css" />
<!-- Template CSS -->


<div class="main-content">
    <div class="container">
        <div class="row">
            <?php foreach($investasi as $row): ?>
            <div class="content col-md-8 col-sm-12 col-xs-12">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="<?= base_url()?>/assets/images/properti/<?= $row['foto_properti']; ?>"
                            class="d-block w-100" alt="...">
                    </div>
                </div>

                <!--tab panes-->
                <div class="section-block">
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="about">
                            <div class="about-information">
                                <h1 class="section-title">Informasi</h1>
                                <p>Investasi pada salah satu unit rumah di Rumah di <span
                                        class="font-weight-bold"><?= $row['lokasi_properti']; ?></span>
                                    Proyek ini menggunakan skema Flipping. Investasi akan digunakan untuk keperluan
                                    membeli Aset apa adanya dengan harga sangat murah, direnovasi sampai siap huni,
                                    setelah itu dijual dengan margin tinggi. </p>
                            </div>
                            <hr>
                            <div class="about-information">
                                <p><span class="font-weight-bold">Investasi</span> :
                                    <?= "Rp " . number_format($row['target'],0,',','.'); ?></p>
                                <p><span class="font-weight-bold">Skema Investasi</span> : Jual-Beli-Sewa</p>
                                <p><span class="font-weight-bold">Estimasi Waktu</span> : <?= $row['durasi_proyek']; ?>
                                </p>
                                <p><span class="font-weight-bold">Estimasi Imbal Hasil</span> :
                                    <?= $row['imbal_hasil']; ?></p>
                                <p><span class="font-weight-bold">Lokasi</span> :
                                    <?= $row['lokasi_properti'].', '.$row['kabupaten'].', '.$row['provinsi']; ?></p>
                                <p><span class="font-weight-bold">Dokumen Kepemilikan</span> :
                                    <?= $row['dokumen_kepemilikan']; ?></p>
                                <p><span class="font-weight-bold">Minimal Investasi</span> :
                                    <?= "Rp " . number_format(1000000,0,',','.'); ?></p>
                                <hr>
                                <h5>Kontak</h5>
                                <p>Jika ada pertanyaan terkait properti dan skema Investasi silahkan hubungi kontak
                                    Profitable<br>Email : profitableapps21@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/tabs-->
            <!--/main content-->
            <!--sidebar-->
            <div class="content col-md-4 col-sm-12 col-xs-12">
                <div class="section-block">
                    <h1 class="section-title">Flipping Rumah</h1>
                    <!--reward blocks-->
                    <div class="reward-block">
                        <h5 class="card-title"><?= $row['lokasi_properti']; ?></h5>
                        <div class="row mb-3">
                            <div class="col-lg-12">
                                <p>Terkumpul : 25%</p>
                                <div class="progress" style="margin-top: -10px;">
                                    <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25"
                                        aria-valuemin="0" aria-valuemax="100">25%</div>
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
                            <div class="col">Minimum Invest :<br>
                                <p class="font-weight-bold"><?= "Rp " . number_format(1000000,0,',','.'); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section-block">
                    <form action="">
                    <h1 class="section-title">Investasi Sekarang</h1>
                    <!--reward blocks-->
                    <div class="reward-block">
                        <div class="row row-cols-2">
                            <div class="col">
                                Harga/Slot
                            </div>
                            <div class="col">
                                <p class="font-weight-bold">
                                    <?= "Rp " . number_format(1000000,0,',','.'); ?></p>
                            </div>
                        </div>
                        <div class="row row-cols-2">
                            <div class="col">
                                Jumlah Slot
                            </div>
                            <div class="col">
                                <input class="form-control" type="number" name="" id="" required><br>
                            </div>
                        </div>
                        <div class="row row-cols-2">
                            <div class="col">
                                Nilai Investasi
                            </div>
                            <div class="col">
                            <p class="font-weight-bold">
                                    <?= "Rp " . number_format(1000000,0,',','.'); ?></p>
                            </div>
                        </div>
                        <div class="row row-cols-2">
                            <div class="col">
                                Imbal Hasil
                            </div>
                            <div class="col">
                            <p class="font-weight-bold">
                                    <?= "Rp " . number_format(1000000,0,',','.'); ?></p>
                            </div>
                        </div>
                        <hr>
                        <div class="row row-cols-2">
                            <div class="col">
                                Saldo Anda
                            </div>
                            <div class="col">
                            <p class="font-weight-bold">
                                    <?= "Rp " . number_format(1000000,0,',','.'); ?></p>
                            </div>
                        </div>
                        <div class="row row-cols-2 mb-2">
                            <div class="col">
                                Total Yang Harus Dibayar
                            </div>
                            <div class="col">
                            <p class="font-weight-bold">
                                    <?= "Rp " . number_format(1000000,0,',','.'); ?></p>
                            </div>
                        </div>
                        <button type="submit" href="" class="btn btn-reward w-100">Invest</button>
                        </form>
                    </div>
                </div>
            </div>

            <!--/sidebar-->
            <?php endforeach; ?>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>