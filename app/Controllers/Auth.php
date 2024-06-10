<?php

namespace App\Controllers;

class Auth extends BaseController
{
    public function load_modal_login()
    {
        if ($this->request->isAJAX()) {
            $msg = [
                "modal" => view("depan/dinamis/login_form"),
                "token" => csrf_hash()
            ];
            echo json_encode($msg);
        } else {
            exit("Maaf request anda salah");
        }
    }

    public function proses_login()
    {
        $datasession = [
            "login" => true,
            "sebagai" => "100"
        ];
        $this->session->set($datasession);
        return redirect()->to('/admin/dashboard');
    }

    public function logout()
    {
        $this->session->destroy();
        return redirect()->to('/');
    }
}
