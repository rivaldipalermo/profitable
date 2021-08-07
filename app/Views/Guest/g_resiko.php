<?= $this->extend('Guest/g_layout') ?>
<?= $this->section('content'); ?>

<body>
    <center>
    <div class="container" style="max-width: 960px;">
  <div class="row g-1">
    <div class="col-md-2"><br> <br>
      <img src="/assets/images/logo/capital_risk.png" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">

        <br>
        <h3> Capital Risk </h3>
        <p class="" style="text-align:justify">
            <br>
            Provesty akan melakukan analisis dan due diligence secara teliti,
            ketat dan seakurat mungkin dalam menyeleksi setiap proyek dan 
            properti yang masuk. Dengan tim kami yang sudah berpengalaman 
            puluhan tahun di sektor properti, serta sistem credit-scoring yang 
            akurat, Provesty mencoba memaksimalkan return sekaligus meminimalisir 
            resiko untuk para investor. Namun resiko tetap tidak bisa sepenuhnya 
            dihindari, sehingga para investor diharapkan dapat mempelajari resiko-resiko 
            awah ini sehingga dapat lebih cermat sebelum melakukan investasi.
        </p>
    </div>
  </div>
</div>
</center>
   
    <center>
<!-- Tab links -->
<div class="tab">
  <button class="tablinks" onclick="openRisk(event, 'Likuiditas')">Likuiditas</button>
  <button class="tablinks" onclick="openRisk(event, 'Gagal Bayar')">Gagal Bayar</button>
  <button class="tablinks" onclick="openRisk(event, 'Fraud')">Fraud</button>
  <button class="tablinks" onclick="openRisk(event, 'Resesi')">Resesi</button>
  <button class="tablinks" onclick="openRisk(event, 'Pailit')">Pailit</button>
</div>

<!-- Tab content -->
<div id="Likuiditas" class="tabcontent">
<div class="card mb-3" style="max-width: 960px;">
  <div class="row g-0">
    <div class="col-md-2">
      <br>
      <br>
      <br>
      <br>
      <br>
      <img src="/assets/images/logo/likuiditas.png" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <p class="card-text" style="text-align:justify">
            Likuiditas sudah menjadi Natural Risk ketika berinvestasi pada sektor properti. 
            Meskipun harga properti terutama di Indonesia relatif stabil dan terus mengalami kenaikan, 
            namun pencairan atau penjualan properti tidak dapat dilakukan dalam waktu singkat. 
            Meskipun ditargetkan terjual dalam jangka waktu tertentu, tetap masih ada resiko 
            perpanjangan yang bergantung kepada proses dan kondisi market saat penjualan. 
            Oleh karena itu Investor sebaiknya mempertimbangkan resiko ini sebelum berinvestasi pada Provesty.
            <br> <br>
            Provesty tentunya akan melakukan analisis dan due diligence secara menyeluruh dan akurat, sehingga proyek 
            properti bisa memiliki likuiditas yang cukup ketika akan dijual, mulai dari market strength 
            di sekitar lokasi properti, harga properti, prospek kedepannya, dan legalitas yang mumpuni dari 
            setiap asset yang akan diinvest melalui Provesty. Kami pun akan transparan terhadap setiap 
            proses yang dilakukan, dan Investor bisa dengan mudah mengakses setiap update yang kami 
            berikan melalui platform kami secara online.</p>
      </div>
    </div>
  </div>
</div>
</div>

<div id="Gagal Bayar" class="tabcontent">
<div class="card mb-3" style="max-width: 960px;">
  <div class="row g-0">
    <div class="col-md-2">
      <img src="/assets/images/logo/gagal_bayar.png" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <p class="card-text" style="text-align:justify">
            Untuk proyek properti yang menggunakan system pinjaman/loan, misal dalam skema Murabahah atau 
            jual beli, ada resiko developer atau sponsor mengalami default atau gagal bayar ketika akan 
            melunasi kredit baik dikarenakan kegagalan usaha, fraud, legalitas ataupun karena alasan lainnya.
            <br> <br>
            Untuk memitigasi resiko ini dari pihak Provesty akan melalukan Analisa kelayakan dan credit scoring 
            untuk setiap developer yang mengajukan pembiayaan sehingga meminimalisir resiko gagal bayar. Selain 
            itu asset properti yang diajukan dapat juga menjadi jaminan, meskipun kembali lagi tidak dapat 
            dilikuidasi dalam waktu yang singkat sehingga tetap terjadi penundaan. Dari pihak investor, mitigasi 
            yang bisa dilakukan adalah dengan cara mendiversifikasi investasi di berbagai proyek properti yang 
            kami sediakan.</p>
      </div>
    </div>
  </div>
</div>
</div>

<div id="Fraud" class="tabcontent">
<div class="card mb-3" style="max-width: 960px;">
  <div class="row g-0">
    <div class="col-md-2">
      <img src="/assets/images/logo/fraud.png" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <p class="card-text" style="text-align:justify">
            Resiko fraud dapat terjadi ketika ada perselisihan contohnya pada legalitas asset, sengketa tanah, 
            pemilik ganda, dan lain sebagainya. Untuk memitigasi ini Provesty akan melakukan due diligence 
            yang kuat, bekerja sama dengan konsultan hukum berpengalaman, dan bekerja sama dengan BPN atau 
            lembaga berwenang lainnya. Dokumen pun dapat diakses oleh investor di detail proyek dan properti 
            seperti surat tanah, MoU, dokumen perjanjian, dll..</p>
      </div>
    </div>
  </div>
</div>
</div>

<div id="Resesi" class="tabcontent">
<div class="card mb-3" style="max-width: 960px;">
  <div class="row g-0">
    <div class="col-md-2">
      <img src="/assets/images/logo/resesi.png" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
      <p class="card-text" style="text-align:justify">
            Indonesia saat ini Indonesia memiliki kestabilan ekonomi yang baik bahkan di negara-negara G20, 
            namun resiko terjadinya resesi dan krisis ekonomi masih ada yang mengakibatkan kerugian pada 
            investor. Meskipun sektor properti pasti akan menjadi prioritas utama oleh pemerintah karena 
            dampaknya yang sangat besar kepada masyarakat.</p>
      </div>
    </div>
  </div>
</div>
</div>

<div id="Pailit" class="tabcontent">
<div class="card mb-3" style="max-width: 960px;">
  <div class="row g-0">
    <div class="col-md-2">
      <img src="/assets/images/logo/pailit.png" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
      <p class="card-text" style="text-align:justify">
            Resiko pailit dikarenakan satu dan lain hal selalu ada di setiap perusahaan. Namun Provesty 
            akan terus berintegritas dalam memajukan perusahaan dengan tim yang solid, transparansi, 
            kontinuitas evaluasi, inovasi dan analisis perusahaan yang mumpuni. Ketika Provesty pailit, 
            semua investasi tetap akan berjalan dan diselesaikan hingga tuntas dikarenakan perjanjian 
            yang dibuat juga melibatkan pihak developer..</p>
      </div>
    </div>
  </div>
</div>
</div>

        <script>
        function openRisk(evt, riskName) {
            var i, tabcontent, tablinks;
                tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
            
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(riskName).style.display = "block";
            evt.currentTarget.className += " active";
        }
        </script>

</center>
    </body>
<?= $this->endSection() ?>