<?= $this->extend('Admin/layout') ?>
<?= $this->section('content'); ?>
<div class="page-heading">
    <h3><?= $title; ?></h3>
</div>
<div class="row">
    <div class="col-md-3">
        <a href="/admin/investasi/add" class="btn btn-primary">Tambah Proyek Investasi</a>
    </div>
    <div class="row">
        <div class="col-md-9">
        </div>
        <div class="col-md-2">
            <form action="" method="GET">
                <div class="form-group">
                    <input type="text" class="form-control" id="basicInput" placeholder="search" name="search">
                </div>
        </div>
        <div class="col-md-1" style="margin-left: -15px;">
            <button type="submit" class="btn btn-primary" name="submit">Cari</button>
        </div>
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
                                        <th>ID</th>
                                        <th width="20%">Lokasi</th>
                                        <th>Durasi Proyek</th>
                                        <th>Imbah Hasil</th>
                                        <th>Slot</th>
                                        <th>Sisa Slot</th>
                                        <th width="18%">Target</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach($investasi as $row): ?>
                                    <tr>
                                        <td><?= $row['id_investasi']; ?></td>
                                        <td><?= $row['lokasi_properti']; ?></td>
                                        <td><?= $row['durasi_proyek']; ?> bulan</td>
                                        <td><?= $row['imbal_hasil']; ?></td>
                                        <td><?= $row['slot']; ?></td>
                                        <td><?= $row['sisa_slot']; ?></td>
                                        <td><?= "Rp " . number_format($row['target'],0,',','.'); ?></td>
                                        <td>
                                            <a class="btn btn-danger" href="<?= base_url(); ?>/admin/investasi/delete/<?= $row['id_investasi']; ?>"><i class="fas fa-trash-alt"></i></a>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                            <?= $pager->links('investasi', 'properti_pagination'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection(); ?>