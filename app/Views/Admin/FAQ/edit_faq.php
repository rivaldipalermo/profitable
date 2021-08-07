<?= $this->extend('Admin/layout') ?>
<?= $this->section('content'); ?>
<div class="page-heading">
    <h3><?= $title; ?></h3>
</div>
<!-- Basic Tables start -->
<section class="section">
    <div class="card">
        <div class="card-body">
            <form action="/admin/faq/update/<?= $faq['id']; ?>" method="POST" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <div class="row">

                    <div class="form-group">
                        <label for="basicInput" class="mb-2">Pertanyaan</label>
                        <input type="hidden" name="id" value="<?= $faq['id']; ?>">
                        <input type="text" class="form-control <?= ($validation->hasError('faq')) ? 'is-invalid' : ''; ?>" name="pertanyaan" placeholder="Pertanyaan" value="<?= $faq['pertanyaan'] ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('pertanyaan'); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="basicInput" class="mb-2">Jawaban</label>

                        <textarea class="form-control <?= ($validation->hasError('faq')) ? 'is-invalid' : ''; ?>" name="jawaban" placeholder="Jawaban" rows="3"><?= $faq['jawaban'] ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="helpInputTop" class="mb-2">Tipe</label>
                        <select class="form-select <?= ($validation->hasError('tipe')) ? 'is-invalid' : ''; ?>" id="tipe" name="tipe">
                            <option value="default" <?= ($faq['tipe'] == 'default') ? 'selected' : ''; ?>>Default</option>
                            <option value="frequently" <?= ($faq['tipe'] == 'frequently') ? 'selected' : ''; ?>>Frequently</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="helpInputTop" class="mb-2">Kategori</label>
                        <select class="form-select <?= ($validation->hasError('kategori')) ? 'is-invalid' : ''; ?>" id="kategori" name="kategori">
                            <option value="none" <?= ($faq['kategori'] == 'none') ? 'selected' : ''; ?>>Belum memilih</option>
                            <option value="profitable" <?= ($faq['kategori'] == 'profitable') ? 'selected' : ''; ?>>Tentang Profitable</option>
                            <option value="investasi" <?= ($faq['kategori'] == 'investasi') ? 'selected' : ''; ?>>Tentang Investasi</option>
                            <option value="skema" <?= ($faq['kategori'] == 'skema') ? 'selected' : ''; ?>>Tentang Skema Investasi</option>
                            <option value="biaya" <?= ($faq['kategori'] == 'biaya') ? 'selected' : ''; ?>>Tentang Biaya</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <button class="btn btn-primary float-end" type="submit">Submit</button>
                    </div>
                </div>
        </div>
        </form>
    </div>
</section>

<?= $this->endSection(); ?>