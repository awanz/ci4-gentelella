<?php namespace Config;

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

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
// $routes->get('/', 'Home::index');

$routes->get('/', function () {
    $data['title'] = "Login";
    return view('login', $data);
});

$routes->get('login', function () {
    $data['title'] = "Login";
    return view('login', $data);
});

$routes->get('blank', function () {
    $data['title'] = "Blank";
    return view('blank', $data);
});

$routes->get('blank/full', function () {
    $data['title'] = "Blank Full";
    return view('blank_full', $data);
});

// Dashboard
$routes->get('dashboard', function () {
    $data['title'] = "Dashboard";
    return view('dashboard', $data);
});

$routes->get('dashboard/v2', function () {
    $data['title'] = "Dashboard v2";
    return view('dashboard_v2', $data);
});

$routes->get('dashboard/v3', function () {
    $data['title'] = "Dashboard v3";
    return view('dashboard_v3', $data);
});

// Form
$routes->get('form', function () {
    $data['title'] = "Form";
    return view('form/index', $data);
});

$routes->get('form/advanced', function () {
    $data['title'] = "Form Advanced";
    return view('form/advanced', $data);
});

$routes->get('form/buttons', function () {
    $data['title'] = "Form Buttons";
    return view('form/buttons', $data);
});

$routes->get('form/upload', function () {
    $data['title'] = "Form Upload";
    return view('form/upload', $data);
});

$routes->get('form/wizard', function () {
    $data['title'] = "Form Wizard";
    return view('form/wizard', $data);
});

$routes->get('form/validation', function () {
    $data['title'] = "Form Validation";
    return view('form/validation', $data);
});

// UI Element
$routes->get('element', function () {
    $data['title'] = "General Elements";
    return view('elements/general', $data);
});

$routes->get('element/media', function () {
    $data['title'] = "Media Gallery";
    return view('elements/media', $data);
});

$routes->get('element/typography', function () {
    $data['title'] = "Typography";
    return view('elements/typography', $data);
});

$routes->get('element/icons', function () {
    $data['title'] = "Icons";
    return view('elements/icons', $data);
});

$routes->get('element/glyphicons', function () {
    $data['title'] = "Glyphicons";
    return view('elements/glyphicons', $data);
});

$routes->get('element/widgets', function () {
    $data['title'] = "Widgets";
    return view('elements/widgets', $data);
});

$routes->get('element/invoice', function () {
    $data['title'] = "Invoice";
    return view('elements/invoice', $data);
});

$routes->get('element/inbox', function () {
    $data['title'] = "Inbox";
    return view('elements/inbox', $data);
});

$routes->get('element/calendar', function () {
    $data['title'] = "Calendar";
    return view('elements/calendar', $data);
});

// Tables
$routes->get('tables', function () {
    $data['title'] = "Tables";
    return view('tables/index', $data);
});

$routes->get('tables/dynamic', function () {
    $data['title'] = "Table Dynamic";
    return view('tables/dynamic', $data);
});

// Charts
$routes->get('chart', function () {
    $data['title'] = "Charts";
    return view('charts/index', $data);
});
$routes->get('chart/v2', function () {
    $data['title'] = "Charts 2";
    return view('charts/chartjs2', $data);
});
$routes->get('chart/moris', function () {
    $data['title'] = "Moris";
    return view('charts/moris', $data);
});
$routes->get('chart/echarts', function () {
    $data['title'] = "e-Chart";
    return view('charts/echart', $data);
});
$routes->get('chart/other', function () {
    $data['title'] = "Other";
    return view('charts/other', $data);
});

// Additional Page
$routes->get('ecommerce', function () {
    $data['title'] = "E-Commerce";
    return view('pages/ecommerce', $data);
});
$routes->get('project', function () {
    $data['title'] = "Project";
    return view('project/index', $data);
});
$routes->get('project/detail', function () {
    $data['title'] = "Project Detail";
    return view('project/detail', $data);
});
$routes->get('profile/contacts', function () {
    $data['title'] = "Contacts";
    return view('profile/contacts', $data);
});
$routes->get('profile', function () {
    $data['title'] = "Profile";
    return view('profile/index', $data);
});

// Extra
$routes->get('403', function () {
    $data['title'] = "403";
    return view('pages/403', $data);
});
$routes->get('404', function () {
    $data['title'] = "404";
    return view('pages/404', $data);
});
$routes->get('500', function () {
    $data['title'] = "500";
    return view('pages/500', $data);
});
$routes->get('pages/plain', function () {
    $data['title'] = "Plain Pages";
    return view('pages/plain_pages', $data);
});
$routes->get('pages/pricing', function () {
    $data['title'] = "Pricing Tables";
    return view('pages/pricing_tables', $data);
});

/**
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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
