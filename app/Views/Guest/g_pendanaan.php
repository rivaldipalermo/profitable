<?= $this->extend('Guest/g_layout') ?>
<?= $this->section('content'); ?>

<div class="portfolio-container">
    <section id="team" class="team section-bg">

        <div class="container">

            <div class="section-title">
                <span>Proyek Pendanaan</span>
                <h2>Investasi</h2>
                <p></p>
            </div>

            <div class="mb-3">
                <form action="/front" method="POST">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Pencarian" name="kunci">
                        <button class="btn btn-outline-secondary" type="submit" id="button-addon2" name="submit">Cari</button>
                    </div>
                </form>
            </div>


            <div class="row row-cols-1 row-cols-md-3 g-4">
                <?php foreach ($properti as $row) : ?>
                    <div class="col">
                        <div class="card h-100">
                            <img src="<?= base_url() ?>/assets/images/properti/<?= $row['foto_properti']; ?>" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title"><?= $row['lokasi_properti']; ?></h5>
                                <div class="row row-cols-2">
                                    <div class="col">Harga : <?= $row['harga_properti']; ?></div>
                                    <div class="col">Deskripsi : <?= $row['deskripsi_properti']; ?></div>
                                </div>
                                <div class="row row-cols-2">
                                    <div class="col">Imba Hasil :</div>
                                    <div class="col">Terkumpul :</div>
                                </div>
                                <div class="row row-cols-2">
                                    <div class="col">Resiko :</div>
                                    <div class="col">Minimum Investasi :</div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <a href="/guest/investasi" class="btn btn-primary">Investasi</a>
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