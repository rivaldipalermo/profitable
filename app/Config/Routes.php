<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
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
$routes->get('/admin', 'AdminController::index');

// Properti
$routes->get('/admin/properti', 'PropertiController::index');
$routes->get('admin/properti/add', 'PropertiController::addProperti');
$routes->add('admin/properti/store', 'PropertiController::storeProperti');
$routes->get('admin/properti/edit/(:any)', 'PropertiController::editProperti/$1');
$routes->add('admin/properti/update', 'PropertiController::updateProperti');

// Blog
$routes->get('/admin/blog/', 'AdminBlog::index');
$routes->get('/admin/blog/add', 'AdminBlog::add');
$routes->add('/admin/blog/save', 'AdminBlog::simpan');
$routes->get('/admin/blog/edit/(:any)', 'AdminBlog::edit/$1');
$routes->add('/admin/blog/update/(:segment)', 'AdminBlog::update/$1');
$routes->delete('/admin/blog/(:num)', 'AdminBlog::delete/$1');

// Topup
$routes->get('/user/invoices/(:any)', 'UserController::getInvoice/$1');
$routes->get('/user/help/(:any)', 'UserController::getHelp/$1');
$routes->get('/user/u_riwayat_trans', 'UserController::riwayat_tu');
$routes->get('/user/u_upload_bukti/(:any)', 'UserController::add_bukti/$1');
//$routes->get('/user/u_upload_bukti/(:segment)', 'UserController::add_bukti/$1');
$routes->get('/user/biodata', 'UserController::biodata');
$routes->get('/user/bukti_topup', 'UserController::buktitopup');

// Resiko
$routes->get('/user/u_resiko/', 'UserController::resiko');
$routes->get('/guest/g_resiko/', 'GuestController::resiko');

if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
