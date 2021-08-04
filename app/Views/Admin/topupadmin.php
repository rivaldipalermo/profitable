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
<form action="" method="POST">
    <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Masukan Keyword Pencarian" name="keyword">
        <div class="input-group-append">
            <button class="btn btn-outline-secondary" type="submit" name="submit">Cari</button>
        </div>
    </div>
</form>
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
                                            <th>Nominal Top up</th>
                                            <th>Jenis Pembayaran</th>
                                            <th>Bukti Pembayaran</th>
                                            <th>Status</th>
                                            <th></th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <?php $i = 1 + (25 * ($page_akhir - 1)); ?>
                                            <?php foreach ($transaksi as $a) : ?>
                                                <th scope="row"><?= $i++; ?></th>
                                                <td><?= $a['user_id'];  ?></td>
                                                <td><?= $a['saldo'];  ?></td>
                                                <td><?= $a['jenis_pembayaran'];  ?></td>
                                                <td><?= $a['bukti_pembayaran'];  ?></td>
                                                <td><?= $a['status'];  ?></td>
                                                <td></td>
                                                <td><a href="/AdminController/delete/<?= $a['id']; ?>" class="btn btn-danger">delete</a>
                                                </td>

                                        </tr>
                                    <?php endforeach; ?>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?= $this->endSection(); ?>