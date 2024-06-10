<?= $this->extend("/template/tempAdmin.php"); ?>
<?= $this->section("konten"); ?>
<div class="page-content">
    <div class="page-header">
        <h1 class="page-title text-primary-d2">
            Ajuan Surat Rekomendasi Dalam Proses
            <small class="page-info text-secondary-d2">
                <i class="fa fa-angle-double-right text-80"></i>
                Puskesmas Kuok
            </small>
        </h1>
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
                            <th class="text-center">Status</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center">1</td>
                            <td>17-09-2024 17:00</td>
                            <td>3367772777267389</td>
                            <td>Bagio</td>
                            <td>Izin Usaha Apotik</td>
                            <td class="text-center"><span class="badge badge-info">Dalam Proses</span></td>
                            <td class="text-center"><a href="/admin/rekomendasi-detail-ajuan?id=Dalam Proses" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a></td>
                        </tr>
                        <tr>
                            <td class="text-center">2</td>
                            <td>18-09-2024 07:35</td>
                            <td>7728099002211327</td>
                            <td>Denny Sahid</td>
                            <td>Izin Tukang Gigi</td>
                            <td class="text-center"><span class="badge badge-info">Dalam Proses</span></td>
                            <td class="text-center"><a href="/admin/rekomendasi-detail-ajuan?id=Dalam Proses" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a></td>
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