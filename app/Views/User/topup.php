<?= $this->extend('Admin/layout') ?>
<?= $this->section('content'); ?>
<div class="page-heading">
    <h3><?= $title; ?></h3>
</div>
<div class="page-content">
    <section class="row">
        <div class="col-12 col-lg-12">
            <!-- <div class="row">
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-3 py-4-5">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="stats-icon purple">
                                        <i class='iconly-boldShow'></i>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h6 class="text-muted font-semibold">Profile Views</h6>
                                    <h6 class='font-extrabold mb-0'>112.000</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-3 py-4-5">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="stats-icon blue">
                                        <i class='iconly-boldProfile'></i>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h6 class="text-muted font-semibold">Followers</h6>
                                    <h6 class='font-extrabold mb-0'>183.000</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-3 py-4-5">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="stats-icon green">
                                        <i class='iconly-boldAdd-User'></i>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h6 class="text-muted font-semibold">Following</h6>
                                    <h6 class='font-extrabold mb-0'>80.000</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-3 py-4-5">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="stats-icon red">
                                        <i class='iconly-boldBookmark'></i>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h6 class="text-muted font-semibold">Saved Post</h6>
                                    <h6 class='font-extrabold mb-0'>112</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <div class="row">
                <div class="col-12 col-xl-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Top-Up Saldo</h4>
                        </div>
                        <div class="card-body">
                            <!-- <div class="table-responsive">
                                <table class="table table-hover table-lg">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Comment</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class='col-3 '>
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar avatar-md">
                                                        <img src="<?= base_url();?>/assets/images/faces/5.jpg">
                                                    </div>
                                                    <p class='font-bold ms-3 mb-0'>Si Cantik</p>
                                                </div>
                                            </td>
                                            <td class='col-auto'>
                                                <p class=' mb-0'>Congratulations on your graduation!</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class='col-3 '>
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar avatar-md">
                                                        <img src="<?= base_url();?>/assets/images/faces/2.jpg">
                                                    </div>
                                                    <p class='font-bold ms-3 mb-0'>Si Ganteng</p>
                                                </div>
                                            </td>
                                            <td class='col-auto'>
                                                <p class=' mb-0'>Wow amazing design! Can you make another tutorial for
                                                    this design?</p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div> -->
                            <form class="">
                            <div class="col-md-6">
                                <label for="inputEmail4" class="form-label">Email</label>
                                <input type="email" class="form-control" id="inputEmail4">
                            </div>
                            <div class="col-md-6">
                                <label for="inputNo.Telpon14" class="form-label">No.Telpon</label>
                                <input type="no.telpon" class="form-control" id="inputNo.Telpon14">
                            </div>

                            <div class="col-md-4">
                              <label for="inputState" class="form-label">Nominal</label>
                              <select id="inputState" class="form-select">
                              <option selected>Choose...</option>
                              <option>Rp.1000000</option>
                              <option>Rp.1500000</option>
                              <option>Rp.2000000</option>
                              <option>Rp.2500000</option>
                              <option>Rp.3000000</option>
                              </select>
                          </div>

                            <div class="col-md-4">
                                <label for="inputState" class="form-label">Pilih Bank</label>
                                <select id="inputState" class="form-select">
                                <option selected>Choose...</option>
                                <option>Bank BCA</option>
                                <option>Bank Mandiri</option>
                                <option>Bank BRI</option>
                                <option>Bank Niaga</option>
                                <option>Bank BNI</option>
                                </select>
                            <div class="col-12">
                                <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck">
                                <label class="form-check-label" for="gridCheck">
                                    Apakah Sudah Benar?
                                </label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?= $this->endSection(); ?>