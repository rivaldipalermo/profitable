<?= $this->extend('Admin/layout') ?>
<?= $this->section('content'); ?>
<div class="page-heading">
    <h3><?= $title; ?></h3>
</div>
<div class="page-content">
    <section class="row">
        <div class="col-12 col-lg-12">

        <span class="d-block p-2 bg-primary text-white">Batas waktu pembayaran:</span>        

<h1><p class="text-center">Menunggu Pembayaran.</p></h1>


<p><abbr title="attribute">Order ID:</abbr></p>


<p><abbr title="attribute">Total Pembayaran:</abbr></p>

<div class="card">
   <div class="card-body">
      <div class="p-3 mb-2 bg-info text-dark">
        <p><abbr title="attribute">Cara Pembayaran:</abbr></p>
           <p class="lead">
              1.
            </p>

           <p class="lead">
              2.
            </p>

           <p class="lead">
              3.
            </p>

           <p class="lead">
              4.
            </p>

           <p class="lead">
              5.
            </p>
      </div>
    </div>
</div>

<div class="col-12" >
     <button type="submit" class="btn btn-primary" >Cek Status Pembayaran</button>
         </div>


        </div>
    </section>
</div>
<?= $this->endSection(); ?>