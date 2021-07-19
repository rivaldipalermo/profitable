<?= $this->extend('Admin/layout') ?>
<?= $this->section('content'); ?>
<div class="page-heading">
  <h3><?= $title; ?></h3>
</div>
<!-- Basic Tables start -->
<section class="section">
  <div class="card">
    <div class="card-body">
      <form action="/admin/properti/store" method="POST" enctype="multipart/form-data">
        <?= csrf_field(); ?>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="basicInput">Lokasi</label>
              <input type="text"
                class="form-control <?= ($validation->hasError('lokasi_properti')) ? 'is-invalid' : ''; ?>"
                name="lokasi_properti" placeholder="Lokasi Properti" value="<?= old('lokasi_properti') ?>">
              <div class="invalid-feedback">
                <?= $validation->getError('lokasi_properti'); ?>
              </div>
            </div>
            <div class="form-group">
              <label for="helpInputTop">Provinsi</label>
              <select class="form-select <?= ($validation->hasError('provinsi')) ? 'is-invalid' : ''; ?>" id="provinsi">
                <option value="">Pilih Provinsi</option>
                <?php foreach($provinsi as $p): ?>
                <option value="<?= $p->province_id; ?>"><?= $p->province; ?></option>
                <?php endforeach ?>
              </select>
              <div class="invalid-feedback">
                <?= $validation->getError('provinsi'); ?>
              </div>
              <input type="hidden" class="form-control" name="provinsi" id="province">
            </div>
            <div class="form-group">
              <label for="helpInputTop">Kabupaten/Kota</label>
              <select class="form-select <?= ($validation->hasError('kabupaten')) ? 'is-invalid' : ''; ?>" id="kabupaten" name="kabupaten">
                <option value="">Pilih Kabupaten</option>
              </select>
              <div class="invalid-feedback">
                <?= $validation->getError('kabupaten'); ?>
              </div>
            </div>
            <div class="form-group">
              <label for="basicInput">Luas Tanah (m<sup>2</sup>)</label>
              <input type="text" class="form-control <?= ($validation->hasError('luas_tanah')) ? 'is-invalid' : ''; ?>" name="luas_tanah" placeholder="Luas Tanah" value="<?= old('luas_tanah') ?>">
              <div class="invalid-feedback">
                <?= $validation->getError('luas_tanah'); ?>
              </div>
            </div>
            <div class="form-group">
              <label for="basicInput">Luas Bangunan (m<sup>2</sup>)</label>
              <input type="text" class="form-control <?= ($validation->hasError('luas_bangunan')) ? 'is-invalid' : ''; ?>" name="luas_bangunan" placeholder="Luas Bangunan" value="<?= old('luas_bangunan') ?>">
              <div class="invalid-feedback">
                <?= $validation->getError('luas_bangunan'); ?>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="basicInput">Deskripsi</label>
              <textarea class="form-control <?= ($validation->hasError('deskripsi_properti')) ? 'is-invalid' : ''; ?>" name="deskripsi_properti" rows="4" placeholder="Deskripsi Properti"
                style="resize: none;"><?= old('deskripsi_properti') ?></textarea>
                <div class="invalid-feedback">
                <?= $validation->getError('deskripsi_properti'); ?>
              </div>
            </div>
            <div class="form-group mt-3">
              <label for="basicInput" class="mb-1">Dokumen Kepemilikan</label>
              <ul class="list-unstyled mb-0">
                <li class="d-inline-block me-2 mb-1">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="dokumen_kepemilikan" id="dokumen_kepemilikan"
                      value="SHM">
                    <label class="form-check-label" for="dokumen_kepemilikan">
                      SHM
                    </label>
                  </div>
                </li>
                <li class="d-inline-block me-2 mb-1">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="dokumen_kepemilikan" id="dokumen_kepemilikan"
                      value="SHGB">
                    <label class="form-check-label" for="dokumen_kepemilikan">
                      SHGB
                    </label>
                  </div>
                </li>
                <li class="d-inline-block me-2 mb-1">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="dokumen_kepemilikan" id="dokumen_kepemilikan"
                      value="AJB">
                    <label class="form-check-label" for="dokumen_kepemilikan">
                      AJB
                    </label>
                  </div>
                </li>
              </ul>
            </div>
            <div class="form-group">
              <label for="basicInput">Harga</label>
              <input type="text" class="form-control <?= ($validation->hasError('harga_properti')) ? 'is-invalid' : ''; ?>" name="harga_properti" placeholder="Harga Properti"  value="<?= old('harga_properti') ?>">
              <div class="invalid-feedback">
                <?= $validation->getError('harga_properti'); ?>
              </div>
            </div>
            <div class="form-group">
              <label for="basicInput">Foto Properti</label>
              <input type="file" class="form-control <?= ($validation->hasError('foto_properti')) ? 'is-invalid' : ''; ?>" name="foto_properti">
              <div class="invalid-feedback">
                <?= $validation->getError('foto_properti'); ?>
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
<script>
  $(document).ready(function () {
    $("#provinsi").on('change', function () {
      $("#kabupaten").empty();
      var id_provinsi = $(this).val();
      $.ajax({
        type: "GET",
        url: "<?= site_url('PropertiController/getCity') ?>",
        data: {
          'id_provinsi': id_provinsi,
        },
        dataType: "json",
        success: function (data) {
          console.log(data);
          var results = data["rajaongkir"]["results"];
          for (var i = 0; i < results.length; i++) {
            $("#kabupaten").append($('<option>', {
              value: results[i]['type'] + " " + results[i]['city_name'],
              text: results[i]['type'] + " " + results[i]['city_name']
            }));
          }
          $("#province").val($("#provinsi option:selected").text());
        },
      });
    });
  });
</script>
<?= $this->endSection(); ?>