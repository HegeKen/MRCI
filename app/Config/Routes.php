<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/.env', 'Login::index');
$routes->get('{locale}/', 'Home::index');
$routes->get('{locale}/tutorial', 'Home::tutorial');
$routes->get('{locale}/weekly', 'Weekly::index');
$routes->get('{locale}/weekly/logs/week-(:num)-cn', 'Weekly::weekcn');
$routes->get('{locale}/weekly/logs/week-(:num)-en', 'Weekly::weeken');
$routes->get('{locale}/devices', 'Devices::index');
$routes->get('{locale}/devices/(:any)', 'Devices::devices');
$routes->get('{locale}/recovery', 'Home::recovery');
$routes->get('{locale}/tools', 'Home::tools');
$routes->get('{locale}/thanks', 'Home::thanks');
$routes->get('{locale}/sitelog', 'Home::sitelog');
$routes->get('{locale}/friendly', 'Home::friendly');
$routes->get('{locale}/about', 'Home::about');

$routes->match(['get','post'],'/admin/login', 'Login::index');
$routes->match(['get','post'],'/admin/logout', 'Login::logout');
$routes->match(['get','post'],'/admin/login/auth', 'Login::auth');
$routes->match(['get','post'],'/admin/register', 'Register::index');
$routes->match(['get','post'],'/admin/register/save', 'Register::save');
$routes->get('/admin/dashboard', 'Dashboard::index',['filter' => 'auth']);
$routes->get('/admin/dashboard/weekly', 'Dashboard::weekly');
$routes->get('/admin/dashboard/devices', 'Dashboard::devices');
$routes->get('/admin/dashboard/recovery', 'Dashboard::recovery');
$routes->get('/admin/dashboard/tools', 'Dashboard::tools');
$routes->get('/admin/dashboard/sitelog', 'Dashboard::sitelog');

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
