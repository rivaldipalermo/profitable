<?= $this->extend('Admin/layout') ?>
<?= $this->section('content'); ?>
<div class="page-heading">
    <h1><?= $title; ?></h1>
</div>
<div class="page-content">
    <section class="row">
        <div class="col-12 col-lg-12">
            <div class="row">
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        
                        <!-- <div class="card-body px-3 py-4-5">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="stats-icon purple">
                                        <i class='iconly-boldShow'></i>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h6 class="text-muted font-semibold">Profile Views</h6>
                                    <h6 class='font-extrabold mb-0'>112.000</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-3 py-4-5">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="stats-icon blue">
                                        <i class='iconly-boldProfile'></i>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h6 class="text-muted font-semibold">Followers</h6>
                                    <h6 class='font-extrabold mb-0'>183.000</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-3 py-4-5">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="stats-icon green">
                                        <i class='iconly-boldAdd-User'></i>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h6 class="text-muted font-semibold">Following</h6>
                                    <h6 class='font-extrabold mb-0'>80.000</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-3 py-4-5">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="stats-icon red">
                                        <i class='iconly-boldBookmark'></i>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h6 class="text-muted font-semibold">Saved Post</h6>
                                    <h6 class='font-extrabold mb-0'>112</h6>
                                </div> -->


                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-md-8">
                                    <h3 class="text-muted font-semibold">BIODATA</h6>
                                </div> -->
            </div>
            <div class="row">
                <div class="col-12 col-xl-12">
                    <div class="card">
                        <div class="card-header">
                            
                        </div>
                       
                        
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover table-lg">
                                    <thead>

                                    <!-- <form action="/UserController/biodata" method="POST"> -->
                       <!--    FORM BIODATA       -->
                                <tr><td>
                            <form action="/UserController/biosave" method="POST">

                                                  
  <input type="text" class="form-control" placeholder="Nama Lengkap*" id="nama" name="nama" required
  oninvalid="this.setCustomValidity('Nama Lengkap tidak boleh kosong')"
  oninput="this.setCustomValidity('')"/>
</td>
  <td>
  <input type="text" class="form-control" placeholder="Nama Panggilan" id="panggilan" name="panggilan">
</td>
</tr>
</div>
  <tr><td>
  <input placeholder="Tanggal Lahir*" type="text" class="form-control"
  onfocus="(this.type='date')" id="tl" name="tl" required
  oninvalid="this.setCustomValidity('Tanggal lahir tidak boleh kosong')"
  oninput="this.setCustomValidity('')"/>              
  <!-- <input type="date" class="form-control" placeholder="Tanggal Lahir"> -->
</td>
</tr>
    <tr><td colspan=2>
    <!-- <input type="text" class="form-control" placeholder="Phone*" > -->
    <input type="text" name="phone" id="phone" class="form-control" placeholder="Phone*" onkeypress="return hanyaAngka(event)" required
  oninvalid="this.setCustomValidity('Phone tidak boleh kosong')"
  oninput="this.setCustomValidity('')"/>
</tr></td>
    <tr><td>
    <div class="input-group mb-3">
    <select name="provinsi" id="provinsi" name="provinsi" class="form-control input-lg" required
  oninvalid="this.setCustomValidity('Provinsi tidak boleh kosong')"
  oninput="this.setCustomValidity('')">
                                <option value="">Select provinsi</option>
                                <?php
                                foreach($provinsi as $row)
                                {
                                    echo '<option value="'.$row["provinsi_id"].'">'.$row["provinsi_name"].'</option>';
                                }
                                ?>
                            </select>
</div></td>
<td>
<div class="input-group mb-3">
<select name="kota" id="kota" name="kota" class="form-control input-lg" required
  oninvalid="this.setCustomValidity('Kota tidak boleh kosong')"
  oninput="this.setCustomValidity('')">
                                <option value="">Select kota</option>
                            </select>
</div>
</td>
<tr><td colspan=2>
<input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat" aria-label="Recipient's username" aria-describedby="basic-addon2" required
  oninvalid="this.setCustomValidity('Enter User Name Here')"
  oninput="this.setCustomValidity('')"/>
</td>
</tr>
<tr><td>
<div class="input-group mb-3">
  <select class="form-select" id="pekerjaan" name="pekerjaan" required
  oninvalid="this.setCustomValidity('Pekerjaan tidak boleh kosong')"
  oninput="this.setCustomValidity('')">
    <option selected value="">Pekerjaan*</option>
    <option value="Karyawan">Karyawan</option>
    <option value="Wiraswasta">Wiraswasta</option>
    <option value="Pelajar">Pelajar</option>
    <option value="Ibu Rumah Tangga">Ibu Rumah Tangga</option>
    <option value="Tidak Bekerja">Tidak Bekerja</option>
    <option value="Pensiunan">Pensiunan</option>
  </select>
