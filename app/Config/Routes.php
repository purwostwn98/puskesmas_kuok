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

// Admin
$routes->get('/admin/dashboard', 'Admin::index');
$routes->get('/admin/rekomendasi-ajuanbaru', 'Admin::rekomendasi_ajuanbaru');
$routes->get('/admin/rekomendasi-detail-ajuan', 'Admin::rekomendasi_detailajuan');
$routes->get('/admin/rekomendasi-dalamproses', 'Admin::rekomendasi_dalamproses');
$routes->get('/admin/rekomendasi-toapprove', 'Admin::rekomendasi_toapprove');
$routes->get('/admin/rekomendasi-disetujui', 'Admin::rekomendasi_disetujui');
$routes->get('/admin/rekomendasi-ditolak', 'Admin::rekomendasi_ditolak');
//pdf
$routes->get('/admin/pdf-apotik', 'Admin::pdf_apotik');

//auth
$routes->post('/auth/load_modal_login', 'Auth::load_modal_login');
$routes->post('/auth/proses', 'Auth::proses_login');
$routes->get('/logout', 'Auth::logout');
