<?= $this->extend('Admin/layout') ?>
<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col-8">
            <div class="page-heading">
                <h2 class="my-3"><?= $title; ?></h2>

                <div class="page-content">
                    <section class="row">
                        <div class="col-12 col-lg-12">
                            <div class="row">
                                <div class="col-12 col-xl-12">
                                        <div class="card">
                                            <div class="row">
                                                <div class="col-12 col-lg-12 col-md-12">
                                                    <div class="card">
                                                        <div class="card-body px-8 py-6-8">
                                                            <div class="row">
                
                                                            <fieldset>
                                                                <form action="/usercontroller/update_bukti/<?= $transaksi['id']; ?>" method="POST" enctype="multipart/form-data">
                                                                <?= csrf_field() ?>
                                                                    
                                                                    <input type="hidden" name="gambarLama" value="<?= $transaksi['bukti_pembayaran']; ?>">
                                                            
                                                                    <div class="form-group row">
                                                                        <!-- <label for="bukti_pembayaran" class="col-sm-2 col-form-label">Upload Gambar</label> -->

                                                                        <!-- <div class="col-sm-2">
                                                                                <img src="/assets/images/user/?= $transaksi['bukti_pembayaran']; ?>" class="img-thumbnail img-preview">
                                                                            </div> -->
                                                                            <div class="col-sm-8">
                                                                            <div class="custom-file-input">
                                                                                <button type="submit" class="btn btn-primary">Upload</button>
                                                                                <input type="file" class="custom-file-input <?= ($validation->hasError('bukti_pembayaran')) ? 
                                                                                'is-invalid' : ''; ?>" id="bukti_pembayaran" name="bukti_pembayaran" >
                                                                                
                                                                                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                                                                <?= $validation->getError('bukti_pembayaran'); ?>
                                                                                </div>
                                                                                <label class="custom-file-label" for="bukti_pembayaran"></label>
                                                                                
                                                                            </div>
                                                                            </div>
                                                                    </div>

                                                                    <!-- <button type="submit" class="btn btn-primary">Simpan</button> -->
                                                                </form>
                                                            </fieldset>
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
            </div>
        </div>
    </div>
</div>

                               

            </div>
        </div>
    </div>
</div>

               
<?= $this->endSection(); ?>

