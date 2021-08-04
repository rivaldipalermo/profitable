<?= $this->extend('Admin/layout') ?>
<?= $this->section('content'); ?>
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/css/bootstrap.min.css"> -->
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
                                    <div class="card">
                                        <div class="card-body px-3 py-4-5">
                                            <div class="row">
                                            
                                                <h4>Saldo Profitable</h4>
                                                <div class="card nopadding nolastchild content-balance">
                                                    
                                                        
                                                        <div class="cb-logo">
                                                        
                                                        <img src="/assets/images/logo/logo-profitable.png" width="100" height="100" alt="">
                                                        
                                                        </div>
                                                    
                                                        
                                            
                                                        <div class="cb-balance" id="cb-balance-text"><span class="currency-label">Rp </span>0</div>
                                                       
                                                    
                                                </div>
                                            

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-6 col-lg-4 col-md-6">
                                    <div class="card">
                                        <div class="card-body px-3 py-4-5">
                                            <div class="row">
                                                
                                                <h4>TOP-UP Saldomu Sekarang</h4>
                                                <p></p>
                                                <form action="https://pulsa.tokopedia.com">
                                                    <div class="input-topup-wrapper">
                                                        <div class="ct-input">
                                                            <div class="input-field-box input-normal mb-16 pt-8" id="input-nominal-topup">
                                                            <div class="input-field-wrapper">
                                                                
                                                                <div class="currency">Rp
                                                                    <input class="input-field" placeholder="0" name="nominal-topup-input" id="nominal-topup-input" type="number" value="" autocomplete="off">
                                                                    <i class="sprite-small sprite-remove input-text-remove"></i>

                                                                            
                                                                            <!-- <button class="unf-btn unf-btn--animate unf-btn--primary unf-btn--block " id="btn-ovotopup-topup-debit" onclick="pushGTM('ovo home page','click topup instant','clickOVO','userID: 35098005')"> -->
                                                                            
                                                                            <span class="unf-btn__children"><a href="/UserController/biodata/" class="btn btn-primary">Top-up</a></span>
                                                                            
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
                                                <!-- <li class="nav-item">
                                                    <a class="nav-link " href="#" tabindex="-5" aria-disabled="true">
                                                    <h5 class="text-muted font-semibold">Pengembalian</h5></a>
                                                </li> -->
                                            </ul>
                                              
                                            </div>
                                                <!-- <div class="col-3 col-lg-3 col-md-3"></div>
                                                <div class="col-2 col-lg-2 col-md-2">
                                                    
                                                    <select name="" id="jtrans" class="form-control ">
                                                        <option value="0">Show All</option>
                                                        <option value="1">50.000</option>
                                                        <option value="2">100.000</option>
                                                        <option value="3">150.000</option>
                                                    </select>
                                            
                                                </div>
                                                <div class="col-1 col-lg-1 col-md-1"></div> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                        
                        
                        <div class="container">
                        
                        
                            <div class="card">
                        
                            </div>
                        

                       
                        <div class="card">
                        <br>
                        
                        <form method="GET">
                            <table>
                                <tr>
                                    
                                    <td><h5>From</h5></td>
                                    <td><input type="date" name="dt_from" required="required"></td>
                                    <td><h5>To</h5></td>
                                    <td><input type="date" name="dt_to" required="required"></td>
                                    <td><input type="submit" class="btn btn-primary" name="filter" value="Filter"></td>
                                    
                                    <td><a href="/UserController/riwayat_tu/" class="btn btn-primary">Clear</a></td>
                                </tr>
                            </table>
                        </form>
                        
                        <br>

                        <table class="table" id="riwayat">
                            <thead>
                                <tr class="table-active">
                                    <th scope="col"></th>
                                    <th scope="col"></th>
                                    <th scope="col">Id</th>
                                    <th scope="col">Waktu Transaksi</th>
                                    <th scope="col">Saldo</th>
                                    <th scope="col">Jenis Pembayaran</th>
                                    <th scope="col">Bukti Pembayaran</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            
                                <tbody>
                                    
                                    <tr>
                                        
                                        <?php $i = 1 + (5 * ($page_akhir - 1)); ?> 
                                        
                                        <?php foreach ($transaksi as $a): ?>
                                        
                                        <td></td>
                                        <th scope="row"><?= $i++; ?></th>
                                            <td><?= $a['user_id'];  ?></td>
                                            <td><?= $a['created_at'];  ?></td>
                                            <td><?= $a['saldo'];  ?></td>
                                            <td><?= $a['jenis_pembayaran'];  ?></td>
                                            <td><img src="/assets/images/user/<?= $a['bukti_pembayaran']; ?>" width='120' height="120"></td>
                                            <td><a href="/user/u_upload_bukti/<?= $a['id']; ?>" class="btn btn-primary">Upload</a></td>
                                    
                                        </tr>
                                        <?php endforeach; ?>
                                </tbody>
                        </table>
                                        <?= $pager->links('riwayattu', 'riwayattu_pagination'); ?>
                        </div>
                    </div>

                    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
                        <script>
                            $(document).ready(function(){
                                $("#jtrans").change(function(){
                                    //let a = $(this).val();
                                    //console.log(a);
                                    riwayat();
                                });
                            });

                            function riwayat() {
                                var jtrans = $("#jtrans").val();
                                $.ajax({
                                    url : "<?= base_url('Usercontroller/load_jtrans') ?>",
                                    data: "jtrans" + jtrans,
                                    success:function(data) {
                                        //$("#riwayat tbody").html('<tr><td colspan="4" align="center">Tidak Ditemukan</td></tr>')
                                        //console.log(data);
                                        $("riwayat tbody").html(data);
                                    }
                                });
                            }

                        </script>
       -->
  

<?= $this->endSection(); ?>