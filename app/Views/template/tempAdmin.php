<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1">
    <base href="<?= base_url(); ?>/assetsadmin/" />

    <title>Puskesmas Kuok - Admin</title>

    <!-- include common vendor stylesheets -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/assetsadmin/node_modules/bootstrap/dist/css/bootstrap.css">

    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/assetsadmin/node_modules/@fortawesome/fontawesome-free/css/fontawesome.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/assetsadmin/node_modules/@fortawesome/fontawesome-free/css/regular.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/assetsadmin/node_modules/@fortawesome/fontawesome-free/css/brands.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/assetsadmin/node_modules/@fortawesome/fontawesome-free/css/solid.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/searchpanes/2.3.1/css/searchPanes.dataTables.min.css">



    <!-- include vendor stylesheets used in "Dashboard 3" page. see "application/views/default/pages/partials/dashboard-3/@vendor-stylesheets.hbs" -->


    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/assetsadmin/dist/css/ace-font.css">



    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/assetsadmin/dist/css/ace.css">


    <link rel="icon" type="image/png" href="assets/favicon.png" />

    <!-- "Dashboard 3" page styles specific to this page for demo purposes -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/assetsadmin/application/views/default/pages/partials/dashboard-3/@page-style.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/assetsadmin/dist/css/ace-themes.css">

</head>

