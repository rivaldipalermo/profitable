<?= $this->extend('Admin/layout') ?>
<?= $this->section('content'); ?>
<div class="page-heading">
    <h3><?= $title; ?></h3>
</div>
<div class="row">
    <div class="col-md-3">
        <a href="/admin/faq/add" class="btn btn-primary">Tambah FAQ</a>
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
                                        <th class="text-center">No</th>
                                        <th width="20%" class="text-center">Pertanyaan</th>
                                        <th width="55%" class="text-center">Jawaban</th>
                                        <th class="text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1 + (5 * ($currentPage - 1));
                                    foreach ($faq as $row) : ?>
                                        <tr>
                                            <td class="text-center"><?= $no++; ?></td>
                                            <td style="text-align: justify;"><?= $row['pertanyaan']; ?></td>
                                            <td style="text-align: justify;">
                                                <?= $row['jawaban']; ?>
                                            </td>
                                            <td>
                                                <div class="d-flex justify-content-center">
                                                    <div class=" row">
                                                        <div class="col-lg-6 col-md-12">
                                                            <a href="/admin/faq/edit/<?= $row['id']; ?>" class="btn btn-warning">Edit</a>
                                                        </div>
                                                        <div class="col-lg-6 col-md-12">
                                                            <form action="/admin/faq/<?= $row['id']; ?>" method="post">
                                                                <?= csrf_field(); ?>
                                                                <input type="hidden" name="_method" value="DELETE">
                                                                <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Data Ingin Dihapus?')">Delete</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        <?php endforeach; ?>
                                </tbody>
                            </table>
                            <?= $pager->links('faq', 'faq_pagination'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection(); ?>