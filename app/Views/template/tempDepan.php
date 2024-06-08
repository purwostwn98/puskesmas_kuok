<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Puskesmas Kuok - Welcome</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?= base_url(); ?>/assetsdepan/img/favicon.png" rel="icon">
    <link href="<?= base_url(); ?>/assetsdepan/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?= base_url(); ?>/assetsdepan/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>/assetsdepan/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?= base_url(); ?>/assetsdepan/vendor/aos/aos.css" rel="stylesheet">
    <link href="<?= base_url(); ?>/assetsdepan/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>/assetsdepan/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>/assetsdepan/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="<?= base_url(); ?>/assetsdepan/css/main.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Medilab
  * Template URL: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/
  * Updated: Jun 06 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

    <style>
        .highcharts-figure,
        .highcharts-data-table table {
            min-width: 310px;
            max-width: 800px;
            margin: 1em auto;
        }

        #container {
            height: 400px;
        }

        .highcharts-data-table table {
            font-family: Verdana, sans-serif;
            border-collapse: collapse;
            border: 1px solid #ebebeb;
            margin: 10px auto;
            text-align: center;
            width: 100%;
            max-width: 500px;
        }

        .highcharts-data-table caption {
            padding: 1em 0;
            font-size: 1.2em;
            color: #555;
        }

        .highcharts-data-table th {
            font-weight: 600;
            padding: 0.5em;
        }

        .highcharts-data-table td,
        .highcharts-data-table th,
        .highcharts-data-table caption {
            padding: 0.5em;
        }

        .highcharts-data-table thead tr,
        .highcharts-data-table tr:nth-child(even) {
            background: #f8f8f8;
        }

        .highcharts-data-table tr:hover {
            background: #f1f7ff;
        }
    </style>
</head>

<body class="index-page">

    <header id="header" class="header sticky-top">

        <div class="topbar d-flex align-items-center">
            <div class="container d-flex justify-content-center justify-content-md-between">
                <div class="contact-info d-flex align-items-center">
                    <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:kuok.hebat@gmail.com">kuok.hebat@gmail.com</a></i>
                    <i class="bi bi-phone d-flex align-items-center ms-4"><span>+62821-7098-1591</span></i>
                </div>
                <div class="social-links d-none d-md-flex align-items-center">
                    <!-- <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a> -->
                    <a target="_blank" href="https://www.facebook.com/profile.php?id=100081761553246" class="facebook"><i class="bi bi-facebook"></i></a>
                    <a target="_blank" href="https://www.instagram.com/puskesmaskuok" class="instagram"><i class="bi bi-instagram"></i></a>
                    <!-- <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a> -->
                </div>
            </div>
        </div><!-- End Top Bar -->

        <div class="branding d-flex align-items-center">

            <div class="container position-relative d-flex align-items-center justify-content-between">
                <a href="/" class=" d-flex align-items-center me-auto">
                    <!-- Uncomment the line below if you also wish to use an image logo -->
                    <img style="height: 50px; margin-right: 3px;" src="<?= base_url(); ?>/gambar/logo_kampar.png" alt="">
                    <img style="height: 50px;" src="<?= base_url(); ?>/gambar/logo_puskesmas.png" alt="">
                    <!-- <h1 class="sitename">PUSKESMAS KUOK</h1> -->
                </a>

                <nav id="navmenu" class="navmenu">
                    <ul>
                        <li><a href="/#hero" class="active">Home<br></a></li>
                        <li><a href="/#about">About</a></li>
                        <li><a href="/#services">Services</a></li>
                        <li><a href="/#departments">Visi Misi</a></li>
                        <li><a href="/#doctors">Struktur</a></li>
                    </ul>
                    <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
                </nav>
                <a class="cta-btn d-none d-sm-block" href="#appointment">Login</a>
            </div>

        </div>

    </header>

    <div class="main">
        <?= $this->renderSection("konten"); ?>
    </div>

    <footer id="footer" class="footer">

        <div class="container footer-top">
            <div class="row gy-4">
                <div class="col-lg-4 col-md-6 footer-about">
                    <a href="index.html" class="logo d-flex align-items-center">
                        <span class="sitename">Puskesmas Kuok</span>
                    </a>
                    <div class="footer-contact pt-3">
                        <p>Jl. Prof. M. Yamin, SH No. 44 Desa Lereng</p>
                        <p>Kecamatan Kuok, Kabupaten Kampar</p>
                        <p class="mt-3"><strong>Telepon:</strong> <span>+62 821-7098-1591</span></p>
                        <p><strong>Email:</strong> <span>kuok.hebat@gmail.com</span></p>
                    </div>
                    <div class="social-links d-flex mt-4">
                        <a target="_blank" href="https://www.facebook.com/profile.php?id=100081761553246" class="facebook"><i class="bi bi-facebook"></i></a>
                        <a target="_blank" href="https://www.instagram.com/puskesmaskuok" class="instagram"><i class="bi bi-instagram"></i></a>
                    </div>
                </div>

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><a href="/#hero" class="active">Home<br></a></li>
                        <li><a href="/#about">About</a></li>
                        <li><a href="/#services">Services</a></li>
                        <li><a href="/#departments">Visi Misi</a></li>
                        <li><a href="/#doctors">Struktur</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Our Services</h4>
                    <ul>
                        <li><a href="#services">Rawat Jalan<br></a></li>
                        <li><a href="#services">Tindakan Gawat Darurat</a></li>
                        <li><a href="#services">Tindakan Medik</a></li>
                        <li><a href="#services">Kebidanan dan Neonatal</a></li>
                        <li><a href="#services">dan lainnya ...</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Tata Nilai</h4>
                    <ul>
                        <li><a href="#">P : Peduli</a></li>
                        <li><a href="#">E : Etika</a></li>
                        <li><a href="#">R : Rasional</a></li>
                        <li><a href="#">F : Fleksibel</a></li>
                        <li><a href="#">E : Efektif</a></li>
                        <li><a href="#">C : Cermat</a></li>
                        <li><a href="#">T : Teliti</a></li>
                    </ul>
                </div>

            </div>
        </div>

        <div class="container copyright text-center mt-4">
            <p>© <span>Copyright</span> <strong class="px-1 sitename">Medilab</strong> <span>All Rights Reserved</span></p>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you've purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>

    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="<?= base_url(); ?>/assetsdepan/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url(); ?>/assetsdepan/vendor/php-email-form/validate.js"></script>
    <script src="<?= base_url(); ?>/assetsdepan/vendor/aos/aos.js"></script>
    <script src="<?= base_url(); ?>/assetsdepan/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="<?= base_url(); ?>/assetsdepan/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="<?= base_url(); ?>/assetsdepan/vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Main JS File -->
    <script src="<?= base_url(); ?>/assetsdepan/js/main.js"></script>

</body>

</html>