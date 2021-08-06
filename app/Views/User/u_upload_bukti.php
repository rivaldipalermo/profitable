<?= $this->extend('Admin/layout') ?>
<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col-8">
            <div class="page-heading">
                <h2 class="my-3"><?= $title; ?></h2>

                <div class="page-content">
                    <section class="row">

                        <div class="row">

                            <fieldset>
                                <form action="/UserController/update_bukti/<?= $transaksi['id']; ?>" method="POST" enctype="multipart/form-data">
                                    <?= csrf_field() ?>

                                    <input type="hidden" name="gambarLama" value="<?= $transaksi['bukti_pembayaran']; ?>">

                                    <div class="form-group row">
                                        <!-- <label for="bukti_pembayaran" class="col-sm-2 col-form-label">Upload Gambar</label> -->

                                        <!-- <div class="col-sm-2">
                                                                                <img src="/assets/images/user/?= $transaksi['bukti_pembayaran']; ?>" class="img-thumbnail img-preview">
                                                                            </div> -->
                                        <div class="col-sm-12">

                                            <input type="file" class="form-control" <?= ($validation->hasError('bukti_pembayaran')) ?
                                                                                        'is-invalid' : ''; ?>" id="bukti_pembayaran" name="bukti_pembayaran" required accept="image/*">
                                        </div>
                                        <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                            <?= $validation->getError('bukti_pembayaran'); ?>
                                        </div>
                                        <label class="custom-file-label" for="bukti_pembayaran"></label>

                                    </div>
                        </div>
                </div>
                <div class="custom-file-input">
                    <button type="submit" class="btn btn-primary">Upload</button>
                    <div class="mb-3">
                        <!-- <div class="mb-3">
    <input type="file" class="form-control" id="bukti" name="bukti" aria-label="file example" required accept="image/*" />
    <div class="invalid-feedback">Bukti topup masih kosong</div>
  </div> -->

                        <!-- <button type="submit" class="btn btn-primary">Simpan</button> -->
                        </form>


                        </fieldset>

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