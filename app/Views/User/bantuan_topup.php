<?= $this->extend('Admin/layout') ?>
<?= $this->section('content'); ?>
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

<table style="margin-left: 20px; margin-top: 8px; font-size: 12px; border-bottom: 1px solid #F1F1F2; border-collapse: collapse;" class="table-striped">
<tbody>                   
  <tr>
    <td style="padding:5px; padding-left: 10px; text-align: left; width: 240px;">Status</td>  
    <td style="padding:5px; padding-left: 10px; text-align: left; width: 270px;"><?= $table['status'] == "pending" ? 'Menunggu Pembayaran' : ( $table['status'] == 'success' ? 'Pembayaran Berhasil' : 'Pembayaran Gagal' ) ;?></td>
    <td style="padding:5px; padding-left: 10px; text-align: right; width: 120px;"></td>
  </tr>
  <tr>
    <td style="padding:5px; padding-left: 10px; text-align: left; width: 240px;">Metode Pembayaran</td>
    <td style="padding:5px; padding-left: 10px; text-align: left; width: 270px;"><?= $table['jenis_pembayaran'];?></td>
    <td style="padding:5px; padding-left: 10px; text-align: right; width: 120px;"></td>
  </tr>
  <tr>
    <td style="padding:5px; padding-left: 10px; text-align: left; width: 240px;">Saldo</td>
    <td style="padding:5px; padding-left: 10px; text-align: left; width: 270px;"><?= "Rp " . number_format($table['saldo'], 0, ",", ".");?></td>
    <td style="padding:5px; padding-left: 10px; text-align: right; width: 120px;"></td>
  </tr>
  <tr>
    <td style="padding:5px; padding-left: 10px; text-align: left; width: 240px;">Tanggal</td>
    <td style="padding:5px; padding-left: 10px; text-align: left; width: 270px;"><?= $table['created_at'];?></td>
    <td style="padding:5px; padding-left: 10px; text-align: right; width: 120px;"></td>
  </tr>
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
</div>
</section>

<section class="row">
<p>
  <a class="btn btn-primary" data-bs-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Saya sudah transfer, tapi saldo belum masuk</a>
</p>
<div class="row">
  <div class="col">
    <div class="collapse multi-collapse" id="multiCollapseExample1">
      <div class="card card-body">
        Harap tunggu hingga admin melakukan verifikasi transfer, biasanya akan memakan waktu 1 hari kerja. Anda bisa mengupload bukti pembayaran untuk mempercepat proses verifikasi menjadi hingga 3-5 jam kerja.
      </div>
    </div>
  </div>
</div>

<p>
  <a class="btn btn-primary" data-bs-toggle="collapse" href="#multiCollapseExample2" role="button" aria-expanded="false" aria-controls="multiCollapseExample2">Saya sudah transfer, tapi status masih Menunggu Pembayaran</a>
</p>
<div class="row">
  <div class="col">
    <div class="collapse multi-collapse" id="multiCollapseExample2">
      <div class="card card-body">
        Status belum berubah sampai admin melakukan verifikasi transfer, biasanya akan memakan waktu 1 hari kerja. Anda bisa mengupload bukti pembayaran untuk mempercepat proses verifikasi menjadi hingga 3-5 jam kerja.
      </div>
    </div>
  </div>
</div>


<p>
  <a class="btn btn-primary" data-bs-toggle="collapse" href="#multiCollapseExample3" role="button" aria-expanded="false" aria-controls="multiCollapseExample3">Saya sudah transfer, tapi status Rejected</a>
</p>
<div class="row">
  <div class="col">
    <div class="collapse multi-collapse" id="multiCollapseExample3">
      <div class="card card-body">
        Tim admin kami sudah memutuskan kalau transfer yang anda lakukan tidak valid, silakan coba lagi dengan mengupload bukti transaksi. Bila ada keluhan dan pertanyaan silakan hubungi profitable@gmail.com. Kami akan membalas secepat mungkin pada jam kerja.
      </div>
    </div>
  </div>
</div>

<p>
  <a class="btn btn-primary" data-bs-toggle="collapse" href="#multiCollapseExample4" role="button" aria-expanded="false" aria-controls="multiCollapseExample4">Masalah lainnya</a>
</p>
<div class="row">
  <div class="col">
    <div class="collapse multi-collapse" id="multiCollapseExample4">
      <div class="card card-body">
      Bila ada keluhan dan pertanyaan lain silakan hubungi profitable@gmail.com. Kami akan membalas secepat mungkin pada jam kerja.
      </div>
    </div>
  </div>
</div>
</section>


</div>


<?= $this->endSection(); ?>