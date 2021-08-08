<?= $this->extend('member/layout') ?>
<?= $this->section('member'); ?>
<br>
<div class="box1 mx-5 float-left">
    <h4 class="warna">SALDO WALLET</h4>
    <?php if(!isset($saldo)) : ?>
        <a href="/user/create_wallet" class="btn btn-primary">Buat E-Wallet</a>
    <?php else : ?>
        <h5 class="warna"><?= "Rp " . number_format($saldo['saldo'],0,',','.'); ?></h5>
    <?php endif; ?>
    <div class="feature-tp">
        <?php if(isset($saldo)) : ?>
        <a href="about.html" class="btn lt-btn">Top Up</a>
        <button type="button" class="btn lt-btn" data-toggle="modal" data-target="#exampleModal">Pencairan</button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content center">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Pencairan</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row row-cols-2">
                            <div class="col">Saldo Kamu :</div>
                            <div class="col">Rp </div>
                            <br><br>
                        </div>
                        <div class="row row-cols-2">
                            <div class="col">Total Pencairan :</div>
                            <div class="col"><input type="text" class="form-control" id="rupiah" placeholder="Rp" onkeypress="return wajibAngka(event)"> </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <button type="button" class="btn btn-primary">Cairkan</button>
                    </div>
                </div>
            </div>
        </div>
        <a href="about.html" class="btn lt-btn">Reinvest</a>
        <?php endif; ?>
    </div>
</div>
<div class="box2 mr-5 float-right">
    <h7>RETURN TIMELINE</h7><br>
    <table border="0" rules="rows" width="350px" class="mt-2">
        <tr>
            <th width="50%">
                <h6>Event</h6>
            </th>
            <th width="50%">
                <h6 class="float-right">Tanggal</h6>
            </th>
        </tr>
        <tr>
            <td>
                <h6></h6>
            </td>
            <td>
                <h6 class="float-right"></h6>
            </td>
        </tr>


    </table>
</div>
<br>
<div class="box1 mx-5 float-left">
    <h4 class="warna">PERMODALAN AKTIF</h4>
    <h5 class="warna">Rp.0</h5>
    <h6 class="warna">Potensi Profit : Rp.0</h6>
</div>
<div class="feature-text">
    <div class="box5 mx-5 mt-3 mb-5 float-left justify-content-center">
        <div class="box3 float-left text-center">
            <H6 class="warna">TOTAL INVESTASI</H6>
            <h7 class="warna">RP.0</h7>
        </div>
        <div class="box3 float-left text-center">
            <H6 class="warna">PROVIT DITERIMA</H6>
            <h7 class="warna">RP.0</h7>
        </div>
        <div class="box3 float-right text-center">
            <H6 class="warna">PENDING TRANSFER</H6>
            <h7 class="warna">RP.0</h7>
        </div>
        <div class="box3 float-right text-center">
            <H6 class="warna">PENDING PENCARIAN</H6>
            <h7 class="warna">RP.0</h7>
        </div>
    </div>
</div>
<div class="box6 mx-5 mb-3 float-left text-center">
    <h6>TEMUKAN PROYEK PROPERTI YANG COCOK UNTUKMU</h6>
    <a href="x" class="box7 mt-5">Modali Sekarang</a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<!-- Feature End -->

<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url(); ?>/home/lib/easing/easing.min.js"></script>
<script src="<?= base_url(); ?>/home/lib/owlcarousel/owl.carousel.min.js"></script>
<script src="<?= base_url(); ?>/home/lib/tempusdominus/js/moment.min.js"></script>
<script src="<?= base_url(); ?>/home/lib/tempusdominus/js/moment-timezone.min.js"></script>
<script src="<?= base_url(); ?>/home/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

<!-- Contact Javascript File -->
<script src="mail/jqBootstrapValidation.min.js"></script>
<script src="mail/contact.js"></script>

<!-- Template Javascript -->
<script src="<?= base_url(); ?>/home/js/main.js"></script>
</body>

<script>
    var rupiah = document.getElementById("rupiah");
    rupiah.addEventListener("keyup", function(e) {
        // tambahkan 'Rp.' pada saat form di ketik
        // gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
        rupiah.value = formatRupiah(this.value, "Rp. ");
    });

    /* Fungsi formatRupiah */
    function formatRupiah(angka, prefix) {
        var number_string = angka.replace(/[^,\d]/g, "").toString(),
            split = number_string.split(","),
            sisa = split[0].length % 3,
            rupiah = split[0].substr(0, sisa),
            ribuan = split[0].substr(sisa).match(/\d{3}/gi);

        // tambahkan titik jika yang di input sudah menjadi angka ribuan
        if (ribuan) {
            separator = sisa ? "." : "";
            rupiah += separator + ribuan.join(".");
        }

        rupiah = split[1] != undefined ? rupiah + "," + split[1] : rupiah;
        return prefix == undefined ? rupiah : rupiah ? "Rp. " + rupiah : "";
    }

    function wajibAngka(evt) {
        var charCode = (evt.which) ? evt.which : event.keyCode
        if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;
    }
</script>


</html>
<?= $this->endSection(); ?>