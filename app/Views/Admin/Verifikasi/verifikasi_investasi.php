<?= $this->extend('Admin/layout') ?>
<?= $this->section('content'); ?>
<div class="page-heading">
    <h3><?= $title; ?></h3>
</div>
<div class="row">
    <div class="row">
        <div class="col-md-9">
        </div>
        <!-- <div class="col-md-2">
            <form action="" method="GET">
                <div class="form-group">
                    <input type="text" class="form-control" id="basicInput" placeholder="search" name="search">
                </div>
        </div>
        <div class="col-md-1" style="margin-left: -15px;">
            <button type="submit" class="btn btn-primary" name="submit">Cari</button>
        </div> -->
        </form>
    </div>
</div>
<!-- Basic Tables start -->
<section class="section">
    <div class="row" id="basic-table">
        <div class="col-12 col-md-12">
            <?php if (session()->getFlashdata('pesan')) : ?>
                <div class="card-title">
                    <div class="alert alert-success" role="alert">
                        <?= session()->getFlashdata('pesan'); ?>
                    </div>
                </div>
            <?php endif; ?>
            <div class="card">
                <div class="card-content">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-lg table-striped">
                                <thead>
                                    <tr>
                                        <th width="5%">No</th>
                                        <th>Lokasi Properti</th>
                                        <th>Tanggal Investasi</th>
                                        <th>Slot</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $no = 1;
                                        foreach($investasi as $row) : 
                                    ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $row['lokasi_properti']; ?></td>
                                        <td><?= $row['created_at']; ?></td>
                                        <td><?= $row['slot']; ?></td>
                                        <td>
                                            <a href="/admin/terima_investasi/<?= $row['id_transaksi_investasi']; ?>" class="btn btn-primary">Diterima</a>
                                            <a href="/admin/tolak_investasi/<?= $row['id_transaksi_investasi']; ?>" class="btn btn-danger">Ditolak</a>
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
<?= $this->endSection(); ?>