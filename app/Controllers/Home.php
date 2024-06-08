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
}
