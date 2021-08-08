<?= $this->extend('Admin/layout') ?>
<?= $this->section('content'); ?>

<div class="page-heading">
    <h3><?= $title; ?></h3>
</div>
<?php if (session()->getFlashdata('pesan')) : ?>
    <div class="alert alert-success" role="alert">
        <?= session()->getFlashdata('pesan'); ?>
    </div>
<?php endif; ?>
<!-- <form action="" method="POST">
    <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Masukan Pencarian " name="keyword">
        <div class="input-group-append">
            <button class="btn btn-outline-secondary" type="submit" name="submit">Cari</button>
        </div>
    </div>
</form> -->
<div class="page-content">
    <section class="row">
        <div class="col-12 col-lg-12">
            <div class="row">
                <div class="col-12 col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover table-lg">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>User ID</th>
                                            <th>Nominal Penarikan</th>
                                            <th>Status</th>
                                            <th></th>
                                            <th>Aksi</th>
                                            <th></th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <?php $i = 1 + (25 * ($page_akhir - 1)); ?>
                                            <?php foreach ($transaksi as $a) : ?>
                                                <th scope="row"><?= $i++; ?></th>
                                                <td><?= $a['user_id'];  ?></td>
                                                <td><?= "Rp " . number_format($a['saldo'], 0, ",", "."); ?></td>
                                                <td><?= $a['status'] == "pending" ? 'Menunggu Pencairan' : ($a['status'] == 'success' ? 'Pencairan Berhasil' : 'Pencairan Gagal'); ?>
                                                </td>

                                                <td></td>
                                                <form method="POST">
                                                    <?php if ($a['status'] == "pending") { ?>
                                                        <td> <a href="/admin/disetujui/<?= $a['id']; ?>" class="btn btn-success" value="disetujui">Disetujui
                                                        <td> <a href="/admin/ditolak/<?= $a['id']; ?>" class=" btn btn-danger" value="disetujui">Ditolak
                                                            <?php } else { ?>
                                                        <td>-</td>
                                                        <td></td>
                                                    <?php }    ?>

                                                </form>

                                        </tr>
                                    <?php endforeach; ?>
                                    </tbody>
                                </table>
                                </p>
                                <?= $pager->links('artikel', 'artikel_pagination'); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?= $this->endSection(); ?>