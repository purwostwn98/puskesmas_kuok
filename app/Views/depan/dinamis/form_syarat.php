<h5 class="mb-3">Lengkapi data di bawah ini</h5>
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