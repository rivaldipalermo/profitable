<?= $this->extend('Admin/layout') ?>
<?= $this->section('content'); ?>

<div class="page-heading">
    <h3><?= $title; ?></h3>
</div>
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
                                            <th>Nama</th>
                                            <th>Nominal</th>
                                            <th>Tanggal</th>
                                            <th>Jenis Pembayaran</th>
                                            <th>Aksi</th>
                                            <th></th>
                                        </tr>
                                    </thead>

                                    ##template
                                    <tbody>
                                        <tr>
                                            <td class='col-3 '>
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar avatar-md">
                                                        <img src="<?= base_url(); ?>/assets/images/faces/5.jpg">
                                                    </div>
                                                    <p class='font-bold ms-3 mb-0'>Fuanuddin</p>
                                                </div>
                                            </td>
                                            <td class='col-auto'>
                                                <p class=' mb-0'>Rp.3.000</p>
                                            </td>
                                            <td class='col-auto'>
                                                <p class=' mb-0'>25 Juli 2021</p>
                                            </td>
                                            <td class='col-auto'>
                                                <p class=' mb-0'>Bank BNI</p>
                                            </td>
                                            <td class='col-auto'>
                                                <button type="button" class="btn btn-success">Approve</button>
                                                <button type="button" class="btn btn-danger">Reject</button>
                                            </td>
                                            <td>
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td class='col-3 '>
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar avatar-md">
                                                        <img src="<?= base_url(); ?>/assets/images/faces/2.jpg">
                                                    </div>
                                                    <p class='font-bold ms-3 mb-0'>Archius</p>
                                                </div>
                                            </td>
                                            <td class='col-auto'>
                                                <p class=' mb-0'>Rp.5.000.000</p>
                                            </td>
                                            <td class='col-auto'>
                                                <p class=' mb-0'>28 Juli 2021</p>
                                            </td>
                                            <td class='col-auto'>
                                                <p class=' mb-0'>Bank BRI</p>
                                            </td>
                                            <td class='col-auto'>
                                                <button type="button" class="btn btn-success">Approve</button>
                                                <button type="button" class="btn btn-danger">Reject</button>
                                            </td>
                                            <td>
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class='col-3 '>
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar avatar-md">
                                                        <img src="<?= base_url(); ?>/assets/images/faces/2.jpg">
                                                    </div>
                                                    <p class='font-bold ms-3 mb-0'>Jordan Kumowal</p>
                                                </div>
                                            </td>
                                            <td class='col-auto'>
                                                <p class=' mb-0'>Rp.1.000.000</p>
                                            </td>
                                            <td class='col-auto'>
                                                <p class=' mb-0'>21 Juli 2021</p>
                                            </td>
                                            <td class='col-auto'>
                                                <p class=' mb-0'>Bank Mega</p>
                                            </td>
                                            <td class='col-auto'>
                                                <button type="button" class="btn btn-success">Approve</button>
                                                <button type="button" class="btn btn-danger">Reject</button>
                                            </td>
                                            <td>
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <p align="center">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
                <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                </li>
            </ul>
        </nav>
    </section>
</div>
<?= $this->endSection(); ?>