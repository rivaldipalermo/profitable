<?= $this->extend('Pengaturan/layout') ?>
<?= $this->section('pengaturan'); ?>
            <div class="row">
                <div class="col-xl jss255 jss109 jss105 mx-2 my-3 ">
                    <div class="feature-text">
                        <div class="box4 ">
                            <a class="col-md-9" href="<?= base_url('pengaturan');?>">Profil</a>
                        </div>
                        <div class="box8 ml-5 mt-5 float-left">
                            <img src="<?= base_url();?>/home/img/12.png" alt="Image" style="width: 250px;">
                            <center>
                                <input type="file" class="upload-box" accept="Image/*">
                            </center>
                        </div>
                        <div class="box9 float-right mr-5 mt-5">
                            <form>
                              <div class="form-row">
                                <h6></h6>
                                <div class="form-group col-md-6">
                                  <input type="email" class="form-control" id="inputEmail4" placeholder="Nama Lengkap">
                              </div>
                              <div class="form-group col-md-6">
                                  <input type="name" class="form-control" id="inputname4" placeholder="Nama Panggilan">
                              </div>
                              <div class="form-group col-md-6 float-left">
                                  <label for="inputname4"><h6>Tanggal Lahir</h6></label>
                                  <input type="date" class="form-control" id="inputname4">
                              </div>
                              <div class="form-group col-lg-12">
                                  <input type="name" class="form-control" id="inputname4" placeholder="Phone">
                              </div>
                              <div class="form-group col-md-6">
                                <select class="form-control" id="exampleFormControlSelect1">
                                  <option value="" selected disabled>Provinsi</option>
                                  <option>Cigondewa</option>
                                  <option>Tegalega</option>
                              </select>
                          </div>
                          <div class="form-group col-md-6">
                            <select class="form-control" id="exampleFormControlSelect1">
                              <option value="" selected disabled>Kota</option>
                              <option>Cimahi</option>
                              <option>Dayeuh</option>
                          </select>
                      </div>
                      <div class="form-group col-lg-12">
                          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Address"></textarea>
                      </div>

                      <div class="form-group col-md-6">
                        <select class="form-control" id="exampleFormControlSelect1">
                          <option value="" selected disabled>Pekerjaan</option>
                          <option>2</option>
                          <option>3</option>
                          <option>4</option>
                          <option>5</option>
                      </select>
                  </div>
                  <div class="form-group col-md-6">
                    <select class="form-control" id="exampleFormControlSelect1" >
                      <option value="" selected disabled>Sumber Dana</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                  </select>
              </div>
              <div class="form-group col-md-6">
                <select class="form-control" id="exampleFormControlSelect1">
                  <option value="" selected disabled>Nama Bank</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
              </select>
          </div>
          <div class="form-group col-md-6">
              <input type="name" class="form-control" id="inputname4" placeholder="Cabang">
          </div>
          <div class="form-group col-md-6">
              <input type="name" class="form-control" id="inputname4" placeholder="Atas Nama">
          </div>
          <div class="form-group col-md-6">
              <input type="name" class="form-control" id="inputname4" placeholder="Nomor Rekening">
          </div>

          <div class="box12 float-left">
              <input type="name" class="form-control mt-5" style="position: relative; top: 55px;" id="inputname4" placeholder="No KTP">
          </div>
          <div class="box11 float-right">
            <img src="<?= base_url();?>/home/img/ktp.png" style="width: 500px; position: relative; right: 120px; bottom: 30px;">
            <center>
                <input type="file" class="upload-box" accept="Image/*" style="position: relative; bottom: 50px;">
            </center>
        </div>   
    </form>
    <div class="box12 float-left">
      <input type="name" class="form-control mt-5" style="position: relative; top: 55px;" id="inputname4" placeholder="No KTP">
  </div>
  <div class="box11 float-right">
    <img src="<?= base_url();?>/home/img/npwp.jpg" style="width: 200px; position: relative; left: 50px; top: 60px;">
    <center>
        <input type="file" class="upload-box" accept="Image/*" style="position: relative; top: 72px;">
    </center>
</div> 
<div class="box12" style="position: relative; left: 220px; width: 150px; height: 10px;">
    <center>
     <button type="submit" class="btn btn-primary" style="position: relative; bottom: 50px; border-radius: 20px;">Submit</button>
    </center>
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
</html>
<?= $this->endSection(); ?>