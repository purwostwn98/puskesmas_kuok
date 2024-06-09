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
}
