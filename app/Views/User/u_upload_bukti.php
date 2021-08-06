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
                            <fieldset>
                                <form action="/UserController/update_bukti/<?= $transaksi['id']; ?>" method="POST" enctype="multipart/form-data">
                                    <?= csrf_field() ?>

                                    <!-- <input type="hidden" name="gambarLama" value="<?= $transaksi['bukti_pembayaran']; ?>"> -->

                                    <div class="form-group row">
                                 
                                        <div class="col-sm-12">
                                            <div class="custom-file-input">
                                                
                                                <input type="file" class="form-control <?= ($validation->hasError('bukti_pembayaran')) ?
                                                                                            'is-invalid' : ''; ?>" id="bukti_pembayaran" name="bukti_pembayaran" >

                                                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                                    <?= $validation->getError('bukti_pembayaran'); ?>
                                                </div>
                                                <div>
                                                    <button type="submit" class="btn btn-primary">Upload</button>
                                                </div>
                                               

                                            </div>
                                        </div>
                                    </div>



                                    <!-- <button type="submit" class="btn btn-primary">Simpan</button> -->
                                </form>
                            </fieldset>

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