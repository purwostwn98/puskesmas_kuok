<?= $this->extend("/template/tempAdmin.php"); ?>
<?= $this->section("konten"); ?>
<div class="page-content">
    <div class="page-header">
        <h1 class="page-title text-primary-d2">
            Ajuan Surat Rekomendasi Baru
            <small class="page-info text-secondary-d2">
                <i class="fa fa-angle-double-right text-80"></i>
                Puskesmas Kuok
            </small>
        </h1>

        <!-- <div class="page-tools d-flex align-items-end btn-group">
            <button type="button" class="btn btn-smd btn-lighter-default btn-h-lighter-purple btn-a-lighter-purple border-b-2">
                <i class="fa fa-save text-120 text-purple-m1"></i>
            </button>
            <button type="button" class="btn btn-smd btn-lighter-default btn-h-lighter-success btn-a-lighter-success border-b-2">
                <i class="fa fa-undo text-110 text-success-m1"></i>
            </button>

            <div class="btn-group dropdown dd-backdrop dd-backdrop-none-md">
                <button type="button" class="btn btn-smd btn-lighter-info btn-a-outline-info dropdown-toggle border-b-2" data-display="static" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-search text-110"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-right dropdown-caret dropdown-animated animated-2 dd-slide-up dd-slide-none-md">
                    <div class="dropdown-inner">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Separated link</a>
                    </div>
                </div>
            </div>
        </div> -->
    </div>
    <div class="h-1 my-2"></div>
    <div class="px-2 border-1 brc-secondary-l1 radius-3px shadow-md bgc-grey-l5">
        <div class="row">
            <div class="col-md-12">
                <table class="table table-striped" id="tablebaru">
                    <thead class="bgc-primary text-white">
                        <tr>
                            <th class="text-center">No</th>
                            <th class="text-center">Tgl Diajukan</th>
                            <th class="text-center">NIK</th>
                            <th class="text-center">Nama Pemohon</th>
                            <th class="text-center">Jenis Surat</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center">1</td>
                            <td>17-09-2024 17:00</td>
                            <td>3367772777267389</td>
                            <td>Purwo Setiawan</td>
                            <td>Izin Rekomendasi Dokter Umum</td>
                            <td class="text-center"><a href="/admin/rekomendasi-detail-ajuan?id=Ajuan Baru" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a></td>
                        </tr>
                        <tr>
                            <td class="text-center">2</td>
                            <td>18-09-2024 07:35</td>
                            <td>7767200002000000</td>
                            <td>Wahyu Kurniawan</td>
                            <td>Izin Usaha Apotik</td>
                            <td class="text-center"><a href="/admin/rekomendasi-detail-ajuan?id=Ajuan Baru" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div><!-- /.page-content -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/2.0.8/js/dataTables.min.js"></script>
<script src="https://cdn.datatables.net/searchbuilder/1.7.1/js/dataTables.searchBuilder.min.js"></script>
<script>
    $(document).ready(function() {
        $('#tablebaru').DataTable();
    });
</script>
<?= $this->endSection(); ?>