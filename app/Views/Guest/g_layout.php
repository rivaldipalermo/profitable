<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="icon" href="img/favicon.png" type="image/png" />
    <title>Profitable</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/guest/bootstrap.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/vendors/fontawesome/css/all.min.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/vendors/owl-carousel/owl.carousel.min.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/vendors/animate-css/animate.css" />
    <!-- main css -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/guest/style.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/guest/responsive.css" />
</head>

<body>
    <!--================ Header Menu Area =================-->
    <header class="header_area">
        <div class="main_menu">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <a class="navbar-brand logo_h" href="index.html">Profitable</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="#">Proyek Pendanaan</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Cara Kerja</a>
                            </li>
                            <li class="nav-item submenu dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Lainnya <i class="ml-2 fas fa-chevron-down d-none d-lg-inline"></i></span></a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">FAQ</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Resiko</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Blog</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Tentang Kami</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link d-lg-none">Login</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link d-lg-none">Sign Up</a>
                            </li>
                        </ul>

                        <div class="nav-item ml-auto">
                            <a href="#" class="d-none d-lg-inline sign_in mr-2">Login</a>
                            <a href="#" class="d-none d-lg-inline sign_up">Sign Up</a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <div class="page-content page-home">
        <?= $this->renderSection('content'); ?>
    </div>

    <!-- ================ Start Footer Area ================= -->
    <footer class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 single-footer">
                    <div class="footer-social">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </div>
                    <p class="mt-2">
                        Profitable adalah platform crowdfunding pertama di Indonesia yang
                        berfokus pada investasi di sektor properti.
                    </p>
                    <p>
                        Visi utama Provesty adalah memberikan kemudahan dan aksesibilitas
                        bagi setiap orang untuk bisa berinvestasi pada properti dengan
                        menggunakan teknologi. Dengan berinvestasi di Provesty, investor
                        juga bisa turut berkontribusi dalam pemerataan pembangunan dalam
                        negeri. Kunjungi Tentang Kami untuk melihat lebih detail.
                    </p>
                </div>

                <div class="col-lg-2 col-md-4 col-sm-12 mb-4 mb-xl-0 single-footer">
                    <h4>Contact Info</h4>
                    <div class="footer-address">
                        <p>
                            Jl. Dipati Ukur No.112-116, Lebakgede, Kecamatan Coblong, Kota
                            Bandung, Jawa Barat 40132
                        </p>
                        <p>+62 895-2134-4312</p>
                        <p>info@profitable.com</p>
                    </div>
                </div>

                <div class="col-lg-2 col-md-4 col-sm-12 mb-4 mb-xl-0 single-footer">
                    <h4>Important Link</h4>
                    <ul>
                        <li><a href="#">Tentang Kami</a></li>
                        <li><a href="#">Investasi</a></li>
                        <li><a href="#">Cara Kerja</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-md-4 col-sm-12 mb-4 mb-xl-0 single-footer">
                    <h4>Member Of</h4>
                    <p>TPEC-1</p>
                </div>
            </div>
            <div class="footer-bottom row align-items-center text-center">
                <p class="footer-text m-0 col-lg-12">
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;
                    <script>
                        document.write(new Date().getFullYear());
                    </script>
                    All rights reserved
                </p>
            </div>
        </div>
    </footer>
    <!-- ================ End Footer Area ================= -->

    <!-- Optional JavaScript -->
    <script></script>
    <script src="<?= base_url(); ?>/assets/js/extensions/jquery-2.2.4.min.js"></script>
    <script src="<?= base_url(); ?>/assets/js/guest/bootstrap.min.js"></script>
    <script src="<?= base_url(); ?>/assets/vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="<?= base_url(); ?>/assets/js/guest/theme.js"></script>
</body>

</html>