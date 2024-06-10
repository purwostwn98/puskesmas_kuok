<?= $this->extend("/template/tempDepan.php"); ?>
<?= $this->section("konten"); ?>

<!-- Page Title -->
<div class="page-title" data-aos="fade">
    <div class="heading">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-12">
                    <h1 class="text-center mb-2">Penerbitan Surat Rekomendasi</h1>
                    <p class="text-left">
                        Surat rekomendasi Puskesmas adalah sebuah dokumen resmi yang dikeluarkan oleh Pusat Kesehatan Masyarakat (Puskesmas) untuk berbagai keperluan.
                        Berikut adalah beberapa surat rekomendasi yang dapat dilayani oleh Puskesmas Kuok:
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <section id="surekom" class="departments section">
                        <div class="container" data-aos="fade-up" data-aos-delay="100">
                            <div class="row">
                                <div class="col-lg-3">
                                    <ul class="nav nav-tabs flex-column">
                                        <?php foreach ($surekom as $ks => $s) { ?>
                                            <li class="nav-item">
                                                <a class="nav-link <?= $ks == 0 ? 'active' : ''; ?>" data-bs-toggle="tab" href="#departments-tab-<?= $ks + 1; ?>"><?= $s['nama_surat']; ?></a>
                                            </li>
                                        <?php  } ?>
                                    </ul>
                                </div>
                                <div class="col-lg-9 mt-4 mt-lg-0">
                                    <div class="tab-content">
                                        <?php foreach ($surekom as $key => $v) { ?>
                                            <div class="tab-pane <?= $key == 0 ? 'active show' : ''; ?>" id="departments-tab-<?= $key + 1; ?>">
                                                <div class="row">
                                                    <div class="col-lg-12 details order-2 order-lg-1">
                                                        <h3>Syarat Rekomendasi <?= $v['nama_surat']; ?></h3>
                                                        <?php if (!empty($syarat[$v['id']])) { ?>
                                                            <ol class="text-secondary">
                                                                <?php foreach ($syarat[$v['id']] as $ksy => $sy) { ?>
                                                                    <li class="text-secondary">
                                                                        <?= $sy; ?>
                                                                    </li>
                                                                <?php } ?>
                                                            </ol>
                                                        <?php } else { ?>
                                                            <p>Belum ada syarat tertulis</p>
                                                        <?php } ?>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php  } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p class="text-center">
                        Pengajuan surat rekomendasi secara online dapat dilakukan dengan klik tombol "Ajukan Surat Rekomendasi" di bawah ini <br>
                        <button type="button" style="background-color: var(--accent-color);" class="btn text-white" data-toggle="modal" data-target="#myModal">Ajukan Surat Rekomendasi</button>
                    </p>
                    <br>
                    <p class=" text-center">
                        Status Surat Tugas yang telah diajukan dapat dilihat dengan klik tombol "Lihat Status Surat" di bawah ini <br>
                        <button data-toggle="modal" data-target="#modalCekAjuan" class="btn btn-info text-white">Lihat Status Surat</button>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div><!-- End Page Title -->

<div class="modal fade" id="myModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">NIK Pemohon</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <?= form_open("/surekom/cek-nik-pemohon", ['class' => 'g-3 needs-validation formnik']); ?>
            <?= csrf_field(); ?>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12 form-group">
                        <input type="text" name="nik_pemohon" class="form-control" id="nik" placeholder="Masukkan NIK Pemohon" required>
                    </div>
                </div>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <div class="text-center"><button type="submit" style="background-color: var(--accent-color);" class="btn text-white btndaftar">Submit</button></div>
            </div>
            <?= form_close(); ?>
        </div>
    </div>
</div>
<!-- jQuery library -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

<script>
    $(document).ready(function() {
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
                        window.location = response.link;
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