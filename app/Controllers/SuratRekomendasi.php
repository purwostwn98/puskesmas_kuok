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
}
