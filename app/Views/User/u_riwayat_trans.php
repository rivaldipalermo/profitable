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
                    <!-- <div class="card">
                        <div class="card-header">
                            <h4>Latest Comments</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
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
                            </div>
                        </div>
                    </div> -->

                    
                        <div class="card">
                            <div class="row">
                                <div class="col-6 col-lg-4 col-md-6">
                                    <div class="card">
                                        <div class="card-body px-3 py-4-5">
                                            <div class="row">
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-6 col-lg-4 col-md-6">
                                    <div class="card">
                                        <div class="card-body px-3 py-4-5">
                                            <div class="row">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-6 col-lg-4 col-md-6">
                                    <div class="card">
                                        <div class="card-body px-3 py-4-5">
                                            <div class="row">
                                                <div class="col-md-4">
                                                </div>
                                                <h4>TOP-UP Saldomu Sekarang</h4>
                                                <form action="https://pulsa.tokopedia.com">
                                                    <div class="input-topup-wrapper">
                                                        <div class="ct-input">
                                                            <div class="input-field-box input-normal mb-16 pt-8" id="input-nominal-topup">
                                                            <div class="input-field-wrapper">
                                                                
                                                                <div class="currency">Rp
                                                                    <input class="input-field" placeholder="0" name="nominal-topup-input" id="nominal-topup-input" type="text" value="" autocomplete="off">
                                                                    <i class="sprite-small sprite-remove input-text-remove"></i>
                                                                        
                                                                            <!-- <button class="unf-btn unf-btn--animate unf-btn--primary unf-btn--block " id="btn-ovotopup-topup-debit" onclick="pushGTM('ovo home page','click topup instant','clickOVO','userID: 35098005')"> -->
                                                                            <span class="unf-btn__children"><a href="#" class="btn btn-primary">Top-up</a></span>
                                                                            <!-- </button> -->
                                                                        
                                                                </div>
                                                                
                                                            </div>
                                                            <div class="input-message"></div>
                                                            </div>
                                                            
                                                        </div>
                                                    
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>    
        </div>
    </section>
</div>


                    <div class="card">
                        <div class="card-header">
                            <h3>Riwayat Transaksi-mu</h3>
                        </div>

                        <div class="page-content">
                            <section class="row">
                                <div class="col-12 col-lg-12">
                                    <div class="row">
                                    <div class="col-6 col-lg-3 col-md-6">
                                            <div class="card">
                                                <div class="card-body px-3 py-4-5">
                                                    <div class="row">
                                                        <!-- <div class="col-md-4">
                                                            <div class="stats-icon red">
                                                                <i class='iconly-boldBookmark'></i>
                                                            </div>
                                                        </div> -->
                                                        <div class="col-md-3"></div>
                                                        <div class="col-md-6">
                                                            <a href="#" class="btn btn-outline-info">
                                                            <h5 class="text-muted font-semibold">Semua</h5>
                                                            </a>
                                                            <!-- <h6 class='font-extrabold mb-0'>112</h6> -->
                                                        </div>
                                                        <div class="col-md-3"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-lg-3 col-md-6">
                                            <div class="card">
                                                <div class="card-body px-3 py-4-5">
                                                    <div class="row">
                                                        <!-- <div class="col-md-4">
                                                            <div class="stats-icon red">
                                                                <i class='iconly-boldBookmark'></i>
                                                            </div>
                                                        </div> -->
                                                        <div class="col-md-3"></div>
                                                        <div class="col-md-6">
                                                            <a href="#" class="btn btn-outline-info">
                                                            <h5 class="text-muted font-semibold">Pembayaran</h5>
                                                            </a>
                                                            <!-- <h6 class='font-extrabold mb-0'>112</h6> -->
                                                        </div>
                                                        <div class="col-md-3"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-lg-3 col-md-6">
                                            <div class="card">
                                                <div class="card-body px-3 py-4-5">
                                                    <div class="row">
                                                        <!-- <div class="col-md-4">
                                                            <div class="stats-icon red">
                                                                <i class='iconly-boldBookmark'></i>
                                                            </div>
                                                        </div> -->
                                                        <div class="col-md-3"></div>
                                                        <div class="col-md-6">
                                                            <a href="#" class="btn btn-outline-info">
                                                            <h5 class="text-muted font-semibold">Penerimaan</h5>
                                                            </a>
                                                            <!-- <h6 class='font-extrabold mb-0'>112</h6> -->
                                                        </div>
                                                        <div class="col-md-3"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-lg-3 col-md-6">
                                            <div class="card">
                                                <div class="card-body px-3 py-4-5">
                                                    <div class="row">
                                                        <!-- <div class="col-md-4">
                                                            <div class="stats-icon red">
                                                                <i class='iconly-boldBookmark'></i>
                                                            </div>
                                                        </div> -->
                                                        <div class="col-md-3"></div>
                                                        <div class="col-md-6">
                                                            <a href="#" class="btn btn-outline-info">
                                                            <h5 class="text-muted font-semibold">Pengembalian</h5>
                                                            </a>
                                                            <!-- <h6 class='font-extrabold mb-0'>112</h6> -->
                                                        </div>
                                                        <div class="col-md-3"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                        
                        
                        
                        <!-- <div class="card">
                        <div class="card-body">
                        <div class="cth-chip-menu" id="chip-slider">
                            <div class="item unf-chip unf-chip--active" qp="">Semua</div>
                            <div class="item unf-chip" qp="paid">Pembayaran</div>
                            <div class="item unf-chip" qp="received,topup">Penerimaan</div>
                            <div class="item unf-chip" qp="refund">Pengembalian</div>
                        </div>
                        </div>
                        </div> -->

                        <table class="table">
                            <thead>
                                <tr class="table-active">
                                    <th scope="col">No</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Nominal</th>
                                    <th scope="col">Waktu</th>
                                    <th scope="col">Jenis Pembayaran</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            
                        </table>
                    </div>

               
<?= $this->endSection(); ?>