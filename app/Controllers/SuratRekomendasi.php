<?php

namespace App\Controllers;

use App\Models\SuratRekomendasiModel;
use App\Models\SyaratSuratRekomendasiModel;

class SuratRekomendasi extends BaseController
{
    protected $suratRekomendasiModel;
    protected $syaratSuratRekomendasiModel;

    public function __construct()
    {
        $this->suratRekomendasiModel = new SuratRekomendasiModel();
        $this->syaratSuratRekomendasiModel = new SyaratSuratRekomendasiModel();
    }

    public function depan(): string
    {
        $surekom = $this->suratRekomendasiModel->where('status_surat', 1)->findAll();
        $syarat = $this->syaratSuratRekomendasiModel->where(['status_syarat' => 1, 'type' => "file"])
            ->select('idsyarat, idsurat, nama_syarat')->findAll();
        $arrsyarat = [];
        foreach ($syarat as $key => $v) {
            $arrsyarat[$v['idsurat']][] = $v['nama_syarat'];
        }
        $data = [
            "surekom" => $surekom,
            "syarat" => $arrsyarat
        ];
        return view('depan/surat_rekomendasi', $data);
    }

    public function cek_nik_pemohon()
    {
        if ($this->request->isAJAX()) {
            $nik = $this->request->getPost('nik_pemohon');
            $hash_nik = bin2hex($this->encrypter->encrypt("bipxpstwn-" . $nik));

            $msg = [
                "berhasil" => true,
                "link" => "/surekom/data-pemohon?id=" . $hash_nik,
                "token" => csrf_hash()
            ];
            echo json_encode($msg);
        } else {
            exit("Maaf request anda salah");
        }
    }

    public function data_pemohon(): string
    {
        $id = $this->request->getVar('id');
        $nik_hash = $this->encrypter->decrypt(hex2bin(strval($id)));
        $ex = explode("-", $nik_hash);
        $nik = $ex[1];
        $data = [
            "nik" => $nik
        ];
        return view('depan/data_pemohon', $data);
    }

    public function submit_data_pemohon(): string
    {
        $surekom = $this->suratRekomendasiModel->where('status_surat', 1)->findAll();
        $data = [
            "surekom" => $surekom
        ];
        return view('depan/formulir_surat_rekomendasi', $data);
    }

    public function dinamis_load_formsyarat()
    {
        if ($this->request->isAJAX()) {
            $idsurat = $this->request->getPost('idsurat');
            $syarat = $this->syaratSuratRekomendasiModel->where(['status_syarat' => 1, "idsurat" => $idsurat])->findAll();
            $data = [
                "syarat" => $syarat
            ];
            $msg = [
                "data" => view("depan/dinamis/form_syarat", $data)
            ];
            echo json_encode($msg);
        } else {
            exit("Maaf request anda salah");
        }
    }

    public function cek_ajuan()
    {
        return view('depan/tabel_ajuan_pemohon');
    }

    public function v_edit_ajuan()
    {
        $syarat = $this->syaratSuratRekomendasiModel->where(['status_syarat' => 1, "idsurat" => 1])->findAll();
        $data = [
            "syarat" => $syarat
        ];
        return view('depan/edit_ajuan', $data);
    }
}
