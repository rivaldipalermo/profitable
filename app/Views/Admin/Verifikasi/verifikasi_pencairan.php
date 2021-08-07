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
                                        <th width="20%">User Id</th>
                                        <th>Penarikan</th>
                                        <th>Tanggal</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal">
                                                Diterima
                                            </button>
                                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modal">
                                                Ditolak
                                            </button>
                                        </td>
                                    </tr>
                                    <!--Modal -->
                                    <div class="modal fade text-left" id="modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel17" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header bg-primary">
                                                    <h5 class="modal-title white" id="myModalLabel160">Detail Properti
                                                    </h5>
                                                    <button type="button" class="close text-white" data-bs-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <img src="<?= base_url() ?>/assets/images/properti/" style="width: 250px; height: 250px; border-radius:8px;">
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
                                                            <p></p>
                                                            <p></p>
                                                            <p></p>
                                                            <p></p>
                                                            <p></p>
                                                            <p></p>
                                                            <p>
                                                            </p>
                                                            <p></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                                                        <i class="bx bx-x d-block d-sm-none"></i>
                                                        <span class="d-none d-sm-block">Close</span>
                                                    </button>
                                                    <a href="<?= base_url(); ?>/PropertiController/deleteProperti/" class="btn btn-danger ml-1" onclick="return confirm('Apakah yakin akan menghapus properti ini?')">Delete</a>
                                                    <a href="/admin/properti/edit/" class="btn btn-primary ml-1">Edit</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

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