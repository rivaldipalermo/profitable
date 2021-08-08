<?= $this->extend('Pengaturan/layout') ?>
<?= $this->section('pengaturan'); ?>
<div class="row">
  <div class="col-xl jss255 jss109 jss105 mx-2 my-3 ">
    <div class="feature-text">
      <div class="box4 ">
        <a class="col-md-9" href="<?= base_url('pengaturan');?>"> </a>
      </div>
        <form action="/Pengaturan/biosave" method="POST" enctype="multipart/form-data" >
      <div class="box8 ml-5 mt-5 float-left">
              <img src="<?= base_url(); ?>/assets/images/member/<?= $mb['image']; ?>" id="imgView" class="card-img-top img-fluid">
              <center>
                <input type="file" id="inputFile" name="image" class="upload-box" aria-describedby="inputGroupFileAddon01">
              </center>
      </div>
      <div class="box9 float-right mr-5 mt-5">
          <div class="form-row">
            <h6></h6>
            <div class="form-group col-md-6">
              <label for="inputname4"><h5>Nama Lengkap</h5></label>
              <input type="name" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap" value="<?= $mb['nama']; ?>" 
              oninvalid="alert('Silahkan Masukan Nama Lengkap!');" required>
            </div>
            <div class="form-group col-md-6">
              <label for="inputname4"><h5>Nama Panggilan</h5></label>
              <input type="name" class="form-control" id="panggilan" name="panggilan" placeholder="Nama Panggilan" value="<?= $mb['panggilan']; ?>" 
              oninvalid="alert('Silahkan Masukan Nama Panggilan');" required>
            </div>
            <div class="form-group col-md-6 float-left">
              <label for="inputname4"><h5>Tanggal Lahir </h5></label>
              <input type="date" class="form-control" id="tl" name="tl" value="<?= $mb['tl']; ?>" 
              oninvalid="alert('Silahkan Masukan Tanggal Lahir');" required>
            </div>
            <div class="form-group col-lg-12">
              <label for="inputname4"><h5>Nomor Telepon</h5></label>
              <input type="name" class="form-control" id="phone" name="phone" placeholder="Nomor Telepon" value="<?= $mb['phone']; ?>" oninvalid="alert('Silahkan Masukan Nomor Telp');" onkeypress="return hanyaAngka(event)" required>
            </div>
            <div class="form-group col-md-6">
              <label for="inputname4"><h5>Provinsi</h5></label>
              <select class="form-control" id="provinsi" name="provinsi"  oninvalid="alert('Silahkan Masukan Provinsi');" required>
                <option value="<?= $mb['provinsi']; ?>"><?= $mb['provinsi']; ?></option>
                <?php foreach ($provinsi as $p) : ?>
                  <option value="<?= $p->province_id; ?>"><?= $p->province; ?></option>
                <?php endforeach ?>
              </select>
            </div>
            <div class="form-group col-md-6">
              <label for="inputname4"><h5>Kota</h5></label>
              <select class="form-control" id="kabupaten" name="kota"oninvalid="alert('Silahkan Masukan Kota');"  required>
                <option value="<?= $mb['kota']; ?>"><?= $mb['kota']; ?></option>

              </select>
            </div>
            <div class="form-group col-lg-12">
              <label for="inputname4"><h5>Alamat</h5></label>
              <textarea class="form-control" id="alamat" rows="3" placeholder="Alamat" name="alamat" oninvalid="alert('Silahkan Masukan Alamat');" required><?= $mb['alamat']; ?></textarea>
            </div>

            <div class="form-group col-md-6">
              <label for="inputname4"><h5>Pekerjaan</h5></label>
              <select class="form-control" id="pekerjaan" name="pekerjaan" oninvalid="alert('Silahkan Masukan Pekerjaan');" required>
                <option value="<?= $mb['pekerjaan']; ?>" selected disabled><?= $mb['pekerjaan']; ?></option>
                <option value="Karyawan">Karyawan</option>
                <option value="Wiraswasta">Wiraswasta</option>
                <option value="Pelajar">Pelajar</option>
                <option value="Ibu Rumah Tangga">Ibu Rumah Tangga</option>
                <option value="Tidak Bekerja">Tidak Bekerja</option>
                <option value="Pensiunan">Pensiunan</option>
              </select>
            </div>
            <div class="form-group col-md-6">
              <label for="inputname4"><h5>Sumber Dana</h5></label>
              <select class="form-control" id="sumber" name="sumber" oninvalid="alert('Silahkan Masukan Sumber Dana');" required >
                <option value="<?= $mb['sumber']; ?>" selected disabled><?= $mb['sumber']; ?></option>
                <option value="Gaji">Gaji</option>
                <option value="Hasil Usaha">Hasil Usaha</option>
                <option value="Warisan">Warisan</option>
                <option value="Tabungan">Tabungan</option>
                <option value="Lainnya">Lainnya</option>
              </select>
            </div>
            <div class="form-group col-md-6">
              <label for="inputname4"><h5>Nama Bank</h5></label>
              <input type="name" class="form-control" id="nbank" name="nbank" placeholder="Nama Bank"value="<?= $mb['nbank']; ?>" oninvalid="alert('Silahkan Masukan Nama Bank');" required>
            </div>
            <div class="form-group col-md-6">
              <label for="inputname4"><h5>Cabang</h5></label>
              <input type="name" class="form-control" id="cabang" name="cabang" placeholder="Cabang" value="<?= $mb['cabang']; ?>" oninvalid="alert('Silahkan Masukan Cabang');" required>
            </div>
            <div class="form-group col-md-6">
              <label for="inputname4"><h5>Atas Nama</h5></label>
              <input type="name" class="form-control" id="anama" name="anama" placeholder="Atas Nama" value="<?= $mb['anama']; ?>" oninvalid="alert('Silahkan Masukan Atas Nama');" required>
            </div>
            <div class="form-group col-md-6">
              <label for="inputname4"><h5>Nomor Rekening</h5></label>
              <input type="name" class="form-control" id="norek" name="norek" placeholder="Nomor Rekening" value="<?= $mb['norek']; ?>" oninvalid="alert('Silahkan Masukan Nomor Rekening');" onkeypress="return hanyaAngka(event)" required>
            </div>
            <div class="box12" style="position: relative; left: 220px; width: 150px; height: 10px;">
              <center>
               <button type="submit" class="btn btn-primary" style="position: relative; bottom: 50px; border-radius: 20px;">Submit</button>
             </center>
           </div>
           <input type="hidden" name="user_id" id="user_id" value="<?= user()->id ?>">
         </form>

         <script>
  $(document).ready(function() {
    $("#provinsi").on('change', function() {
      $("#kabupaten").empty();
      var id_provinsi = $(this).val();
      $.ajax({
        type: "GET",
        url: "<?= site_url('PropertiController/getCity') ?>",
        data: {
          'id_provinsi': id_provinsi,
        },
        dataType: "json",
        success: function(data) {
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
          function hanyaAngka(event) {
            var angka = (event.which) ? event.which : event.keyCode
            if (angka != 46 && angka > 31 && (angka < 48 || angka > 57))
              return false;
            return true;
          }

        </script>
        <script type="text/javascript">
                function readURL(input) {
                  if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    
                    reader.onload = function(e) {
                      $('#gambar').attr('src', e.target.result);
                    }
                    
    reader.readAsDataURL(input.files[0]); // convert to base64 string
  }
}

$("#file").change(function() {
  $('#gambar').show();
  readURL(this);
});
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>
  $("#inputFile").change(function(event) {  
    fadeInAdd();
    getURL(this);    
  });

  $("#inputFile").on('click',function(event){
    fadeInAdd();
  });

  function getURL(input) {    
    if (input.files && input.files[0]) {   
      var reader = new FileReader();
      var filename = $("#inputFile").val();
      filename = filename.substring(filename.lastIndexOf('\\')+1);
      reader.onload = function(e) {
        debugger;      
        $('#imgView').attr('src', e.target.result);
        $('#imgView').hide();
        $('#imgView').fadeIn(500);      
        $('.custom-file-label').text(filename);             
      }
      reader.readAsDataURL(input.files[0]);    
    }
    $(".alert").removeClass("loadAnimate").hide();
  }

  function fadeInAdd(){
    fadeInAlert();  
  }
  function fadeInAlert(text){
    $(".alert").text(text).addClass("loadAnimate");  
  }
</script>

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