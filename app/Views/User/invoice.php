<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url();?>/assets/css/bootstrap.css">

    <link rel="stylesheet" href="<?= base_url();?>/assets/vendors/iconly/bold.css">

    <link rel="stylesheet" href="<?= base_url();?>/assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="<?= base_url();?>/assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="<?= base_url();?>/assets/css/app.css">
    <link rel="shortcut icon" href="<?= base_url();?>/assets/images/favicon.svg" type="image/x-icon">
</head>

<style>
                .table-striped > tbody > tr:nth-of-type(2n+1) {
                    background-color: #DDD !important;
                }

                .deals-info {
                    padding: 8px;
                    border-radius: 4px;
                    border: solid 1px #ecdb77;
                    background-color: #fffbcd;
                }

                .deals-info > span {
                    font-size: 12px;
                    color: rgba(0, 0, 0, .54);
                }

                @media print {
                    .hidden-print {
                        display: none !important;
                    }
                }
</style>
<div class="container">
<div class="row">
<div class="col">
<div class="d-flex justify-content-between">
  <a style="color:green;text-decoration:none;" href="javascript:window.print()">
    <span style="color:#42B549;text-decoration:none;font-size:0.83em">
    Cetak
    </span>
  </a>
  <div class="logo">
    <a href="/user" style="font-size: 2rem; font-weight: 700;">Profitable</a>
  </div>
  <div class="toggler">
    <a href="#" class='sidebar-hide d-xl-none d-block'><i class='bi bi-x bi-middle'></i></a>
  </div>
</div>
<div class="page-heading">
    <h3><?= $title; ?></h3>
    Invoice ini merupakan bukti pembayaran yang sah.<br>
    PT. Profitable <br>
    IS-3 <br>
    022 XXX-XXXX
</div>

<table style="margin-left: 20px; margin-top: 8px; font-size: 12px; border-bottom: 1px solid #F1F1F2; border-collapse: collapse;" class="table-striped">
<tbody>                   
  <tr>
    <td style="padding:5px; padding-left: 10px; text-align: left; width: 240px;">Status</td>  
    <td style="padding:5px; padding-left: 10px; text-align: left; width: 270px;"><?= $table['status'];?></td>
    <td style="padding:5px; padding-left: 10px; text-align: right; width: 120px;"></td>
  </tr>
  <tr>
    <td style="padding:5px; padding-left: 10px; text-align: left; width: 240px;">Metode Pembayaran</td>
    <td style="padding:5px; padding-left: 10px; text-align: left; width: 270px;"><?= $table['jenis_pembayaran'];?></td>
    <td style="padding:5px; padding-left: 10px; text-align: right; width: 120px;"></td>
  </tr>
  <tr>
    <td style="padding:5px; padding-left: 10px; text-align: left; width: 240px;">Saldo</td>
    <td style="padding:5px; padding-left: 10px; text-align: left; width: 270px;"><?= $table['saldo'];?></td>
    <td style="padding:5px; padding-left: 10px; text-align: right; width: 120px;"></td>
  </tr>
  <tr>
    <td style="padding:5px; padding-left: 10px; text-align: left; width: 240px;">Tanggal</td>
    <td style="padding:5px; padding-left: 10px; text-align: left; width: 270px;"><?= $table['created_at'];?></td>
    <td style="padding:5px; padding-left: 10px; text-align: right; width: 120px;"></td>
  </tr>
</tbody>
</table>

<table style="margin-left: 20px; margin-top: 8px; font-size: 12px; border-collapse: collapse;">
<tbody>
  <tr>
   <td style="padding:5px; padding-top: 2px; padding-bottom: 2px; padding-left: 10px; text-align: left; width: 240px;"></td>
   <td style="padding:5px; padding-top: 2px; padding-bottom: 2px; padding-left: 10px; text-align: left; width: 270px;">
 <table>
    <tbody>
  <tr>
    <td style="font-weight: 600; font-size: 14px;  color: #42B549;">Total Bayar</td>
  </tr>
  </tbody>
  </table>
    </td>
    <td style="padding:5px; padding-top: 2px; padding-bottom: 2px; padding-left: 10px; text-align: right; font-size: 14px; color: #42B549; width: 120px;"><?= $table['saldo'];?><span style="color: black"> *)</span></td>
  </tr>
  <tr>
    <td colspan="3" style="padding:5px; padding-top: 20px; padding-bottom: 2px; padding-left: 10px; text-align: left; font-size: 14px;"><i>*) Harga tercantum sudah termasuk Pajak Pertambahan Nilai (PPN) sebesar 10%</i></td>
  </tr>                  
  </tbody>
</table>


</div>
</div>
</div>