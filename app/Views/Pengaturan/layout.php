<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Profitable</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free Website Template" name="keywords">
    <meta content="Free Website Template" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Nunito:600,700" rel="stylesheet">

    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>/home/lib/animate/animate.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>/home/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>/home/lib/flaticon/font/flaticon.css" rel="stylesheet">
    <link href="<?= base_url(); ?>/home/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
    <link href=”<?= base_url(); ?>/home/css/font-awesome.css” rel=”stylesheet” />
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <!-- Template Stylesheet -->
    <link href="<?= base_url(); ?>/home/css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Nav Bar Start -->
    <div class="navbar navbar-expand-lg bg-light navbar-light">
        <div class="container-fluid">
            <a href="<?= base_url('Home/index'); ?>" class="navbar-brand"><span>Profitable</span></a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-center" id="navbarCollapse">
                <div class="navbar-nav ml-auto ">
                    <a href="/pendanaan" class="nav-item nav-link">Proyek Pendanaan</a>
                    <a href="/cara-kerja" class="nav-item nav-link">Cara Kerja</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Lainnya</a>
                        <div class="dropdown-menu">
                            <a href="/faq" class="dropdown-item">FAQ</a>
                            <a href="/guest/g_resiko" class="dropdown-item">Resiko</a>
                            <a href="/blog" class="dropdown-item">Blog</a>
                            <a href="/tentang-kami" class="dropdown-item">Tentang Kami</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav ml-auto">
                    <img src="<?= base_url(); ?>/home/img/12.png" alt="Image" style="width: 40px; height: 40px; border-radius: 50px;">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"><?= user()->username ?></a>
                        <div class="dropdown-menu">
                            <a href="/Dashboard_member/index" class="dropdown-item">Dashboard</a>
                            <a href="/Dashboard_member/porto/" class="dropdown-item">Portofolio</a>
                            <a href="/user/u_riwayat_trans" class="dropdown-item">Transaksi</a>
                            <a href="/pengaturan" class="dropdown-item">Profil</a>
                            <a href="/logout" class="dropdown-item">Logout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    <!-- Nav Bar End -->
    <!-- Feature Start -->
    <div class="feature">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="feature-text">
                        <a class="btn cs-btn text-center" href="<?= base_url('Dashboard_member'); ?>">Investasi</a>
                        <a class="btn custom-btn" href="<?= base_url('pengaturan'); ?>">Pengaturan</a>
                    </div>
                </div>
                <?= $this->renderSection('pengaturan'); ?>