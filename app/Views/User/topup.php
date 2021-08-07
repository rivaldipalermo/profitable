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
                                                        <img src="<?= base_url(); ?>/assets/images/faces/5.jpg">
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
                                                        <img src="<?= base_url(); ?>/assets/images/faces/2.jpg">
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
                            <!-- <div class="col-6">
    <label class="visually-hidden" for="inlineFormInputGroupUsername">Username</label>
    <div class="input-group">
      <div class="input-group-text">@</div>
      <input type="text" class="form-control" id="inlineFormInputGroupUsername" placeholder="Username">
    </div>
  </div>
                            <form class="">
                            <div class="col-md-6">
                                <label for="inputEmail" class="form-label">Email:</label>
                                <input type="email" class="form-control" id="inputEmail">
                            </div>
                            </div> -->

                            <fieldset class="row mb-3">
                                <form action="/UserController/topupsave" method="POST">
                                    <?= csrf_field() ?>                                        
                                        <div class="col-md-6">
                                            <label for="inputState" class="form-label">Nominal:</label>
                                            <select id="nominal" class="form-select btn btn-outline-primary" name="nominal">
                                                <option selected value="">Choose...</option>
                                                <option value="500000">Rp 500.000</option>
                                                <option value="1000000">Rp 1.000.000</option>
                                                <option value="1500000">Rp 1.500.000</option>
                                                <option value="2000000">Rp 2.000.000</option>
                                                <option value="2500000">Rp 2.500.000</option>
                                                <option value="3000000">Rp 3.000.000</option>
                                            </select>
                                            <p class="">Biaya Admin : Rp.2.500</p>
                                        </div>

                                        <div class="col-md-6">
                                            <label for="inputState" class="form-label ">Pilih Metode Pembayaran:</label>
                                            <select id="nama_bank" class="form-select btn btn-outline-primary" name="nama_bank">
                                                <option selected>Choose...</option>
                                                <option value="Bank BCA">Transfer Bank BCA</option>
                                                <option value="Bank Mandiri">Transfer Bank Mandiri</option>
                                                <option value="Bank BRI">Transfer Bank BRI</option>
                                                <option value="Bank Niaga">Transfer Bank Niaga</option>
                                                <option value="Bank BNI">Transfer Bank BNI</option>
                                            </select>
                                        </div>

                                        <div class="col-md-12 mt-4">
                                            <div class="form-check">
                                                <input required class="form-check-input" type="checkbox" id="gridCheck">
                                                <label class="form-check-label" for="gridCheck">
                                                    Saya menyetujui syarat dan ketentuan yang berlaku.
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-12 mt-4">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </form>
                            </fieldset>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?= $this->endSection(); ?>