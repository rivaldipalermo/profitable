<?= $this->extend('Admin/layout') ?>
<?= $this->section('content'); ?>
<div class="page-heading">
    <h3><?= $title; ?></h3>
</div>
<div class="row">
    <div class="col-md-3">
        <a href="/admin/properti/add" class="btn btn-primary">Tambah Properti</a>
    </div>
    <div class="row">
        <div class="col-md-9"></div>
        <div class="col-md-2">
            <div class="form-group">
                <input type="text" class="form-control" id="basicInput" placeholder="search">
            </div>
        </div>
        <div class="col-md-1" style="margin-left: -15px;">
            <button type="button" class="btn btn-primary">Cari</button>
        </div>
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
                                        <th width="20%">Lokasi</th>
                                        <th>Kabupaten</th>
                                        <th>Provinsi</th>
                                        <th>LT (m<sup>2</sup>)</th>
                                        <th>LB (m<sup>2</sup>)</th>
                                        <th width="18%">Harga</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach($properti as $row): ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $row['lokasi_properti']; ?></td>
                                        <td><?= $row['kabupaten']; ?></td>
                                        <td><?= $row['provinsi']; ?></td>
                                        <td><?= $row['luas_tanah']; ?></td>
                                        <td><?= $row['luas_bangunan']; ?></td>
                                        <td><?= "Rp " . number_format($row['harga_properti'],0,',','.'); ?></td>
                                        <td>
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#modal<?= $row['id']; ?>">
                                                Detail
                                            </button>
                                        </td>
                                    </tr>
                                    <!--Modal -->
                                    <div class="modal fade text-left" id="modal<?= $row['id']; ?>" tabindex="-1"
                                        role="dialog" aria-labelledby="myModalLabel17" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg"
                                            role="document">
                                            <div class="modal-content">
                                                <div class="modal-header bg-primary">
                                                    <h5 class="modal-title white" id="myModalLabel160">Detail Properti
                                                    </h5>
                                                    <button type="button" class="close text-white"
                                                        data-bs-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <img src="<?= base_url()?>/assets/images/properti/<?= $row['foto_properti']; ?>"
                                                                style="width: 250px; height: 250px; border-radius:8px;">
                                                        </div>
                                                        <div class="col-md-3">
                                                            <p class="fw-bold">Lokasi</p>
                                                            <p class="fw-bold">Provinsi</p>
                                                            <p class="fw-bold">Kabupaten</p>
                                                            <p class="fw-bold">Luas Tanah</p>
                                                            <p class="fw-bold">Luas Bangunan</p>
                                                            <p class="fw-bold">Dokumen Kepemilikan</p>
                                                            <p class="fw-bold">Harga</p>
                                                            <p class="fw-bold">Deskripsi Properti</p>
                                                        </div>
                                                        <div class="col-md-1">
                                                            <p>:</p>
                                                            <p>:</p>
                                                            <p>:</p>
                                                            <p>:</p>
                                                            <p>:</p>
                                                            <p>:</p>
                                                            <p>:</p>
                                                            <p>:</p>
                                                        </div>
                                                        <div class="col-md-4" style="margin-left:-30px;">
                                                            <p><?= $row['lokasi_properti']; ?></p>
                                                            <p><?= $row['provinsi']; ?></p>
                                                            <p><?= $row['kabupaten']; ?></p>
                                                            <p><?= $row['luas_tanah']; ?> (m<sup>2</sup>)</p>
                                                            <p><?= $row['luas_bangunan']; ?> (m<sup>2</sup>)</p>
                                                            <p><?= $row['dokumen_kepemilikan']; ?></p>
                                                            <p><?= "Rp " . number_format($row['harga_properti'],0,',','.'); ?>
                                                            </p>
                                                            <p><?= $row['deskripsi_properti']; ?></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-light-secondary"
                                                        data-bs-dismiss="modal">
                                                        <i class="bx bx-x d-block d-sm-none"></i>
                                                        <span class="d-none d-sm-block">Close</span>
                                                    </button>
                                                    <a href="<?= base_url(); ?>/PropertiController/deleteProperti/<?= $row['id']; ?>"
                                                        class="btn btn-danger ml-1"
                                                        onclick="return confirm('Apakah yakin akan menghapus properti ini?')">Delete</a>
                                                    <a href="/admin/properti/edit/<?= $row['id']; ?>"
                                                        class="btn btn-primary ml-1">Edit</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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