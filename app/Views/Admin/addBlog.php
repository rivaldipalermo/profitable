<?= $this->extend('Admin/layout'); ?>
<?= $this->Section('content'); ?>


<div class="page-heading">
    <h3><?= $title; ?></h3>
</div>
        <fieldset>
        <form action="/Admin/saveBlog" method="POST" enctype="multipart/form-data">
        <?= csrf_field();?>
            <div class="form-group row-mt3">
                <label for="judul" class="col-sm-2 col-form-label">Judul </label>
                <div class="col-sm-10">
                <input type="text" class="form-control <?= ($validation->hasError('judul')) ?'is-invalid':'';?>" id="judul" name="judul" placeholder="JUDUL" autofocus value="<?=old('judul');?>">
                <div id="validationServerUsernameFeedback" class="invalid-feedback"><?=$validation->getError('judul');?></div>
                </div>
            </div>

            <div class="form-group row-mt3">
                <label for="author" class="col-sm-2 col-form-label">Nama Author </label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="author" name="author" placeholder="AUTHOR" value="<?=old('author');?>">
                </div>
            </div>

            <div class="form-group row-mt3">
                <label for="isi" class="col-sm-2 col-form-label">Content Blog </label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="isi" name="isi" placeholder="ISI" value="<?=old('isi');?>">
                </div>
            </div>
            </div>
            <button type="submit" class="btn btn-primary">Tambah</button>
        </fieldset>
        </form>
<?= $this->endSection(); ?>