</div>
</td>
<td>
<div class="input-group mb-3">
  <select class="form-select" id="sumber" name="sumber" required
  oninvalid="this.setCustomValidity('Sumber Dana tidak boleh kosong')"
  oninput="this.setCustomValidity('')">
    <option selected value="">Sumber Dana*</option>
    <option value="Gaji">Gaji</option>
    <option value="Hasil Usaha">Hasil Usaha</option>
    <option value="Warisan">Warisan</option>
    <option value="Tabungan">Tabungan</option>
    <option value="Lainnya">Lainnya</option>
  </select>
</div>
</td>
<tr><Td>
 <div class="col-md-8">
     <h3 class="text-muted font-semibold">INFORMASI BANK</h6>
  </div>
  <tr><td>
  <input type="text" class="form-control" placeholder="Nama Bank*" id="nbank" name="nbank" required
  oninvalid="this.setCustomValidity('Nama Bank tidak boleh kosong')"
  oninput="this.setCustomValidity('')"/>
</td>
  <td>
  <input type="text" class="form-control" placeholder="Cabang*" id="cabang" name="cabang" required
  oninvalid="this.setCustomValidity('Cabang tidak boleh kosong')"
  oninput="this.setCustomValidity('')"/>
</td>
</tr>

<tr><td>
  <input type="text" class="form-control" placeholder="Atas Nama*" id="anama" name="anama" required
  oninvalid="this.setCustomValidity('Atas Nama tidak boleh kosong')"
  oninput="this.setCustomValidity('')"/>
</td>
  <td>
  <input type="text" class="form-control" placeholder="Nomor Rekening*" id="norek" name="norek" required
  oninvalid="this.setCustomValidity('Nomor Rekening tidak boleh kosong')"
  oninput="this.setCustomValidity('')"/>
</td>
</tr>

<tr>
    <td>
    <button type="submit" class="btn btn-primary">Submit</button>
    </td>
</tr>





</tr>
                            </form>
<script>

$(document).ready(function(){

    $('#provinsi').change(function(){

        var provinsi_id = $('#provinsi').val();

        var action = 'get_kota';

        if(provinsi_id != '')
        {
            $.ajax({
                url:"<?php echo base_url('/UserController/action'); ?>",
                method:"POST",
                data:{provinsi_id:provinsi_id, action:action},
                dataType:"JSON",
                success:function(data)
                {
                    var html = '<option value="">Select kota</option>';

                    for(var count = 0; count < data.length; count++)
                    {

                        html += '<option value="'+data[count].kota_id+'">'+data[count].kota_name+'</option>';

                    }

                    $('#kota').html(html);
                }
            });
        }
        else
        {
            $('#kota').val('');
        }
        $('#city').val('');
    });

    $('#kota').change(function(){

        var kota_id = $('#kota').val();

        var action = 'get_city';

        if(kota_id != '')
        {
            $.ajax({
                url:"<?php echo base_url('/UserController/action'); ?>",
                method:"POST",
                data:{kota_id:kota_id, action:action},
                dataType:"JSON",
                success:function(data)
                {
                    var html = '<option value="">Select City</option>';

                    for(var count = 0; count < data.length; count++)
                    {
                        html += '<option value="'+data[count].city_id+'">'+data[count].city_name+'</option>';
                    }

                    $('#city').html(html);
                }
            });
        }
        else
        {
            $('#city').val('');
        }

    });

});
function hanyaAngka(event) {
            var angka = (event.which) ? event.which : event.keyCode
            if (angka != 46 && angka > 31 && (angka < 48 || angka > 57))
                return false;
            return true;
        }

</script>
<!-- 

  <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
  <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
</div>


  <span class="input-group-text">$</span>
  <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
  <span class="input-group-text">.00</span>
</div>


  <input type="text" class="form-control" placeholder="Username" aria-label="Username">
  <span class="input-group-text">@</span>
  <input type="text" class="form-control" placeholder="Server" aria-label="Server">
</div>

<div class="input-group">
  <span class="input-group-text">With textarea</span>
  <textarea class="form-control" aria-label="With textarea"></textarea> -->
                            
                                          
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?= $this->endSection(); ?>