<body>
    <div class="body-container">
        <nav class="navbar navbar-expand-lg navbar-fixed navbar-blue">
            <div class="navbar-inner">

                <div class="navbar-intro justify-content-xl-between">

                    <button type="button" class="btn btn-burger burger-arrowed static collapsed ml-2 d-flex d-xl-none" data-toggle-mobile="sidebar" data-target="#sidebar" aria-controls="sidebar" aria-expanded="false" aria-label="Toggle sidebar">
                        <span class="bars"></span>
                    </button><!-- mobile sidebar toggler button -->

                    <a class="navbar-brand text-white" href="#">
                        <i class="fa fa-leaf"></i>
                        <span>Puskesmas</span>
                        <span>Kuok</span>
                    </a><!-- .navbar-brand -->

                    <button type="button" class="btn btn-burger mr-2 d-none d-xl-flex" data-toggle="sidebar" data-target="#sidebar" aria-controls="sidebar" aria-expanded="true" aria-label="Toggle sidebar">
                        <span class="bars"></span>
                    </button><!-- sidebar toggler button -->

                </div><!-- .navbar-intro -->


                <div class="navbar-content">

                    <button class="navbar-toggler py-2" type="button" data-toggle="collapse" data-target="#navbarSearch" aria-controls="navbarSearch" aria-expanded="false" aria-label="Toggle navbar search">
                        <i class="fa fa-search text-white text-90 py-1"></i>
                    </button>

                    <div class="navbar-content-section collapse navbar-collapse navbar-backdrop" id="navbarSearch">
                        <div class="d-flex align-items-center ml-lg-1 pos-rel">
                            <input type="text" class="navbar-search-input pr-1 pl-425 h-auto py-25 border-0 bgc-white-tp9 radius-2 text-dark-tp3 autofocus mr-0" placeholder="Search for something ..." aria-label="Search" />
                            <i class="fa fa-search text-white d-none d-lg-block position-lc ml-4 text-95"></i>
                        </div>
                    </div>

                </div><!-- .navbar-content -->


                <!-- mobile #navbarMenu toggler button -->
                <button class="navbar-toggler ml-1 mr-2 px-1" type="button" data-toggle="collapse" data-target="#navbarMenu" aria-controls="navbarMenu" aria-expanded="false" aria-label="Toggle navbar menu">
                    <span class="pos-rel">
                        <img class="border-2 brc-white-tp1 radius-round" width="36" src="assets/image/user.jpg" alt="Jason's Photo">
                        <span class="bgc-warning radius-round border-2 brc-white p-1 position-tr mr-1px mt-1px"></span>
                    </span>
                </button>


                <div class="navbar-menu collapse navbar-collapse navbar-backdrop" id="navbarMenu">

                    <div class="navbar-nav">
                        <ul class="nav border-0 has-active-border">

                            <li class="nav-item dropdown order-first order-lg-last dropdown-hover">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                    <img id="id-navbar-user-image" class="d-none d-lg-inline-block radius-round border-2 brc-white-tp1 mr-2" src="assets/image/user.jpg" alt="Jason's Photo">
                                    <span class="d-inline-block d-lg-none d-xl-inline-block">
                                        <span class="text-90" id="id-user-welcome">Welcome,</span>
                                        <span class="nav-user-name">Purwo</span>
                                    </span>

                                    <i class="caret fa fa-angle-down d-none d-xl-block"></i>
                                    <i class="caret fa fa-angle-left d-block d-lg-none"></i>
                                </a>

                                <div class="dropdown-menu dropdown-caret dropdown-menu-right dropdown-animated brc-primary-m3">
                                    <div class="d-none d-lg-block d-xl-none">
                                        <div class="dropdown-header">
                                            Welcome, Jason
                                        </div>
                                        <div class="dropdown-divider"></div>
                                    </div>

                                    <a class="dropdown-item btn btn-outline-grey btn-h-lighter-primary btn-a-lighter-primary" href="html/page-profile.html">
                                        <i class="fa fa-user text-primary-m1 text-105 mr-1"></i>
                                        Profile
                                    </a>

                                    <a class="dropdown-item btn btn-outline-grey btn-h-lighter-success btn-a-lighter-success" href="#" data-toggle="modal" data-target="#id-ace-settings-modal">
                                        <i class="fa fa-cog text-success-m1 text-105 mr-1"></i>
                                        Settings
                                    </a>

                                    <div class="dropdown-divider brc-primary-l2"></div>

                                    <a class="dropdown-item btn btn-outline-grey btn-h-lighter-secondary btn-a-lighter-secondary" href="/logout">
                                        <i class="fa fa-power-off text-warning-d1 text-105 mr-1"></i>
                                        Logout
                                    </a>
                                </div>
                            </li><!-- .nav-item:last -->

                        </ul><!-- .navbar-nav menu -->
                    </div><!-- .navbar-nav -->

                </div><!-- .navbar-menu.navbar-collapse -->

            </div>
        </nav>
        <div class="main-container">

            <div id="sidebar" class="sidebar sidebar-fixed expandable sidebar-color sidebar-darkblue sidebar-top sidebar-backdrop d-none d-xl-block" data-swipe="true" data-dismiss="true">
                <div class="sidebar-inner">

                    <div class="ace-scroll flex-grow-1" ace-scroll>

                        <div class="sidebar-section sidebar-header my-2">
                            <div class="sidebar-section-item fadeable-left">

                                <div class="fadeinable sidebar-shortcuts-mini">
                                    <span class="btn btn-outline-info border-2 text-white radius-2"></span>
                                    <span class="btn btn-outline-info border-2 text-white radius-2"></span>
                                    <span class="btn btn-outline-info border-2 text-white radius-2"></span>
                                    <span class="btn btn-outline-info border-2 text-white radius-2"></span>
                                </div>

                                <div class="fadeable">
                                    <div class="sub-arrow"></div>
                                    <div>
                                        <h6 class="text-white">P E R F E C T</h6>
                                        <!-- <button class="btn btn-smd btn-outline-info border-2 text-white radius-2">
                                            <i class="fa fa-signal"></i>
                                        </button>

                                        <button class="btn btn-smd btn-outline-info border-2 text-white radius-2">
                                            <i class="fa fa-edit"></i>
                                        </button>

                                        <button class="btn btn-smd btn-outline-info border-2 text-white radius-2">
                                            <i class="fa fa-users"></i>
                                        </button>

                                        <button class="btn btn-smd btn-outline-info border-2 text-white radius-2">
                                            <i class="fa fa-cogs"></i>
                                        </button> -->
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="sidebar-section-item">
                                <i class="fadeinable fa fa-search text-orange-l2 mr-n1"></i>

                                <div class="fadeable d-inline-flex align-items-center ml-3 ml-lg-0">
                                    <i class="fa fa-search mr-n3 text-orange-l2"></i>
                                    <input type="text" class="sidebar-search-input pl-4 pr-3 mr-n2" maxlength="60" placeholder="Search ..." aria-label="Search" aria-describedby="basic-search" />
                                    <a href="#"><i class="fa fa-microphone text-white-tp3 ml-n1"></i></a>
                                </div>
                            </div> -->
                        </div>

                        <ul class="nav flex-column has-active-border active-on-right" role="navigation" aria-label="Main">
                            <li class="nav-item-caption">
                                <span class="fadeable pl-3">Admin</span>
                                <span class="fadeinable mt-n2 text-125">&hellip;</span>
                            </li>
                            <li class="nav-item <?= $hal[1] == 'dashboard-admin' ? 'active' : ''; ?>">
                                <a href="/admin/dashboard" class="nav-link">
                                    <i class="nav-icon fa fa-tachometer-alt"></i>
                                    <span class="nav-text fadeable">
                                        <span>Dashboard</span>
                                    </span>
                                </a>
                                <b class="sub-arrow"></b>
                            </li>
                            <li class="nav-item <?= $hal[0] == 'ajuan-rekomendasi' ? 'active open' : ''; ?>">
                                <a href="/admin/rekomendasi-ajuanbaru" class="nav-link dropdown-toggle">
                                    <i class="nav-icon fa fa-cube"></i>
                                    <span class="nav-text fadeable">
                                        <span>Ajuan Rekomendasi</span>
                                    </span>
                                    <b class="caret fa fa-angle-left rt-n90"></b>
                                </a>

                                <!-- <div class="hideable submenu collapse show"> -->
                                <div class="hideable submenu collapse <?= $hal[0] == 'ajuan-rekomendasi' ? 'show' : ''; ?>">
                                    <ul class="submenu-inner">
                                        <li class="nav-item <?= $hal[1] == 'rekomendasi-baru' ? 'active' : ''; ?>">
                                            <a href="/admin/rekomendasi-ajuanbaru" class="nav-link">
                                                <span class="nav-text">
                                                    <span>Baru</span>
                                                </span>
                                            </a>
                                        </li>
                                        <li class="nav-item <?= $hal[1] == 'rekomendasi-proses' ? 'active' : ''; ?>">
                                            <a href="/admin/rekomendasi-dalamproses" class="nav-link">
                                                <span class="nav-text">
                                                    <span>Dalam Proses</span>
                                                </span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="/admin/rekomendasi-toapprove" class="nav-link">
                                                <span class="nav-text">
                                                    <span>To Approve</span>
                                                </span>
                                            </a>
                                        </li>
                                        <li class="nav-item <?= $hal[1] == 'rekomendasi-ditolak' ? 'active' : ''; ?>">
                                            <a href="/admin/rekomendasi-ditolak" class="nav-link">
                                                <span class="nav-text">
                                                    <span>Ditolak</span>
                                                </span>
                                            </a>
                                        </li>

                                        <li class="nav-item <?= $hal[1] == 'rekomendasi-disetujui' ? 'active' : ''; ?>">
                                            <a href="/admin/rekomendasi-disetujui" class="nav-link">
                                                <span class="nav-text">
                                                    <span>Disetujui</span>
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <b class="sub-arrow"></b>
                            </li>
                        </ul>
                    </div><!-- .sidebar scroll -->

                    <div class="sidebar-section sidebar-footer">
                        <div class="sidebar-section-item fadeable-bottom">
                            <div class="fadeable hideable w-100 bg-transparent shadow-none border-0">
                                <div id="sidebar-footer-bg" class="shadow-sm bgc-primary-tp2 d-flex align-items-center shadow-sm mx-2 mt-2px py-2 radius-t-1 border-1 border-t-2 border-b-0 brc-white-tp2">

                                    <a href="#" class="btn btn-outline-white border-0 p-2 mr-2px ml-4" title="Settings" data-toggle="modal" data-target="#id-ace-settings-modal">
                                        <i class="fa fa-cog text-150"></i>
                                    </a>

                                    <a href="/logout" class="btn btn-outline-white border-0 p-2 mr-1" title="Logout">
                                        <i class="fa fa-sign-out-alt text-150"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div><!-- /#sidebar -->

            <div role="main" class="main-content">

                <?= $this->renderSection("konten"); ?>

                <footer class="footer d-none d-sm-block">
                    <div class="footer-inner bgc-white-tp1">
                        <div class="pt-3 border-none border-t-3 brc-grey-l1 border-double">
                            <span class="text-primary-m2 font-bolder text-120">Ace</span>
                            <span class="text-muted">Application &copy; 2020</span>

                            <span class="mx-3 action-buttons">
                                <a href="#" class="text-blue2-m3 text-140"><i class="fab fa-twitter-square"></i></a>
                                <a href="#" class="text-blue-d1 text-140"><i class="fab fa-facebook"></i></a>
                                <a href="#" class="text-orange text-140"><i class="fa fa-rss-square"></i></a>
                            </span>
                        </div>
                    </div><!-- .footer-inner -->

                    <div class="footer-tools">
                        <a id="btn-scroll-up" href="#" class="btn-scroll-up btn btn-dark btn-smd mb-2 mr-2">
                            <i class="fa fa-angle-double-up mx-1"></i>
                        </a>
                    </div>
                </footer>

                <!-- footer toolbox for mobile view -->
                <footer class="d-sm-none footer-sm footer-fixed">
                    <div class="footer-inner">
                        <div class="btn-group d-flex h-100 mx-0 border-x-0 border-t-2 brc-primary-m3 bgc-default-l5 radius-t-0 px-2 py-15 shadow-lg">
                            <button class="btn btn-outline-lightgrey btn-h-lighter-primary btn-a-lighter-primary active border-0 radius-round px-4 mx-2">
                                <i class="fa fa-home text-120"></i>
                                Home
                            </button>

                            <button class="btn btn-outline-lightgrey btn-h-lighter-purple btn-a-lighter-purple border-0 radius-round">
                                <i class="fa fa-plus-circle opacity-3 text-120"></i>
                            </button>

                            <button data-toggle="collapse" data-target="#navbarSearch" aria-controls="navbarSearch" aria-expanded="false" aria-label="Toggle navbar search" class="btn btn-outline-lightgrey btn-h-lighter-warning btn-a-lighter-warning border-0 radius-round">
                                <i class="fa fa-search opacity-3 text-120"></i>
                            </button>

                            <button class="btn btn-outline-lightgrey btn-h-lighter-brown btn-a-lighter-brown border-0 mr-0 radius-round">
                                <i class="fa fa-bell opacity-3 text-120"></i>
                            </button>
                        </div>
                    </div>
                </footer>
            </div><!-- /main -->

            <div id="id-ace-settings-modal" class="my-1 my-lg-2 modal modal-nb ace-aside aside-right aside-offset aside-below-nav" data-backdrop="false" tabindex="-1" role="dialog" aria-hidden="true">

                <div class="modal-dialog" role="document">
                    <div class="modal-content w-auto flex-grow-1 pb-1px radius-0 radius-l-2 border-y-2 border-l-1 brc-default-m3 bgc-white-tp1 shadow">

                        <div class="modal-header p-0 radius-0 mx-3">
                            <h4 class="modal-title text-blue-m1 pt-2 pl-1">Demo Settings</h4>

                            <button type="button" class="close m-0 mr-n2" data-dismiss="modal" aria-label="Close">
                                <i class="fa fa-times text-70" aria-hidden="true"></i>
                            </button>
                        </div>

                        <div class="modal-body mx-md-2" ace-scroll='{"smooth": true, "lock": true}'>
                            <div class="d-flex flex-column flex-md-row justify-content-md-between align-items-md-center">
                                <h5 class="text-secondary-m1">Zoom</h5>

                                <div class="btn-group btn-group-toggle align-self-end" data-toggle="buttons">
                                    <label class="btn btn-sm btn-light-grey btn-h-light-primary btn-a-primary">
                                        90%
                                        <input type="radio" name="zoom-level" value="90" autocomplete="off" />
                                    </label>

                                    <label class="btn btn-sm btn-light-grey btn-h-light-primary btn-a-primary active">
                                        100%
                                        <input type="radio" name="zoom-level" value="none" autocomplete="off" checked />
                                    </label>

                                    <label class="btn btn-sm btn-light-grey btn-h-light-primary btn-a-primary">
                                        110%
                                        <input type="radio" name="zoom-level" value="110" autocomplete="off" />
                                    </label>

                                    <label class="btn btn-sm btn-light-grey btn-h-light-primary btn-a-primary">
                                        120%
                                        <input type="radio" name="zoom-level" value="120" autocomplete="off" />
                                    </label>
                                </div>
                            </div>

                            <hr class="border-double my-md-3" />

                            <h5 class="text-purple-m2">
                                Themes
                            </h5>

                            <div class="bgc-secondary-l3 py-1 radius-1 mb-3 border-1 radius-1 border-l-3 brc-secondary-m3">
                                <label class="mt-1 pr-2 d-flex align-items-center" for="id-auto-match">
                                    <input type="checkbox" class="input-lg mx-15" id="id-auto-match" autocomplete="off" checked />

                                    <div class="pl-0 text-secondary-d1 text-90 font-bolder">Match sidebar &amp; navbar themes</div>
                                </label>
                            </div>



                            <div class="d-flex flex-column flex-md-row justify-content-md-between align-items-md-center">
                                <h6 class="text-95 pl-1 text-grey-d1">Sidebar:</h6>

                                <div class="btn-group btn-group-toggle align-self-end flex-wrap px-0  col-10 col-sm-7" data-toggle="buttons">
                                    <label class="btn btn-sm btn-outline-default active mb-1">
                                        Default
                                        <input type="radio" name="sidebar-theme" value="default" autocomplete="off" checked />
                                    </label>

                                    <label class="btn btn-sm btn-outline-default mb-1">
                                        Dark
                                        <input type="radio" name="sidebar-theme" value="dark" autocomplete="off" />
                                    </label>

                                    <label class="btn btn-sm btn-outline-default mb-1 ">
                                        Light
                                        <input type="radio" name="sidebar-theme" value="light" autocomplete="off" />
                                    </label>
                                </div>
                            </div>



                            <div>
                                <div class="d-none bgc-secondary-l1 radius-1 px-1 mb-3 mt-1 text-center" id="id-sidebar-themes-dark">
                                    <div class="btn-group btn-group-toggle align-self-end flex-wrap justify-content-center w-75 mx-auto align-items-center my-2 flex-equal-sm" data-toggle="buttons">
                                        <label class="btn btn-xs sidebar-color border-0 sidebar-dark d-style active">
                                            <i class="fa fa-check text-white v-active"></i>
                                            <input type="radio" name="sidebar-dark" value="dark" autocomplete="off" checked />
                                        </label>

                                        <label class="btn btn-xs sidebar-color border-0 sidebar-darkblue d-style">
                                            <i class="fa fa-check text-white v-active"></i>
                                            <input type="radio" name="sidebar-dark" value="darkblue" autocomplete="off" />
                                        </label>

                                        <label class="btn btn-xs sidebar-color border-0 sidebar-darkslategrey d-style">
                                            <i class="fa fa-check text-white v-active"></i>
                                            <input type="radio" name="sidebar-dark" value="darkslategrey" autocomplete="off" />
                                        </label>

                                        <label class="btn btn-xs sidebar-color border-0 sidebar-cadetblue d-style">
                                            <i class="fa fa-check text-white v-active"></i>
                                            <input type="radio" name="sidebar-dark" value="cadetblue" autocomplete="off" />
                                        </label>

                                        <label class="btn btn-xs sidebar-color border-0 sidebar-plum d-style my-1px">
                                            <i class="fa fa-check text-white v-active"></i>
                                            <input type="radio" name="sidebar-dark" value="plum" autocomplete="off" />
                                        </label>

                                        <label class="btn btn-xs sidebar-color border-0 sidebar-darkslateblue d-style">
                                            <i class="fa fa-check text-white v-active"></i>
                                            <input type="radio" name="sidebar-dark" value="darkslateblue" autocomplete="off" />
                                        </label>

                                        <label class="btn btn-xs sidebar-color border-0 sidebar-purple d-style">
                                            <i class="fa fa-check text-white v-active"></i>
                                            <input type="radio" name="sidebar-dark" value="purple" autocomplete="off" />
                                        </label>

                                        <label class="btn btn-xs sidebar-color border-0 sidebar-steelblue d-style">
                                            <i class="fa fa-check text-white v-active"></i>
                                            <input type="radio" name="sidebar-dark" value="steelblue" autocomplete="off" />
                                        </label>

                                        <label class="btn btn-xs sidebar-color border-0 sidebar-blue d-style">
                                            <i class="fa fa-check text-white v-active"></i>
                                            <input type="radio" name="sidebar-dark" value="blue" autocomplete="off" />
                                        </label>

                                        <label class="btn btn-xs sidebar-color border-0 sidebar-teal d-style">
                                            <i class="fa fa-check text-white v-active"></i>
                                            <input type="radio" name="sidebar-dark" value="teal" autocomplete="off" />
                                        </label>

                                        <label class="btn btn-xs sidebar-color border-0 sidebar-green d-style">
                                            <i class="fa fa-check text-white v-active"></i>
                                            <input type="radio" name="sidebar-dark" value="green" autocomplete="off" />
                                        </label>

                                        <label class="btn btn-xs sidebar-color border-0 sidebar-darkcrimson d-style">
                                            <i class="fa fa-check text-white v-active"></i>
                                            <input type="radio" name="sidebar-dark" value="darkcrimson" autocomplete="off" />
                                        </label>

                                        <label class="btn btn-xs sidebar-color border-0 sidebar-gradient1 d-style">
                                            <i class="fa fa-check text-white v-active"></i>
                                            <input type="radio" name="sidebar-dark" value="gradient1" autocomplete="off" />
                                        </label>

                                        <label class="btn btn-xs sidebar-color border-0 sidebar-gradient2 d-style">
                                            <i class="fa fa-check text-white v-active"></i>
                                            <input type="radio" name="sidebar-dark" value="gradient2" autocomplete="off" />
                                        </label>

                                        <label class="btn btn-xs sidebar-color border-0 sidebar-gradient3 d-style">
                                            <i class="fa fa-check text-white v-active"></i>
                                            <input type="radio" name="sidebar-dark" value="gradient3" autocomplete="off" />
                                        </label>

                                        <label class="btn btn-xs sidebar-color border-0 sidebar-gradient4 d-style">
                                            <i class="fa fa-check text-white v-active"></i>
                                            <input type="radio" name="sidebar-dark" value="gradient4" autocomplete="off" />
                                        </label>

                                        <label class="btn btn-xs sidebar-color border-0 sidebar-gradient5 d-style">
                                            <i class="fa fa-check text-white v-active"></i>
                                            <input type="radio" name="sidebar-dark" value="gradient5" autocomplete="off" />
                                        </label>

                                    </div>
                                </div><!-- #id-sidebar-themes-dark -->


                                <div class="d-none" id="id-sidebar-themes-light">
                                    <div class="bgc-secondary-tp2 radius-1 py-1 px-1 mb-3 mt-1 text-center">
                                        <div class="d-flex btn-group btn-group-toggle align-self-end flex-wrap justify-content-center mx-auto align-items-center my-2 flex-equal-sm" data-toggle="buttons">

                                            <label class="active btn btn-xs border-0 sidebar-lightblue d-style my-1px">
                                                <i class="fa fa-check text-muted v-active"></i>
                                                <input type="radio" name="sidebar-light" value="lightblue" autocomplete="off" checked />
                                            </label>

                                            <label class="btn btn-xs border-0 sidebar-lightpurple d-style">
                                                <i class="fa fa-check text-muted v-active"></i>
                                                <input type="radio" name="sidebar-light" value="lightpurple" autocomplete="off" />
                                            </label>

                                            <label class="btn btn-xs border-0 sidebar-lightblue2 d-style">
                                                <i class="fa fa-check text-muted v-active"></i>
                                                <input type="radio" name="sidebar-light" value="lightblue2" autocomplete="off" />
                                            </label>

                                            <label class="btn btn-xs border-0 sidebar-white2 d-style">
                                                <i class="fa fa-check text-muted v-active"></i>
                                                <input type="radio" name="sidebar-light" value="white2" autocomplete="off" />
                                            </label>

                                            <label class="btn btn-xs border-0 sidebar-white d-style">
                                                <i class="fa fa-check text-muted v-active"></i>
                                                <input type="radio" name="sidebar-light" value="white" autocomplete="off" />
                                            </label>

                                            <label class="btn btn-xs border-0 sidebar-white3 d-style">
                                                <i class="fa fa-check text-muted v-active"></i>
                                                <input type="radio" name="sidebar-light" value="white3" autocomplete="off" />
                                            </label>

                                            <label class="btn btn-xs border-0 sidebar-light d-style">
                                                <i class="fa fa-check text-muted v-active"></i>
                                                <input type="radio" name="sidebar-light" value="light" autocomplete="off" />
                                            </label>

                                        </div>
                                    </div>
                                </div><!-- #id-sidebar-themes-light -->

                            </div>


                            <hr class="border-dotted" />


                            <div class="d-flex flex-column flex-md-row justify-content-md-between align-items-md-center">
                                <h6 class="text-95 pl-1 text-grey-d1">Navbar:</h6>

                                <div class="btn-group btn-group-toggle align-self-end flex-wrap px-0 col-10 col-sm-7" data-toggle="buttons">
                                    <label class="btn btn-sm btn-outline-green active mb-1">
                                        Default
                                        <input type="radio" name="navbar-theme" value="default" autocomplete="off" checked />
                                    </label>

                                    <label class="btn btn-sm btn-outline-green mb-1">
                                        Light
                                        <input type="radio" name="navbar-theme" value="light" autocomplete="off" />
                                    </label>

                                    <label class="btn btn-sm btn-outline-green mb-1">
                                        Dark
                                        <input type="radio" name="navbar-theme" value="dark" autocomplete="off" />
                                    </label>
                                </div>

                            </div>

                            <div>

                                <div class="d-none bgc-secondary-l1 radius-1 px-1 mb-3 mt-1 text-center" id="id-navbar-themes-dark">
                                    <div class="btn-group btn-group-toggle align-self-end flex-wrap justify-content-center w-75 mx-auto align-items-center my-2 flex-equal-sm" data-toggle="buttons">

                                        <label class="btn btn-xs navbar-color border-0 navbar-steelblue d-style active my-1px">
                                            <i class="fa fa-check text-white v-active"></i>
                                            <input type="radio" name="navbar-dark" value="steelblue" autocomplete="off" checked />
                                        </label>

                                        <label class="btn btn-xs border-0 navbar-blue d-style">
                                            <i class="fa fa-check text-white v-active"></i>
                                            <input type="radio" name="navbar-dark" value="blue" autocomplete="off" />
                                        </label>

                                        <label class="btn btn-xs navbar-color border-0 navbar-teal d-style">
                                            <i class="fa fa-check text-white v-active"></i>
                                            <input type="radio" name="navbar-dark" value="teal" autocomplete="off" />
                                        </label>

                                        <label class="btn btn-xs navbar-color border-0 navbar-mediumseagreen d-style">
                                            <i class="fa fa-check text-white v-active"></i>
                                            <input type="radio" name="navbar-dark" value="mediumseagreen" autocomplete="off" />
                                        </label>

                                        <label class="btn btn-xs navbar-color border-0 navbar-cadetblue d-style">
                                            <i class="fa fa-check text-white v-active"></i>
                                            <input type="radio" name="navbar-dark" value="cadetblue" autocomplete="off" />
                                        </label>



                                        <label class="btn btn-xs navbar-color border-0 navbar-plum d-style">
                                            <i class="fa fa-check text-white v-active"></i>
                                            <input type="radio" name="navbar-dark" value="plum" autocomplete="off" />
                                        </label>

                                        <label class="btn btn-xs navbar-color border-0 navbar-purple d-style">
                                            <i class="fa fa-check text-white v-active"></i>
                                            <input type="radio" name="navbar-dark" value="purple" autocomplete="off" />
                                        </label>

                                        <label class="btn btn-xs navbar-color border-0 navbar-orange d-style">
                                            <i class="fa fa-check text-white v-active"></i>
                                            <input type="radio" name="navbar-dark" value="orange" autocomplete="off" />
                                        </label>


                                        <label class="btn btn-xs navbar-color border-0 navbar-burlywood d-style">
                                            <i class="fa fa-check text-white v-active"></i>
                                            <input type="radio" name="navbar-dark" value="burlywood" autocomplete="off" />
                                        </label>

                                        <label class="btn btn-xs navbar-color border-0 navbar-darkseagreen d-style">
                                            <i class="fa fa-check text-white v-active"></i>
                                            <input type="radio" name="navbar-dark" value="darkseagreen" autocomplete="off" />
                                        </label>

                                        <label class="btn btn-xs border-0 navbar-skyblue d-style">
                                            <i class="fa fa-check text-white v-active"></i>
                                            <input type="radio" name="navbar-dark" value="skyblue" autocomplete="off" />
                                        </label>

                                        <label class="btn btn-xs navbar-color border-0 navbar-secondary d-style">
                                            <i class="fa fa-check text-white v-active"></i>
                                            <input type="radio" name="navbar-dark" value="secondary" autocomplete="off" />
                                        </label>

                                        <label class="btn btn-xs navbar-color border-0 navbar-slategrey d-style">
                                            <i class="fa fa-check text-white v-active"></i>
                                            <input type="radio" name="navbar-dark" value="slategrey" autocomplete="off" />
                                        </label>

                                    </div>
                                </div><!-- #id-navbar-themes-dark -->

                                <div class="d-none" id="id-navbar-themes-light">
                                    <div class="bgc-secondary-tp2 radius-1 py-1 px-1 mb-3 mt-1 text-center">
                                        <div class="d-flex btn-group btn-group-toggle align-self-end flex-wrap justify-content-center mx-auto align-items-center my-2 flex-equal-sm" data-toggle="buttons">

                                            <label class="active btn btn-xs border-0 navbar-lightblue d-style my-1px">
                                                <i class="fa fa-check text-muted v-active"></i>
                                                <input type="radio" name="navbar-light" value="lightblue" autocomplete="off" checked />
                                            </label>

                                            <label class=" btn btn-xs border-0 navbar-white d-style my-1px">
                                                <i class="fa fa-check text-muted v-active"></i>
                                                <input type="radio" name="navbar-light" value="white" autocomplete="off" />
                                            </label>

                                            <label class=" btn btn-xs border-0 navbar-white2 d-style my-1px">
                                                <i class="fa fa-check text-muted v-active"></i>
                                                <input type="radio" name="navbar-light" value="white2" autocomplete="off" />
                                            </label>

                                            <label class="btn btn-xs border-0 navbar-lightpurple d-style">
                                                <i class="fa fa-check text-muted v-active"></i>
                                                <input type="radio" name="navbar-light" value="lightpurple" autocomplete="off" />
                                            </label>

                                            <label class="btn btn-xs border-0 navbar-lightgreen d-style">
                                                <i class="fa fa-check text-muted v-active"></i>
                                                <input type="radio" name="navbar-light" value="lightgreen" autocomplete="off" />
                                            </label>

                                            <label class="btn btn-xs border-0 navbar-lightgrey d-style">
                                                <i class="fa fa-check text-muted v-active"></i>
                                                <input type="radio" name="navbar-light" value="lightgrey" autocomplete="off" />
                                            </label>

                                            <label class="btn btn-xs border-0 navbar-lightyellow d-style">
                                                <i class="fa fa-check text-muted v-active"></i>
                                                <input type="radio" name="navbar-light" value="lightyellow" autocomplete="off" />
                                            </label>

                                            <label class="btn btn-xs border-0 navbar-khaki d-style">
                                                <i class="fa fa-check text-muted v-active"></i>
                                                <input type="radio" name="navbar-light" value="khaki" autocomplete="off" />
                                            </label>

                                        </div>
                                    </div>

                                </div><!-- #id-navbar-themes-light -->

                            </div>


                            <hr class="border-dotted" />


                            <div class="text-95">
                                <h5 class="text-success-m1">Layout</h5>

                                <div class="mt-3 d-flex justify-content-between align-items-center">
                                    <label for="id-navbar-fixed" class="pl-1 text-grey-d1">Fixed Navbar</label>
                                    <input type="checkbox" class="ace-switch" id="id-navbar-fixed" checked autocomplete="off" />
                                </div>

                                <div class="mt-2 d-flex justify-content-between align-items-center">
                                    <label for="id-sidebar-fixed" class="pl-1 text-grey-d1">Fixed Sidebar</label>
                                    <input type="checkbox" class="ace-switch" id="id-sidebar-fixed" checked autocomplete="off" />
                                </div>

                                <div class="mt-2 d-flex justify-content-between align-items-center">
                                    <label for="id-footer-fixed" class="pl-1 text-grey-d1">Fixed Footer</label>
                                    <input type="checkbox" class="ace-switch" id="id-footer-fixed" autocomplete="off" />
                                </div>

                                <div class="mt-2 d-none d-xl-flex flex-column flex-md-row justify-content-md-between align-items-md-center">
                                    <div class="pl-1 text-grey-d1">Boxed Layout</div>

                                    <div class="w-50 btn-group btn-group-toggle flex-row flex-wrap fl1ex-md-nowrap" data-toggle="buttons">
                                        <label class="btn btn-sm btn-outline-info rounded-0 mx-0">
                                            None
                                            <input type="radio" name="boxed-layout" value="none" autocomplete="off" />
                                        </label>

                                        <label class="btn btn-sm btn-outline-info mx-0">
                                            All
                                            <input type="radio" name="boxed-layout" value="all" autocomplete="off" />
                                        </label>

                                        <label class="btn btn-sm btn-outline-info mx-0">
                                            Not Navbar
                                            <input type="radio" name="boxed-layout" value="not-navbar" autocomplete="off" />
                                        </label>

                                        <label class="btn btn-sm btn-outline-info rounded-0 mx-0 mt-n1px active">
                                            Only Content
                                            <input type="radio" name="boxed-layout" value="only-content" autocomplete="off" checked />
                                        </label>
                                    </div>
                                </div>

                                <div id="id-body-bg" class="collapse">
                                    <div class="mt-3 d-none d-xl-flex flex-column flex-md-row justify-content-md-between align-items-md-center">
                                        <h6 class="text-95 pl-1 text-grey-d1">Body Background:</h6>

                                        <div class="btn-group btn-group-toggle align-self-end" data-toggle="buttons">
                                            <label class="btn btn-sm btn-outline-purple active  mb-1">
                                                Auto
                                                <input type="radio" name="body-theme" value="auto" autocomplete="off" checked />
                                            </label>

                                            <label class="btn btn-sm btn-outline-purple mb-1">
                                                Image 1
                                                <input type="radio" name="body-theme" value="img1" autocomplete="off" />
                                            </label>

                                            <label class="btn btn-sm btn-outline-purple mb-1">
                                                Image 2
                                                <input type="radio" name="body-theme" value="img2" autocomplete="off" />
                                            </label>
                                        </div>
                                    </div>
                                </div>



                                <hr class="border-dotted my-2" />

                                <div class="mt-1 d-flex justify-content-between align-items-center">
                                    <label for="id-rtl" class="pl-1 text-grey-d1">RTL (right to left)</label>

                                    <input type="checkbox" class="ace-switch" id="id-rtl" autocomplete="off" />
                                </div>


                            </div>

                            <hr class="border-double my-md-4" />

                            <div class="d-flex flex-column flex-md-row justify-content-md-between align-items-md-center">
                                <h5 class="text-info">Font</h5>

                                <div class="align-self-end w-75">
                                    <select autocomplete="off" id="id-change-font" class="ace-select radius-round w-100 text-grey brc-h-info-m2">
                                        <option value="lato">Lato</option>
                                        <option value="montserrat">Montserrat</option>
                                        <option value="noto-sans">Noto Sans</option>
                                        <option value="open-sans" selected>Open Sans</option>
                                        <option value="poppins">Poppins</option>
                                        <option value="raleway">Raleway</option>
                                        <option value="roboto" class="text-primary-d2 text-600">Roboto (popular)</option>
                                        <option value="">----</option>
                                        <option value="markazi">Markazi (for RTL languages)</option>
                                    </select>
                                </div>
                            </div>


                            <hr class="border-double my-md-4" />

                            <div class="text-95">
                                <h5 class="text-warning-d1 ml-n2px">Sidebar</h5>
                                <!--
                  <div class="mt-3 d-none d-xl-flex justify-content-between align-items-center">
                      <label for="id-sidebar-compact" class="pl-1 text-grey-d2">Compact</label>
        
                      <div class="custom-control custom-switch d-inline-block">
                        <input type="checkbox" class="custom-control-input" id="id-sidebar-compact" autocomplete="off" />
                        <label class="custom-control-label" for="id-sidebar-compact"></label>
                      </div>
                  </div>
        
                  <div class="mt-2 d-none d-xl-flex justify-content-between align-items-center">
                      <label for="id-sidebar-hover" class="pl-1 text-grey-d2">Submenu on Hover</label>
        
                      <div class="custom-control custom-switch d-inline-block">
                        <input type="checkbox" class="custom-control-input" id="id-sidebar-hover" autocomplete="off" />
                        <label class="custom-control-label" for="id-sidebar-hover"></label>
                      </div>
                  </div>
                  -->

                                <div class="mt-2 d-none d-xl-flex justify-content-between align-items-center">
                                    <div class="pl-1 text-grey-d1">Collapsed Mode</div>

                                    <div class="btn-group btn-group-toggle flex-row" data-toggle="buttons">
                                        <label class="btn btn-sm btn-outline-red active mx-0">
                                            Expand
                                            <input type="radio" name="sidebar-collapsed" value="expandable" autocomplete="off" checked />
                                        </label>

                                        <label class="btn btn-sm btn-outline-red mx-0">
                                            Popup
                                            <input type="radio" name="sidebar-collapsed" value="hoverable" autocomplete="off" />
                                        </label>

                                        <label class="btn btn-sm btn-outline-red mx-0">
                                            Hide
                                            <input type="radio" name="sidebar-collapsed" value="hideable" autocomplete="off" />
                                        </label>
                                    </div>
                                </div>

                                <div class="mt-3 d-none d-xl-flex justify-content-between align-items-center">
                                    <label for="id-sidebar-hover" class="pl-1 text-grey-d1">Submenu on Hover</label>

                                    <label>
                                        <input type="checkbox" class="ace-switch" id="id-sidebar-hover" autocomplete="off" />
                                    </label>
                                </div>

                                <div class="mt-2 d-flex d-xl-none justify-content-between align-items-center">
                                    <label for="id-push-content" class="pl-1 text-grey-d1">Push Content</label>

                                    <label>
                                        <input type="checkbox" class="ace-switch" id="id-push-content" autocomplete="off" />
                                    </label>
                                </div>

                            </div>

                            <div class="my-1"></div>

                        </div>

                        <div class="modal-footer d-none justify-content-center">
                            <button type="button" class="btn btn-default" data-dismiss="modal">
                                <i class="fa fa-times mr-1"></i>
                                Close
                            </button>
                            <button type="button" class="btn btn-info">
                                <i class="fa fa-check mr-1"></i>
                                Keep changes
                            </button>
                        </div>

                    </div><!-- .modal-content -->

                    <div class="aside-header align-self-start mt-1 mt-md-5 text-right">
                        <button type="button" class="btn btn-warning btn-lg shadow-sm pl-2 radius-l-2" data-toggle="modal" data-target="#id-ace-settings-modal">
                            <i class="fa fa-cog text-110 ml-1"></i>
                        </button>
                    </div>
                </div><!-- .modal-dialog -->
            </div><!-- .modal-aside -->
        </div><!-- /.main-container -->


        <!-- include common vendor scripts used in demo pages -->
        <!-- <script type="text/javascript" src="<?= base_url(); ?>/assetsadmin/node_modules/jquery/dist/jquery.js"></script> -->
        <script type="text/javascript" src="<?= base_url(); ?>/assetsadmin/node_modules/popper.js/dist/umd/popper.js"></script>
        <script type="text/javascript" src="<?= base_url(); ?>/assetsadmin/node_modules/bootstrap/dist/js/bootstrap.js"></script>


        <!-- include vendor scripts used in "Dashboard 3" page. see "application/views/default/pages/partials/dashboard-3/@vendor-scripts.hbs" -->
        <script type="text/javascript" src="<?= base_url(); ?>/assetsadmin/node_modules/chart.js/dist/Chart.js"></script>


        <script type="text/javascript" src="<?= base_url(); ?>/assetsadmin/node_modules/sortablejs/Sortable.js"></script>


        <!-- include Ace script -->
        <script type="text/javascript" src="<?= base_url(); ?>/assetsadmin/dist/js/ace.js"></script>


        <script type="text/javascript" src="<?= base_url(); ?>/assetsadmin/assets/js/demo.js"></script>
        <!-- this is only for Ace's demo and you don't need it -->

        <!-- "Dashboard 3" page script to enable its demo functionality -->
        <script type="text/javascript" src="<?= base_url(); ?>/assetsadmin/application/views/default/pages/partials/dashboard-3/@page-script.js"></script>
    </div><!-- /.body-container -->
</body>

</html>