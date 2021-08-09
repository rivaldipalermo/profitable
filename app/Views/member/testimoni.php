<?= $this->extend('Pengaturan/layout') ?>
<?= $this->section('pengaturan'); ?>
<div class="row">
    <div class="col-xl jss255 jss109 jss105 mx-2 my-3 ">
        <div class="feature-text">
            <div class="box4">
                <a class="col-md-9" href="<?= base_url('pengaturan'); ?>"> </a>
            </div>
            <form action="/testimoni/storeTesti" method="POST">
                <div class="box9 float-right mr-5 mt-5">
                    <div class="form-row">
                        <div class="form-group">
                            <label for="basicInput" class="mb-2">
                                <h5>Testimoni</h5>
                            </label>
                            <textarea class="form-control" name="testimoni" placeholder="Testimoni" rows="3"></textarea>
                        </div>
                        <div class="box12" style="position: relative; left: 220px; width: 150px; height: 10px;">
                            <center>
                                <button type="submit" class="btn btn-primary" style="position: relative; bottom: 50px; border-radius: 20px;">Submit</button>
                            </center>
                        </div>
                        <input type="hidden" name="user_id" id="user_id" value="<?= user()->id ?>">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

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