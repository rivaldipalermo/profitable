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
                            <div class="row">
                                <div class="col-6 col-lg-8 col-md-6">
                                    <!-- <div class="card">
                                        <div class="card-body px-3 py-4-5">
                                            <div class="row">
                                                
                                            </div>
                                        </div>
                                    </div> -->
                                </div>

                                <div class="col-6 col-lg-4 col-md-6">
                                    <div class="card">
                                        <div class="card-body px-3 py-4-5">
                                            <div class="row">
                                                
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
                                        <div class="col-6 col-lg-6 col-md-6">
                                            <div class="card">
                                                
                                            <ul class="nav nav-tabs">
                                                <li class="nav-item">
                                                    <a class="nav-link active" aria-current="page" href="#">
                                                    <h5 class="text-muted font-semibold">Semua</h5></a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link " href="#" aria-current="page" >
                                                    <h5 class="text-muted font-semibold">Pembayaran</h5></a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link " href="#" tabindex="-5" aria-disabled="true">
                                                    <h5 class="text-muted font-semibold">Penerimaan</h5></a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link " href="#" tabindex="-5" aria-disabled="true">
                                                    <h5 class="text-muted font-semibold">Pengembalian</h5></a>
                                                </li>
                                            </ul>
                                              
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                  
                        <div class="card">
                        <table class="table">
                            <thead>
                                <tr class="table-active">
                                    <th scope="col"></th>
                                    <th scope="col">Id</th>
                                    <th scope="col">Saldo</th>
                                    <th scope="col">Jenis Pembayaran</th>
                                    <th scope="col">Bukti Pembayaran</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            
                                <tbody>
                                    
                                    <tr>
                                        <?php $i = 1 + (10 * ($page_akhir - 1)); ?>  
                                        <?php foreach ($transaksi as $a): ?>
                                        <th scope="row"><?= $i++; ?></th>
                                            <td><?= $a['user_id'];  ?></td>
                                            <td><?= $a['saldo'];  ?></td>
                                            <td><?= $a['jenis_pembayaran'];  ?></td>
                                            <td><?= $a['bukti_pembayaran'];  ?></td>
                                            <td><a href="#" class="btn btn-success">Detail</a></td>
                                    </tr>
                                        <?php endforeach; ?>
                                </tbody>
                        </table>
                                        <?= $pager->links('artikel', 'artikel_pagination'); ?>
                        </div>
                    </div>

               
<?= $this->endSection(); ?>