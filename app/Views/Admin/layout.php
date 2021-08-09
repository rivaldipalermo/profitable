<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/bootstrap.css">

    <link rel="stylesheet" href="<?= base_url(); ?>/assets/vendors/iconly/bold.css">

    <link rel="stylesheet" href="<?= base_url(); ?>/assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/app.css">
    <link rel="shortcut icon" href="<?= base_url(); ?>/assets/images/favicon.svg" type="image/x-icon">
    <script src="https://kit.fontawesome.com/8a210de33c.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
</head>

<body>
    <?php $request = \Config\Services::request(); ?>
    <div id="app">
        <div id="sidebar" class='active'>
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <div class="logo">
                            <a href="/admin">Profitable</a>
                        </div>
                        <div class="toggler">
                            <a href="#" class='sidebar-hide d-xl-none d-block'><i class='bi bi-x bi-middle'></i></a>
                        </div>
                    </div>
                </div>
                <?php if(in_groups('admin')) : ?>
                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class='sidebar-title'>Menu</li>

                        <li class="sidebar-item <?= ($request->uri->getSegment(1) == 'admin' && $request->uri->getSegment(2) == '') ? 'active' : '' ?>">
                            <a href="/admin" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>

                        <li class="sidebar-item  <?= ($request->uri->getSegment(2) == 'properti') ? 'active' : '' ?>">
                            <a href="/admin/properti" class='sidebar-link'>
                                <i class="fa fa-home"></i>
                                <span>Properti</span>
                            </a>
                        </li>

                        <li class="sidebar-item  <?= ($request->uri->getSegment(2) == 'investasi') ? 'active' : '' ?>">
                            <a href="/admin/investasi" class='sidebar-link'>
                                <i class="bi bi-collection-fill"></i>
                                <span>Proyek Investasi</span>
                            </a>
                        </li>

                        <li class="sidebar-item  <?= ($request->uri->getSegment(2) == 'faq') ? 'active' : '' ?>"">
                            <a href=" /admin/faq" class='sidebar-link'>
                            <i class="bi bi-collection-fill"></i>
                            <span>FAQ</span>
                            </a>
                        </li>

                        <li class="sidebar-item  <?= ($request->uri->getSegment(2) == 'verifikasi_investasi') ? 'active' : '' ?>">
                            <a href="/admin/verifikasi_investasi" class='sidebar-link'>
                                <i class="bi bi-collection-fill"></i>
                                <span>Verifikasi Investasi</span>
                            </a>
                        </li>

                        <li class="sidebar-item  <?= ($request->uri->getSegment(2) == 'verifikasi_pencairan') ? 'active' : '' ?>">
                            <a href="/admin/verifikasi_pencairan" class='sidebar-link'>
                                <i class="bi bi-collection-fill"></i>
                                <span>Verifikasi Pencairan</span>
                            </a>
                        </li>

                        <li class="sidebar-item  <?= ($request->uri->getSegment(2) == 'riwayatopup') ? 'active' : '' ?>">
                            <a href="/AdminController/riwayatopup" class='sidebar-link'>
                                <i class="bi bi-collection-fill"></i>
                                <span>Verifikasi Top-up</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <?php endif; ?>
                <?php if(in_groups('user')) : ?>
                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class='sidebar-title'>Menu</li>

                        <li class="sidebar-item <?= ($request->uri->getSegment(1) == 'admin' && $request->uri->getSegment(2) == '') ? 'active' : '' ?>">
                            <a href="/user/dashboard" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="/user/porto" class='sidebar-link'>
                                <i class="bi bi-collection-fill"></i>
                                <span>Portofolio</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="/user/u_riwayat_trans" class='sidebar-link'>
                                <i class="bi bi-collection-fill"></i>
                                <span>Transaksi</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="/user/pengaturan" class='sidebar-link'>
                                <i class="bi bi-collection-fill"></i>
                                <span>Profil</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <?php endif; ?>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>
        <div id="main" class='layout-navbar'>
            <header class='mb-3'>
                <nav class="navbar navbar-expand-lg navbar-light ">
                    <div class="container-fluid">
                        <a href="#" class='burger-btn d-block '>
                            <i class='bi bi-justify fs-3'></i>
                        </a>

                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                                <li class="nav-item dropdown me-3">
                                    <a class="nav-link active dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class='bi bi-bell fs-4 text-gray-600'></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-lg-end" aria-labelledby="dropdownMenuButton">
                                        <li>
                                            <h6 class="dropdown-header">Notifications</h6>
                                        </li>
                                        <li><a class='dropdown-item'>No notification available</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <?php if(in_groups('admin')) { ?>
                            <div class="dropdown">
                                <a href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                    <div class="user-menu d-flex">
                                        <div class="user-name text-end me-3">
                                            <h6 class='mb-0 text-gray-600'><?= user()->username; ?></h6>
                                            <p class='mb-0 text-sm text-gray-600'>Administrator</p>
                                        </div>
                                        <div class="user-img d-flex align-items-center">
                                            <div class="avatar avatar-md">
                                                <img src="<?= base_url() ?>/assets/images/faces/1.jpg">
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-lg-end" aria-labelledby="dropdownMenuButton">
                                    <li>
                                        <h6 class="dropdown-header">Hello, <?= user()->username; ?>!</h6>
                                    </li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class='dropdown-item' href="/logout"><i class="icon-mid bi bi-box-arrow-left me-2"></i> Logout</a></li>
                                </ul>
                            </div>
                            <?php } ?>
                            <?php if(in_groups('user')) { ?>
                            <div class="dropdown">
                                <a href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                    <div class="user-menu d-flex">
                                        <div class="user-name text-end me-3">
                                            <h6 class='mb-0 text-gray-600'><?= user()->username; ?></h6>
                                            <p class='mb-0 text-sm text-gray-600'>Member</p>
                                        </div>
                                        <div class="user-img d-flex align-items-center">
                                            <div class="avatar avatar-md">
                                                <img src="<?= base_url() ?>/assets/images/faces/1.jpg">
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-lg-end" aria-labelledby="dropdownMenuButton">
                                    <li>
                                        <h6 class="dropdown-header">Hello, <?= user()->username; ?>!</h6>
                                    </li>
                                    <li><a class='dropdown-item' href="/user/dashboard"></i> Dashboard</a></li>
                                    <li>
                                    <li><a class='dropdown-item' href="/user/porto"></i> Portofolio</a></li>
                                    <li>
                                    <li><a class='dropdown-item' href="/user/u_riwayat_trans"></i> Transaksi</a></li>
                                    <li>
                                    <li><a class='dropdown-item' href="/user/pengaturan"></i> Profil</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class='dropdown-item' href="/logout"><i class="icon-mid bi bi-box-arrow-left me-2"></i> Logout</a></li>
                                </ul>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </nav>
            </header>
            <div id="main-content">

                <?= $this->renderSection('content'); ?>

                <footer>
                    <div class="footer clearfix mb-0 text-muted">
                        <div class="float-start">
                            <p>2021 &copy; Tugas Besar TPEC-1</p>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="<?= base_url(); ?>/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
        <script src="<?= base_url(); ?>/assets/js/bootstrap.bundle.min.js"></script>

        <script src="<?= base_url(); ?>/assets/js/main.js"></script>
</body>

</html>