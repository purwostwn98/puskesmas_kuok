<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/profil', 'Home::v_profil');
$routes->get('/sambutan', 'Home::v_sambutan');
$routes->get('/rj', 'Home::v_rawat_jalan');

// Surat Rekomendasi
$routes->get('/surat-rekomendasi', 'SuratRekomendasi::depan');
