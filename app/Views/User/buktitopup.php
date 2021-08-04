<?= $this->extend('Admin/layout') ?>
<?= $this->section('content'); ?>
<form action="/UserController/buktisave" method="POST" class="was-validated">


<div class="col-md-8">
 <h3 class="text-muted font-semibold">Bukti Topup</h6>
</div>
  <div class="mb-3">
    <input type="file" class="form-control" id="bukti" name="bukti" aria-label="file example" required accept="image/*" />
    <div class="invalid-feedback">Bukti topup masih kosong</div>
  </div>

  <div class="mb-3">
    <button class="btn btn-primary" type="submit" >Submit form</button>
  </div>
</form>



<?= $this->endSection(); ?>