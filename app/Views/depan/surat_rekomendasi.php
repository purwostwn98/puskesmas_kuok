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
                                                        <h3>Syarat</h3>
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

                                        <!-- <div class="tab-pane" id="departments-tab-2">
                                            <div class="row">
                                                <div class="col-lg-12 details order-2 order-lg-1">
                                                    <h3>Misi</h3>
                                                    <p>
                                                    <ol>
                                                        <li>Mewujudkan pembangunan nilai budaya masyarakat Kampar yang menjamin sistem bermasyarakat dan bernegara untuk menghadapi tantangan global.</li>
                                                        <li>Meningkatkan manajemen dan kemampuan aparatur dalam mengelola aset daerah dan pelayanan masyarakat.</li>
                                                        <li>Meningkatkan kualitas sumber daya manusia yang sehat, taat hukum, mengusai ilmu pengetahuan, teknologi, dan beriman, bertaqwa yang berwawasan ke depan.</li>
                                                        <li>Menegembangkan ekonomi rakyat yang berbasis pada sumber daya lokal dengan orientasi pada agribisnis, agroindustry, dan pariwisata serta mendorong pertumbuhan investasi secara terpadu dan terkait antara swasta, masyarakat, dan pemerintah yang berskala local, regional, nasional maupun internasional.</li>
                                                        <li>Mewujudkan pembangunan kawasan seimbang yang dapat menjadi kualitas hidup secara berkesinambungan.</li>
                                                    </ol>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="departments-tab-3">
                                            <div class="row">
                                                <div class="col-lg-8 details order-2 order-lg-1">
                                                    <h3>Tujuan Umum</h3>
                                                    <p>“Mewujudkan kinerja Puskesmas yang berkualitas secara optimal untung mendukung pencapaian pembangunan kesehatan, dengan mengoptimalkan sumber daya yang ada dan mengaktifkan peran serta masyarakat dan keluarga”</p>
                                                </div>
                                                <div class="col-lg-4 text-center order-1 order-lg-2">
                                                    <img src="<?= base_url(); ?>/assetsdepan/img/departments-3.jpg" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p class="text-center">Pengajuan surat rekomendasi secara online dapat dilakukan dengan klik tombol "Ajukan Surat Rekomendasi" di bawah ini <br> <button class="btn btn-info">Ajukan Surat Rekomendasi</button></p>
                    <br>
                    <p class="text-center">Status Surat Tugas yang telah diajukan dapat dilihat dengan klik tombol "Lihat Status Surat" di bawah ini <br> <button class="btn btn-secondary">Lihat Status Surat</button></p>
                </div>
            </div>
        </div>
    </div>
</div><!-- End Page Title -->


</main>

<?= $this->endSection(); ?>