<?= $this->extend('Admin/layout') ?>
<?= $this->section('content'); ?>
<div class="container">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <div class="container">
            <div class="row">
              <div class="col-6">
                <h6>Batas Waktu Pembayaran:</h6>
              </div>
              <div class="col-6">
                <p class="right" id="countdown">00:00</p>
              </div>
            </div>
            <div class="row">
              <div class="col-12">
                <center>
                  <h3 class="mt-4">Menunggu Pembayaran:</h3>
                </center>
                <p class="mt-4">OrderID:</p>
                <b>xxx</b>
                <p class="mt-4">Total Pembayaran:</p>
                <b>Rp.1000</b>
                <div class="card mt-4" style="border: 1px solid rgba(0,0,0,.125) !important;">
                  <div class="card-body">
                    <p><abbr title="attribute">Cara Pembayaran:</abbr></p>
                    <p class="lead">
                      1. Buka aplikasi M-Banking di smartphone kamu
                    </p>

                    <p class="lead">
                      2. Masuk ke halaman Notifikasi
                    </p>

                    <p class="lead">
                      3. Cek Permintaan pengisian saldo
                    </p>

                    <p class="lead">
                      4. Jika jumlah tagihan sudah benar,silahkan klik bayar
                    </p>

                    <p class="lead">
                      5. Lalu tunggu pembayaranmu terverifikasi
                    </p>
                  </div>
                </div>
                <center>
                  <p>Pesananmu baru akan diteruskan setelah pembayaran terverifikasi.</p>
                </center>
                <button type="button" class="btn btn-outline-success btn-block">Cek Status Pembayaran</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
  var timeInSecs;
  var ticker;

  function startTimer(secs) {
    timeInSecs = parseInt(secs);
    ticker = setInterval("tick()", 1000);
  }

  function tick() {
    var secs = timeInSecs;
    if (secs > 0) {
      timeInSecs--;
    } else {
      clearInterval(ticker);
      startTimer(172800); // start again
    }

    var hours = Math.floor(secs / 3600);
    secs %= 3600;
    var mins = Math.floor(secs / 60);
    secs %= 60;
    var pretty = ((hours < 10) ? "0" : "") + hours + ":" + ((mins < 10) ? "0" : "") + mins + ":" + ((secs < 10) ? "0" : "") + secs;
    document.getElementById("countdown").innerHTML = pretty;
  }

  startTimer(86400); // 24 hours in seconds
</script>
<?= $this->endSection(); ?>