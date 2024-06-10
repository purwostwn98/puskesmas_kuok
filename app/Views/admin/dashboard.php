<?= $this->extend("/template/tempAdmin.php"); ?>
<?= $this->section("konten"); ?>
<div class="page-content">
    <div class="page-header">
        <h1 class="page-title text-primary-d2">
            Dashboard
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
            <div class="col-12 col-sm-6 col-lg-3 p-0 p-md-1 my-2 my-sm-0">
                <div class="px-2 py-2 py-lg-3 d-flex pos-rel mx-1 justify-content-start justify-content-lg-center">
                    <div class="d-none d-lg-block border-r-1 brc-secondary-l1 position-rc h-75"></div>
                    <div class="d-sm-none mb-n1 border-b-1 brc-secondary-l1 position-bc w-90"></div>
                    <a href="/admin/rekomendasi-ajuanbaru">
                        <div class="pl-1">
                            <span class="d-inline-block bgc-success-m1 p-3 radius-round text-center">
                                <i class="fa fa-dice-d6 text-white text-180 w-4"></i>
                            </span>
                        </div>
                    </a>

                    <div class="pl-25">
                        <div class="d-flex align-items-center justify-content-between justify-content-md-start">
                            <span class="text-secondary-d3 text-160 mr-4">4</span>
                        </div>
                        <div class="text-nowrap">Ajuan Baru</div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-3 p-0 p-md-1 my-2 my-sm-0">
                <div class="px-2 py-2 py-lg-3 d-flex pos-rel mx-1 justify-content-start justify-content-lg-center">
                    <div class="d-none d-lg-block border-r-1 brc-secondary-l1 position-rc h-75"></div>
                    <div class="d-sm-none mb-n1 border-b-1 brc-secondary-l1 position-bc w-90"></div>
                    <div class="pl-1">
                        <span class="d-inline-block bgc-blue-m1 p-3 radius-round text-center">
                            <i class="fab fa-twitter text-white text-180 w-4"></i>
                        </span>
                    </div>

                    <div class="pl-25">
                        <div class="d-flex align-items-center justify-content-between justify-content-md-start">
                            <span class="text-secondary-d3 text-160 mr-4">10</span>
                        </div>
                        <div class="text-nowrap">Ajuan Proses</div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-3 p-0 p-md-1 my-2 my-sm-0">
                <div class="px-2 py-2 py-lg-3 d-flex pos-rel mx-1 justify-content-start justify-content-lg-center">
                    <div class="d-none d-lg-block border-r-1 brc-secondary-l1 position-rc h-75"></div>
                    <div class="d-sm-none mb-n1 border-b-1 brc-secondary-l1 position-bc w-90"></div>
                    <div class="pl-1">
                        <span class="d-inline-block bgc-purple-m1 p-3 radius-round text-center">
                            <i class="far fa-user text-white text-180 w-4"></i>
                        </span>
                    </div>

                    <div class="pl-25">
                        <div class="d-flex align-items-center justify-content-between justify-content-md-start">
                            <span class="text-secondary-d3 text-160 mr-4">30</span>
                        </div>
                        <div class="text-nowrap">Ajuan Selesai</div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-3 p-0 p-md-1 my-2 my-sm-0">
                <div class="px-2 py-2 py-lg-3 d-flex pos-rel mx-1 justify-content-start justify-content-lg-center">
                    <div class="pl-1">
                        <span class="d-inline-block bgc-danger-m1 p-3 radius-round text-center">
                            <i class="far fa-calendar-alt text-white text-180 w-4"></i>
                        </span>
                    </div>

                    <div class="pl-25">
                        <div class="d-flex align-items-center justify-content-between justify-content-md-start">
                            <span class="text-secondary-d3 text-160 mr-4">2</span>
                        </div>
                        <div class="text-nowrap">Ditolak</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- /.page-content -->

<?= $this->endSection(); ?>