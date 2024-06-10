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
    <div class="px-3 py-3 border-1 brc-secondary-l1 radius-3px shadow-md bgc-grey-l5">
        <div class="row">
            <div class="col-md-12">
                <p>Status : <b class="text-warning"><?= $status; ?></b></p>
                <p><i>Action</i> : <b><button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#modalAction"><i class="fa fa-edit"></i>Ubah Status</button></b></p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-striped table-responsive" id="tablebaru">
                    <thead class="bgc-primary text-white">
                        <tr>
                            <th class="text-center">Nama Dokumen</th>
                            <th class="text-center">Isi</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($syarat as $key => $value) { ?>
                            <tr>
                                <td><?= $value['nama_syarat']; ?></td>
                                <?php if ($value['type'] == "text") { ?>
                                    <td><?= $value['nama_field']; ?></td>
                                <?php } else { ?>
                                    <td><a href="<?= base_url('gambar/ambulance.jpg') ?>" target="_blank" class="btn btn-sm btn-info">Lihat Dokumen</a></td>
                                <?php } ?>
                                <td class="text-center">
                                    <button class="btn btn-sm btn-secondary <?= $value["nama_field"]; ?>" onclick="btnValidkan('<?= $value['nama_field']; ?>')">Validasi</button>
                                    <button style="display: none;" class="btn btn-sm btn-secondary undo_<?= $value["nama_field"]; ?>" onclick="btnUndo('<?= $value['nama_field']; ?>')"><i class="fas fa-undo-alt"></i></button>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Modal action -->
    <div class="modal fade" id="modalAction" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h6 class="modal-title">Mau diapakan Ajuan ini?</h6>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <?= form_open("/admin/rekomendasi-gantistsajuan", ['class' => 'g-3 needs-validation formaction']); ?>
                <?= csrf_field(); ?>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <textarea class="form-control" name="message" rows="4" placeholder="Jika ada pesan atau catatan untuk pemohon tulis di sini..."></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <select class="form-control" name="" id="">
                                <option value="" selected disabled>Ubah Status di sini</option>
                                <?php if ($status == "To Approve") { ?>
                                    <option value="disetujui">Setujui Ajuan</option>
                                    <option value="ditolak">Tolak Ajuan</option>
                                <?php } else { ?>
                                    <option value="baru">Ajuan Baru</option>
                                    <option value="proses">Sedang diproses</option>
                                    <option value="to_approve">To Approve</option>
                                    <option value="ditolak">Tolak Ajuan</option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <div class="text-center"><button type="submit" class="btn text-white btn-primary btndaftar">Submit</button></div>
                </div>
                <?= form_close(); ?>
            </div>
        </div>
    </div>
</div><!-- /.page-content -->

<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script>
    $(document).ready(function() {

    });
</script>
<script>
    function btnValidkan(params) {
        $("." + params).html("Oke");
        $("." + params).removeClass("btn-secondary");
        $("." + params).addClass("btn-success");
        // tombol undo
        $(".undo_" + params).css("display", "inline");
    }

    function btnUndo(params) {
        $("." + params).html("Validasi");
        $("." + params).removeClass("btn-success");
        $("." + params).addClass("btn-secondary");
        // tombol undo
        $(".undo_" + params).css("display", "none");
    }
</script>
<?= $this->endSection(); ?>