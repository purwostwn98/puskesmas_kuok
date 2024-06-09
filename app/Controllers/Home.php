<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('depan/index');
    }

    public function v_profil(): string
    {
        return view('depan/profil');
    }

    public function v_sambutan(): string
    {
        return view('depan/sambutan');
    }

    public function v_rawat_jalan(): string
    {
        return view('depan/service_rawat_jalan');
    }
    public function v_gawat_darurat(): string
    {
        return view('depan/service_gawat_darurat');
    }
    public function v_tindakan_medik(): string
    {
        return view('depan/tindakan_medik');
    }
    public function v_kebidanan(): string
    {
        return view('depan/kebidanan');
    }
    public function v_diagnostik(): string
    {
        return view('depan/diagnostik');
    }
    public function v_labklin(): string
    {
        return view('depan/laboratorium_klinik');
    }
    public function v_pengkes(): string
    {
        return view('depan/pengujian_kesehatan');
    }
    public function v_ambulan(): string
    {
        return view('depan/ambulance');
    }
}
