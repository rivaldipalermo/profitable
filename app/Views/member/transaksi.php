<?= $this->extend('member/layout') ?>
<?= $this->section('member'); ?>
                        <br>
                        <h6 class="ml-5 float-left"><font color="#00008B">Daftar Transaksi</font></h6>
                        <h6 class="ml-5 float-left">|</h6>
                        <h6 class="ml-5 float-left">Filter</h6>

                    <select id="cars" name="cars" class="float-left ml-5">
                      <option value="volvo">-Semua Proyek-</option>
                      <option value="saab">Semua Proyek-</option>
                    </select>
                  </form>

                  <select id="cars" name="cars" class="float-left ml-5">
                      <option value="volvo">-Semua Tipe-</option>
                      <option value="saab">Invest</option>
                      <option value="mercedes">Return</option>
                      <option value="audi">Top Up</option>
                      <option value="audi">Pencairan</option>
                      <option value="audi">Refund</option>
                  </select>
              </form>

              <br><br>
              <table border="0" rules="rows" width="865px" class="mt-2 ml-5 mr-5">
                <tr>
                    <th class="text-center" width="5%">No</th>
                    <th class="text-center" width="15%">Tanggal</th>
                    <th class="text-center">Tipe Transaksi</th>
                    <th class="text-center">Properti</th>
                    <th class="text-center">Saldo Wallet</th>
                    <th class="text-center">Saldo Properti</th>
                    <th class="text-center">Total Saldo</th>
                </tr>
                <tr>
                    <td><h6 class="text-center">-</h6></td>
                    <td><h6 class="text-center">-</h6></td>
                    <td><h6 class="text-center">-</h6></td>
                    <td><h6 class="text-center">-</h6></td>
                    <td><h6 class="text-center">-</h6></td>
                    <td><h6 class="text-center">-</h6></td>
                    <td><h6 class="text-center">-</h6></td>
                </tr>
            </table>
            <br><br>
            <h6 class="text-center">Belum ada transaksi</h6>

        </div>
    </div>
</div>
</div>
</div>
</div>

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
</html>
<?= $this->endSection(); ?>