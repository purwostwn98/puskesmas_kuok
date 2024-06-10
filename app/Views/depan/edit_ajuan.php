<?= $this->extend("/template/tempDepan.php"); ?>
<?= $this->section("konten"); ?>

<!-- Page Title -->
<div class="page-title" data-aos="fade">
    <div class="heading">
        <div class="container">
            <div class="row d-flex justify-content-center ">
                <div class="col-lg-12">
                    <h1 class="text-center">Edit Pemohon</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="alert alert-warning" role="alert">
                        Denah kurang jelas, mohon diganti yang lebih jelas!
                    </div>
                </div>
            </div>
            <?php foreach ($syarat as $sk => $s) { ?>
                <div class="row form-group">
                    <div class="col-md-4">
                        <label for="id_<?= $s['nama_field']; ?>"><?= $s['nama_syarat']; ?></label>
                    </div>
                    <div class="col-md-8">
                        <?php if ($s['type'] == "text") { ?>
                            <input type="text" name="<?= $s['nama_field']; ?>" class="form-control" id="id_<?= $s['nama_field']; ?>" value="" required>
                        <?php  } else { ?>
                            <input type="file" id="id_<?= $s['nama_field']; ?>" name="<?= $s['nama_field']; ?>" accept=".pdf, .jpg, .png">
                        <?php } ?>
                    </div>
                </div>
            <?php } ?>
            <hr>
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center">
                        <button type="button" class="btn btn-danger" onclick="btnClose()" data-dismiss="modal">Batal</button>
                        <button type="button" style="background-color: var(--accent-color);" class="btn text-white btndaftar">Simpan Perubahan</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>