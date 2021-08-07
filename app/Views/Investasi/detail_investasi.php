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
                                    <?= $row['imbal_hasil']; ?>%/bulan</p>
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
                    <h2 class="section-title">Flipping Rumah</h2>
                    <!--reward blocks-->
                    <div class="reward-block">
                        <h4 class="card-title"><?= $row['lokasi_properti']; ?></h4>
                        <div class="row mb-3">
                            <div class="col-lg-12">
                                <?php 
                                    $persentase = $row['slot_dibeli']/$row['slot']*100;
                                    $persentase = number_format((float)$persentase, 2, '.', '');
                                ?>
                                <p>Terkumpul : <?= $persentase; ?>%</p>
                                <div class="progress" style="margin-top: -10px;">
                                    <div class="progress-bar" role="progressbar" style="width: <?= $persentase; ?>%;"
                                        aria-valuenow="<?= $persentase; ?>" aria-valuemin="0" aria-valuemax="100">
                                        <?= $persentase; ?>%</div>
                                </div>
                            </div>
                        </div>
                        <div class="row row-cols-2">
                            <div class="col">Imbal Hasil :<br>
                                <p class="font-weight-bold">
                                    <?= $row['imbal_hasil']; ?>% / bulan</p>
                            </div>
                            <div class="col">Terkumpul :<br>
                                <p class="font-weight-bold">
                                    <?= "Rp " . number_format($row['terkumpul'],0,',','.'); ?></p>
                            </div>
                        </div>
                        <div class="row row-cols-2">
                            <div class="col">Durasi Proyek :<br>
                                <p class="font-weight-bold"><?= $row['durasi_proyek']; ?> bulan</p>
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
                    <form action="/pendanaan/store" method="POST">
                        <?= csrf_field(); ?>
                        <h1 class="section-title">Investasi Sekarang</h1>
                        <!--reward blocks-->
                        <div class="reward-block">
                            <div class="row row-cols-2">
                                <div class="col">
                                    Harga/Slot
                                </div>
                                <div class="col">
                                    <p class="font-weight-bold">Rp 1000000</p>
                                </div>
                            </div>
                            <div class="row row-cols-2">
                                <div class="col">
                                    Jumlah Slot
                                </div>
                                <div class="col">
                                    <input
                                        class="form-select <?= ($validation->hasError('slot')) ? 'is-invalid' : ''; ?> float-right"
                                        type="number" name="slot" id="slot" style="width: 100%; margin-top:-5px;"
                                        required><br>
                                    <input type="hidden" type="number" name="" id="target"
                                        value="<?= $row['target']; ?>">
                                    <input type="hidden" type="number" name="" id="total_slot"
                                        value="<?= $row['slot']; ?>">
                                    <input type="hidden" type="number" name="" id="imbal_hasil"
                                        value="<?= $row['imbal_hasil']; ?>">
                                    <input type="hidden" type="text" name="id_properti" id="id_properti"
                                        value="<?= $row['id']; ?>">
                                    <input type="hidden" type="text" name="id_investasi" id="id_investasi"
                                        value="<?= $row['id_investasi']; ?>">
                                </div>
                            </div>
                            <div class="row row-cols-2 mt-3 mb-1">
                                <div class="col">
                                    Nilai Investasi
                                </div>
                                <div class="col">
                                    <p class="font-weight-bold" id="nilai_investasi"></p>
                                </div>
                            </div>
                            <div class="row row-cols-2">
                                <div class="col mt-2">
                                    Profit
                                </div>
                                <div class="col">
                                    <input class="form-control" type="number" name="profit" id="profit"
                                        readonly="readonly" required>
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
                                    <input class="form-control" type="number" name="total" id="total"
                                        readonly="readonly" required><br>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-reward w-100">Invest</button>
                    </form>
                </div>
            </div>
        </div>

        <!--/sidebar-->
        <?php endforeach; ?>
    </div>
</div>
</div>

<script>
    $(document).ready(function () {
        $("#slot").keyup(function () {
            var slot = $("#slot").val();
            var target = $("#target").val();
            var imbal_hasil = $("#imbal_hasil").val();
            var total = $("#total");
            var total_slot = $("#total_slot").val();
            var profit = $("#profit");
            var count = slot * 1000000;
            var count_return = ((((target * imbal_hasil) / 100) / total_slot) * 12) * slot;
            $("#nilai_investasi").html('Rp ' + count);
            profit.val(count_return);
            total.val(count);
        });
    });
</script>

<?= $this->endSection(); ?>