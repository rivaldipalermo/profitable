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

// Topup
$routes->get('/user/invoices/(:any)', 'UserController::getInvoice/$1');

if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
