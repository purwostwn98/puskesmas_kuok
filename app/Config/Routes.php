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

// Surat Rekomendasi
$routes->get('/surat-rekomendasi', 'SuratRekomendasi::depan');
$routes->post('/surekom/cek-nik-pemohon', 'SuratRekomendasi::cek_nik_pemohon');
$routes->get('/surekom/data-pemohon', 'SuratRekomendasi::data_pemohon');
$routes->post('/surekom/submit-data-pemohon', 'SuratRekomendasi::submit_data_pemohon');
$routes->post('/surekom/dinamis/load_formsyarat', 'SuratRekomendasi::dinamis_load_formsyarat');
$routes->post('/surekom/cek-ajuan', 'SuratRekomendasi::cek_ajuan');
$routes->get('/surekom/edit-ajuan', 'SuratRekomendasi::v_edit_ajuan');
