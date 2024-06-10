<?= $this->extend("/template/tempDepan.php"); ?>
<?= $this->section("konten"); ?>

<!-- Page Title -->
<div class="page-title" data-aos="fade">
    <div class="heading">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-12">
                    <h1 class="text-center mb-2">Data Dokumen Persyaratan</h1>
                    <div class="card">
                        <div class="card-body">
                            <!-- Modal body -->
                            <?= form_open("/surekom/submit-syarat", ['class' => 'g-3 needs-validation formsurekom']); ?>
                            <?= csrf_field(); ?>
                            <div class="row form-group">
                                <div class="col-md-4">
                                    <label for="surekom">Jenis Surat Rekomendasi</label>
                                </div>
                                <div class="col-md-8">
                                    <select name="idsurat" id="surekom" class="form-control">
                                        <option value="" selected disabled>Pilih Surat</option>
                                        <?php foreach ($surekom as $key => $v) { ?>
                                            <option value="<?= $v["id"]; ?>"><?= $v['nama_surat']; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="syarat_surat">

                            </div>
                            <hr>
                            <!-- Modal footer -->
                            <p class="text-center"><i>Pastikan data diri Anda sudah benar. Kemudian klik "Simpan Data Diri" untuk melanjutkan.</i></p>
                            <div class="text-center">
                                <button type="button" class="btn btn-danger" onclick="btnClose()" data-dismiss="modal">Close</button>
                                <button type="button" style="background-color: var(--accent-color);" class="btn text-white btndaftar">Simpan Surat Rekomendasi</button>
                            </div>
                            <?= form_close(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- End Page Title -->
<!-- jQuery library -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

<script>
    $(document).ready(function() {
        // Attach a click event handler
        $('#surekom').change(function() {
            // Your logic here
            var idsurat = this.value;
            $.ajax({
                url: "<?= site_url('surekom/dinamis/load_formsyarat'); ?>",
                type: "POST",
                dataType: "json",
                data: {
                    idsurat: idsurat
                },
                success: function(response) {
                    $('.syarat_surat').html(response.data);
                },
                error: function(xhr, ajaxOptions, thrownError) {
                    alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
                }
            });
        });

        $(".btndaftar").click(function() {
            Swal.fire({
                title: "Berhasil!",
                html: '<p>Kode: <b>97YbdatfRE</b> <br> Simpan kode untuk melihat status ajuan. Kode ini juga akan dikirim ke email Anda</p>',
                icon: "success"
            }).then((result) => {
                window.location = "/surat-rekomendasi";
                /* Read more about isConfirmed, isDenied below */
                // if (result.isConfirmed) {
                //     Swal.fire("Saved!", "", "success");
                // } else if (result.isDenied) {
                //     Swal.fire("Changes are not saved", "", "info");
                // }
            });;
        })

        $('.formnik').submit(function(e) {
            e.preventDefault();
            $.ajax({
                type: "post",
                url: $(this).attr('action'),
                data: $(this).serialize(),
                dataType: "json",
                beforeSend: function() {
                    $('.btndaftar').prop('disabled', true);
                    $('.btndaftar').html('<i class="fa fa-spin fa-spinner"></i>');
                },
                complete: function() {
                    $('.btndaftar').prop('disabled', false);
                    $('.btndaftar').html('Submit');
                },
                success: function(response) {
                    if (response.berhasil == true) {
                        $("#myModal").modal("hide");
                        $(".dataPemohon").html(response.modal);
                        $("#modalDataPemohon").modal("show");
                    }

                    // if (response.terdaftar) {
                    //     window.location = response.terdaftar.link_form_ajuan;
                    // }
                    $("input[name='csrf_test_name']").val(response.token);
                },
                error: function(xhr, ajaxOptions, thrownError) {
                    alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
                }
            });
            return false;
        });
    });
</script>

<?= $this->endSection(); ?>