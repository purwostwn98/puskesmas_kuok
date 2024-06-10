<!-- Modal Data Pemohon -->
<div class="modal fade" id="modalLogin" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Login</h4>
            </div>
            <!-- Modal body -->
            <?= form_open("/auth/proses", ['class' => 'g-3 needs-validation formmasuk']); ?>
            <?= csrf_field(); ?>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12 form-group">
                        <input type="text" name="username" class="form-control" id="nik" placeholder="Username" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 form-group">
                        <input type="password" name="password" class="form-control" id="kode" placeholder="Password" required>
                    </div>
                </div>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <div class="text-center">
                    <button type="button" class="btn btn-danger" onclick="closeLogin()" data-dismiss="modal">Close</button>
                    <button type="submit" style="background-color: var(--accent-color);" class="btn text-white btndaftar">Login</button>
                </div>
            </div>
            <?= form_close(); ?>
        </div>
    </div>
</div>