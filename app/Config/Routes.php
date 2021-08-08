<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/cara-kerja', 'Home::caraKerja');
$routes->get('/faq', 'Home::faq');
$routes->get('/admin', 'AdminController::index');

// ProyekPendanaan
$routes->get('/pendanaan', 'PendanaanController::pendanaan');
$routes->get('/pendanaan/(:any)', 'PendanaanController::detail/$1');
$routes->add('/pendanaan/store', 'PendanaanController::storePendanaan');

// Investasi
$routes->get('/admin/investasi', 'InvestasiController::index');
$routes->get('/admin/investasi/add', 'InvestasiController::addInvestasi');
$routes->add('/admin/investasi/store', 'InvestasiController::storeInvestasi');
$routes->add('/admin/investasi/delete/(:any)', 'InvestasiController::deleteInvestasi/$1');

// Verifikasi
$routes->get('/admin/verifikasi/verifikasi_investasi', 'VerifikasiController::verifikasi_investasi');
$routes->get('/admin/verifikasi/verifikasi_pencairan', 'VerifikasiController::verifikasi_pencairan');

// Properti
$routes->get('/admin/properti', 'PropertiController::index');
$routes->get('/admin/properti/add', 'PropertiController::addProperti');
$routes->add('/admin/properti/store', 'PropertiController::storeProperti');
$routes->get('/admin/properti/edit/(:any)', 'PropertiController::editProperti/$1');
$routes->add('/admin/properti/update', 'PropertiController::updateProperti');

// FAQ
$routes->get('/admin/faq', 'FAQController::index');
$routes->get('admin/faq/add', 'FAQController::addFAQ');
$routes->add('admin/faq/store', 'FAQController::storeFAQ');
$routes->get('admin/faq/edit/(:any)', 'FAQController::editFAQ/$1');
$routes->add('admin/faq/update/(:segment)', 'FAQController::updateFAQ/$1');

// Blog
$routes->get('/admin/blog/', 'AdminBlog::index');
$routes->get('/admin/blog/add', 'AdminBlog::add');
$routes->add('/admin/blog/save', 'AdminBlog::simpan');
$routes->get('/admin/blog/edit/(:any)', 'AdminBlog::edit/$1');
$routes->add('/admin/blog/update/(:segment)', 'AdminBlog::update/$1');
$routes->delete('/admin/blog/(:num)', 'AdminBlog::delete/$1');

// Topup
$routes->get('/user/create_wallet', 'UserController::buatWallet');
$routes->get('/user/invoices/(:any)', 'UserController::getInvoice/$1');
$routes->get('/user/help/(:any)', 'UserController::getHelp/$1');
$routes->get('/user/u_riwayat_trans', 'UserController::riwayat_tu');
$routes->get('/user/u_upload_bukti/(:any)', 'UserController::add_bukti/$1');
//$routes->get('/user/u_upload_bukti/(:segment)', 'UserController::add_bukti/$1');
$routes->get('/user/biodata', 'UserController::biodata');
$routes->get('/user/bukti_topup', 'UserController::buktitopup');
$routes->get('/user/topup', 'UserController::topup');
$routes->get('/user/wait', 'UserController::halamantunggu');
$routes->get('/user/validtopup', 'UserController::validtopup');

//Topup Admin
$routes->get('/admin/riwayatopup', 'AdminController::riwayatopup');
$routes->get('/admin/approve/(:any)', 'AdminController::approve/$1');
$routes->get('/admin/reject/(:any)', 'AdminController::reject/$1');

//Verifikasi
$routes->get('/admin/verifikasi_investasi', 'VerifikasiController::verifikasi_investasi');
$routes->add('/admin/terima_investasi/(:num)', 'VerifikasiController::terima_investasi/$1');
$routes->add('/admin/tolak_investasi/(:num)', 'VerifikasiController::tolak_investasi/$1');

//Pencairan
$routes->add('/user/pencairan', 'PencairanController::pencairan_saldo');
$routes->get('/admin/verifikasi_pencairan', 'VerifikasiController::verifikasi_pencairan');
$routes->get('/admin/disetujui/(:any)', 'VerifikasiController::disetujui/$1');
$routes->get('/admin/ditolak/(:any)', 'VerifikasiController::ditolak/$1');
$routes->get('admin/verifikasi_pencairan', 'VerifikasiController::verifikasi_pencairan');

//Member
$routes->get('/user/dashboard', 'Dashboard_member::index');

// Resiko
$routes->get('/user/u_resiko/', 'UserController::resiko');
$routes->get('/guest/g_resiko/', 'GuestController::resiko');

// Guest
$routes->get('/tentang-kami', 'Home::about');
$routes->get('/blog', 'Home::blog');

if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
