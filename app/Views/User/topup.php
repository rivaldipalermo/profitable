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
                                <form action="/usercontroller/topupsave" method="POST">
                                    <?= csrf_field() ?>
                                    
                                        <div class="col-md-6">
                                            <label for="inputuser_id" class="form-label">User ID:</label>
                                            <input type="text" class="form-control" id="user_id" name="user_id">
                                        </div>


                                        
                                        <div class="col-md-6">
                                            <label for="inputState" class="form-label">Nominal:</label>
                                            <select id="nominal" class="form-select btn btn-outline-primary" name="nominal">
                                                <option selected value="">Choose...</option>
                                                <option value="1002500">1000000</option>
                                                <option value="1502500">1500000</option>
                                                <option value="2002500">2000000</option>
                                                <option value="2502500">2500000</option>
                                                <option value="3002500">3000000</option>
                                            </select>
                                            <p class="">Pajak yang berlaku dan dapat memperbesar biaya akhir senilai: Rp.2.500</p>
                                        </div>

                                        <div class="col-md-6">
                                            <label for="inputState" class="form-label ">Pilih Bank:</label>
                                            <select id="nama_bank" class="form-select btn btn-outline-primary" name="nama_bank">
                                                <option selected>Choose...</option>
                                                <option>Bank BCA</option>
                                                <option>Bank Mandiri</option>
                                                <option>Bank BRI</option>
                                                <option>Bank Niaga</option>
                                                <option>Bank BNI</option>
                                            </select>
                                        </div>

                                        <div class="col-md-12 mt-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="gridCheck">
                                                <label class="form-check-label" for="gridCheck">
                                                    Apakah Sudah Benar?
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