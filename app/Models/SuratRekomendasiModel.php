<?php

namespace App\Models;

use CodeIgniter\Model;

class SuratRekomendasiModel extends Model
{
    protected $table            = 'surat_rekomendasi_master';
    protected $primaryKey       = 'id';
    protected $allowedFields    = ['nama_surat', 'pdf_function', 'status_surat'];
    protected $useTimestamps    = true;
    protected $createdField     = 'created_at';
    protected $updatedField     = 'updated_at';
}

class SyaratSuratRekomendasiModel extends Model
{
    protected $table            = 'surat_rekomendasi_syarat';
    protected $primaryKey       = 'idsyarat';
    protected $allowedFields    = ['idsurat', 'nama_syarat', 'status_syarat', 'nama_field', 'type'];
    protected $useTimestamps    = true;
    protected $createdField     = 'created_at';
    protected $updatedField     = 'updated_at';
}
