<?php

namespace App\Controllers;

use App\Models\SuratRekomendasiModel;
use App\Models\SyaratSuratRekomendasiModel;
use TCPDF;

class Admin extends BaseController
{
    protected $suratRekomendasiModel;
    protected $syaratSuratRekomendasiModel;
    public function __construct()
    {
        $this->suratRekomendasiModel = new SuratRekomendasiModel();
        $this->syaratSuratRekomendasiModel = new SyaratSuratRekomendasiModel();
    }

    public function index(): string
    {
        $data = [
            "hal" => ["", "dashboard-admin"]
        ];
        return view('admin/dashboard', $data);
    }

    public function rekomendasi_ajuanbaru(): string
    {
        $data = [
            "hal" => ["ajuan-rekomendasi", "rekomendasi-baru"]
        ];
        return view('admin/rekomendasi_baru', $data);
    }

    public function rekomendasi_detailajuan()
    {
        $syarat = $this->syaratSuratRekomendasiModel->where(['status_syarat' => 1, "idsurat" => 1])->findAll();
        $data = [
            "hal" => ["ajuan-rekomendasi", "rekomendasi-baru"],
            "syarat" => $syarat,
            "status" => $this->request->getVar("id")
        ];
        return view('admin/rekomendasi_detail_ajuan', $data);
    }

    public function rekomendasi_dalamproses(): string
    {
        $data = [
            "hal" => ["ajuan-rekomendasi", "rekomendasi-proses"]
        ];
        return view('admin/rekomendasi_dalam_proses', $data);
    }

    public function rekomendasi_toapprove(): string
    {
        $data = [
            "hal" => ["ajuan-rekomendasi", "rekomendasi-toapprove"]
        ];
        return view('admin/rekomendasi_toapprove', $data);
    }

    public function rekomendasi_disetujui(): string
    {
        $data = [
            "hal" => ["ajuan-rekomendasi", "rekomendasi-disetujui"]
        ];
        return view('admin/rekomendasi_disetujui', $data);
    }

    public function rekomendasi_ditolak(): string
    {
        $data = [
            "hal" => ["ajuan-rekomendasi", "rekomendasi-ditolak"]
        ];
        return view('admin/rekomendasi_ditolak', $data);
    }

    public function pdf_apotik()
    {
        // $data = [
        //     'halaman' => 'admin',
        //     'berita_acara' => $berita_acara,
        //     'data_ajuan' => $data_ajuan,
        //     'tanggal_rapat' => $tanggal_rapat,
        //     'terbilang' => terbilang($berita_acara['nilai_penyerahan'])
        // ];

        $html = view("/pdf_surat_rekomendasi/pdf_apotik");

        $pdf = new TCPDF("P", PDF_UNIT, "A4", true, 'UTF-8', false);
        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetAuthor('@purwsostwm_developer');
        $pdf->SetTitle('Surat Rekomendasi Apotik');
        $pdf->SetSubject('Surat Rekomendasi Apotik');
        $pdf->SetMargins(15, 4, 13);

        // set auto page breaks
        $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

        // set image scale factor
        $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

        $pdf->setPrintHeader(false);
        $pdf->setPrintFooter(false);
        $pdf->addPage();

        $pdf->writeHTML($html, true, false, true, false, '');

        $this->response->setContentType('application/pdf');
        $pdf->Output("Surat Rekomendasi Apotik.pdf", 'I');
    }
}
