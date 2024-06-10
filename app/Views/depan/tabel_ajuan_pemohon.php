<?= $this->extend("/template/tempDepan.php"); ?>
<?= $this->section("konten"); ?>

<!-- Page Title -->
<div class="page-title" data-aos="fade">
    <div class="heading">
        <div class="container">
            <div class="row d-flex justify-content-center ">
                <div class="col-lg-12">
                    <h1 class="text-center">Ajuan Pemohon</h1>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-12">
                    <table class="table table-striped table-bordered">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Jenis Surat</th>
                                <th scope="col">Tgl Diajukan</th>
                                <th scope="col">Tgl Target Diterima</th>
                                <th scope="col">Status</th>
                                <th scope="col">Catatan</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Izin Usaha Apotik</td>
                                <td>7 Juni 2024</td>
                                <td>10 Juni 2024</td>
                                <td><span class="badge badge-secondary">dalam proses</span></td>
                                <td>Mohon denah diperbarui (kurang jelas)</td>
                                <td><a href="/surekom/edit-ajuan" class="btn btn-warning btn-sm">Edit</a> <button class="btn btn-danger btn-sm"><i class="fa fa-print"></i></button></td>
                            </tr>
                            <!-- Add more rows as needed -->
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>

<?= $this->endSection(); ?>