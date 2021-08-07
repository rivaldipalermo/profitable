<?= $this->extend('Admin/layout') ?>
<?= $this->section('content'); ?>
<div class="page-heading">
    <h3><?= $title; ?></h3>
</div>
<!-- Basic Tables start -->
<section class="section">
    <div class="card">
        <form action="/admin/investasi/store" method="POST">
        <?= csrf_field(); ?>
        <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="basicInput">Properti</label>
                            <select
                                class="form-select <?= ($validation->hasError('id_properti')) ? 'is-invalid' : ''; ?>"
                                id="id_properti" name="id_properti">
                                <option value="">--- Pilih Properti ---</option>
                                <?php foreach($properti as $row): ?>
                                <option value="<?= $row['id']; ?>"><?= $row['id']; ?> - <?= $row['lokasi_properti']; ?>
                                </option>
                                <?php endforeach; ?>
                            </select>
                            <div class="invalid-feedback">
                                <?= $validation->getError('id_properti'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="form-group">
                            <label for="basicInput">Imbal Hasil (dalam %)</label>
                            <input type="number"
                                class="form-control <?= ($validation->hasError('imbal_hasil')) ? 'is-invalid' : ''; ?>"
                                name="imbal_hasil" placeholder="Persentase Imbal Hasil"
                                value="<?= old('imbal_hasil') ?>" step="any">
                        </div>
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