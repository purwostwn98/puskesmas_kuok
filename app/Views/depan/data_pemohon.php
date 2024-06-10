<?= $this->extend("/template/tempDepan.php"); ?>
<?= $this->section("konten"); ?>

<!-- Page Title -->
<div class="page-title" data-aos="fade">
    <div class="heading">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-12">
                    <h1 class="text-center mb-2">Data Pemohon</h1>
                    <div class="card">
                        <div class="card-body">
                            <!-- Modal body -->
                            <?= form_open("/surekom/submit-data-pemohon", ['class' => 'g-3 needs-validation formdatapemohon']); ?>
                            <?= csrf_field(); ?>
                            <div class="row form-group">
                                <div class="col-md-4">
                                    <label for="nik">NIK</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" name="nik_pemohon" class="form-control" id="nik" value="<?= $nik; ?>" required readonly>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-md-4">
                                    <label for="name">Nama Lengkap</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" name="nama_pemohon" class="form-control" id="name" value="Purwo Setiawan" required>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-md-4">
                                    <label for="alam">Alamat Lengkap</label>
                                </div>
                                <div class="col-md-8">
                                    <textarea class="form-control" name="alamat_pemohon" rows="2" placeholder="Alamat sesuai KTP">Jelok RT02/02, Sumberejo, Jatisrono, Wonogiri, Jawa Tengah</textarea>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-md-4">
                                    <label for="jenkel">Jenis Kelamin</label>
                                </div>
                                <div class="col-md-8">
                                    <select name="jk_pemohon" id="jenkel" class="form-control">
                                        <option value="" disabled>Pilih jenis kelamin</option>
                                        <option value="L">Laki-laki</option>
                                        <option value="P">Perempuan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-md-4">
                                    <label for="jenkel">Agama</label>
                                </div>
                                <div class="col-md-8">
                                    <select name="jk_pemohon" id="jenkel" class="form-control">
                                        <option value="" disabled>Pilih agama</option>
                                        <option value="Islam">Islam</option>
                                        <option value="Protestan">Protestan</option>
                                        <option value="Katolik">Katolik</option>
                                        <option value="Hindhu">Hindhu</option>
                                        <option value="Budha">Budha</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-md-4">
                                    <label for="mail">Email</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="email" name="email_pemohon" class="form-control" id="mail" value="purwostwn98@gmail.com" required>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-md-4">
                                    <label for="tlp">Telepon</label>
                                </div>
                                <div class="col-md-8">
                                    <!-- <input type="tel" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" name="tlp_pemohon" class="form-control" id="tlp" value="085647053296" required> -->
                                    <input type="tel" name="tlp_pemohon" class="form-control" id="tlp" value="085647053296" required>
                                </div>
                            </div>
                            <hr>
                            <!-- Modal footer -->
                            <p class="text-center"><i>Pastikan data diri Anda sudah benar. Kemudian klik "Simpan Data Diri" untuk melanjutkan.</i></p>
                            <div class="text-center">
                                <button type="button" class="btn btn-danger" onclick="btnClose()" data-dismiss="modal">Close</button>
                                <button type="submit" style="background-color: var(--accent-color);" class="btn text-white btndaftar">Simpan Data Diri</button>
                            </div>
                            <?= form_close(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- End Page Title -->


<!-- Modal Data Pemohon -->
<div class="dataPemohon"></div>
<!-- jQuery library -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

<script>
    $(document).ready(function() {
        // $('.formnik').submit(function(e) {
        //     e.preventDefault();
        //     $.ajax({
        //         type: "post",
        //         url: $(this).attr('action'),
        //         data: $(this).serialize(),
        //         dataType: "json",
        //         beforeSend: function() {
        //             $('.btndaftar').prop('disabled', true);
        //             $('.btndaftar').html('<i class="fa fa-spin fa-spinner"></i>');
        //         },
        //         complete: function() {
        //             $('.btndaftar').prop('disabled', false);
        //             $('.btndaftar').html('Submit');
        //         },
        //         success: function(response) {
        //             if (response.berhasil == true) {
        //                 $("#myModal").modal("hide");
        //                 $(".dataPemohon").html(response.modal);
        //                 $("#modalDataPemohon").modal("show");
        //             }

        //             // if (response.terdaftar) {
        //             //     window.location = response.terdaftar.link_form_ajuan;
        //             // }
        //             $("input[name='csrf_test_name']").val(response.token);
        //         },
        //         error: function(xhr, ajaxOptions, thrownError) {
        //             alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
        //         }
        //     });

        //     return false;
        // });
    });
</script>

<?= $this->endSection(); ?>