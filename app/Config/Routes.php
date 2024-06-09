<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/profil', 'Home::v_profil');
$routes->get('/sambutan', 'Home::v_sambutan');
$routes->get('/rj', 'Home::v_rawat_jalan');
$routes->get('/gd', 'Home::v_gawat_darurat');
$routes->get('/tm', 'Home::v_tindakan_medik');
$routes->get('/kb', 'Home::v_kebidanan');
$routes->get('/dg', 'Home::v_diagnostik');
$routes->get('/lk', 'Home::v_labklin');
$routes->get('/pk', 'Home::v_pengkes');
$routes->get('/am', 'Home::v_ambulan');
