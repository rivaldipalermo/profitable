<?= $this->extend('Admin/layout') ?>
<?= $this->section('content'); ?>
<div class="page-heading">
    <h3><?= $title; ?></h3>
</div>
<!-- Basic Tables start -->
<section class="section">
    <div class="card">
        <form action="/admin/faq/store" method="POST">
            <?= csrf_field(); ?>
            <div class="card-body">
                <div class="row">
                    <div class="form-group">
                        <label for="basicInput" class="mb-2">Pertanyaan</label>
                        <input type="text" class="form-control" name="pertanyaan" placeholder="Pertanyaan">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <label for="basicInput" class="mb-2">Jawaban</label>
                        <textarea class="form-control" name="jawaban" placeholder="Jawaban" rows="3"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="basicInput">Tipe</label>
                            <select class="form-select" id="tipe" name="tipe">
                                <option value="">--- Pilih Tipe ---</option>
                                <option value="default">Default</option>
                                <option value="frequently">Frequently</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="kategori">Kategori</label>
                            <select class="form-select" <?= ($validation->hasError('kategori')) ? 'is-invalid' : ''; ?>" id="kategori" name="kategori">
                                <option value="">--- Pilih Kategori ---</option>
                                <option value="none">Tidak ada</option>
                                <option value="profitable">Tentang Profitable</option>
                                <option value="investasi">Tentang Investasi</option>
                                <option value="skema">Tentang Skema Investasi</option>
                                <option value="biaya">Tentang Biaya</option>
                            </select>
                            <div id="validationServer05Feedback" class="invalid-feedback">
                                <?= $validation->getError('kategori'); ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <button class="btn btn-primary float-end" type="submit">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
<?= $this->endSection(); ?>
