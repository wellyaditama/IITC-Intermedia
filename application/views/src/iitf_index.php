<!-- Pageloader -->
<div class="pageloader is-theme"></div>
<div class="infraloader is-active"></div>
<div class="dark-wrapper">
    <!-- Landing page Hero -->
    <section class="hero is-fullheight my-header2">
        <div class="hero-head">
            <!-- nav-->
            <?php $this->load->view('component/nav') ?>
            <!--end nav-->
        </div>
        <!-- Animated particles -->
        <!-- <div id="particles-js"></div> -->
        <div id="particles-js2"></div>
        <!-- <div id="particles-js3"></div> -->
        <!-- Banner -->
        <div class="hero-body has-text-centered ">
            <div class="container">
                <div class="column is-6 is-offset-3">
                    <div class="roadmap-image">
                        <img style="width:80%;  margin-top: 50px;" src="<?= base_url() ?>assets/app/images/logo/banner.png" alt="banner">
                    </div>
                    <!-- <h1 class="title is-2  is-semibold is-spaced main-title">IITF 2019</h1> -->
                    <h2 class="subtitle is-4  is-thin" style="margin-top: 30px;font-style: oblique">
                    "Improve Your Skill to Compete in Industry 4.0" 
                    </h2>
                    <!-- Play video button -->
                    <!-- <div class="cta-wrapper has-text-centered">
                    <div class="video-button levitate js-modal-btn" data-video-id="6WG7D47tGb0">
                        <img src="assets/app/images/icons/play.svg" alt="">
                    </div>
                </div>
                     -->
                </div>

            </div>
        </div>
        <!-- Banner -->
        <!-- Hero Image and Title -->
        <div class="hero-body" id="about">
            <div class="container">
                <div class="columns is-vcentered">

                    <!-- Landing page Title -->
                    <div class="column is-5 landing-caption">
                        <h2 class="title is-1  is-semibold is-spaced main-title">Tentang IITC</h2>
                        <!-- Divider -->
                        <div class="divider"></div>
                        <h3 class="subtitle is-7 is-thin" style="font-size:1rem;">
                            IITC (Intermedia Information Technology Competitiom) 2020 adalah salah satu kegiatan
                            yang diadakan oleh UKM INTERMEDIA UNIVERSITAS AMIKOM Purwokerto. IITC 2020
                            ini berupa rangkaian kegiatan yang dimulai dari Pre-Event berupa workshop & webinar teknologi,
                            kemudian diadakan perlombaan untuk siswa/siswi, mahasiswa dan umum.
                            Pada event utamanya, ada pameran IT, seminar, donor darah, hiburan,
                            bazaar yang tersedia melalui stand yang diisi oleh para sponsor, dan pada bagian
                            terakhir event, ada penganugerahan juara untuk para pemenang lomba.
                        </h3>
                        <!-- CTA -->
                        <!-- <p>
                                    <a href="#start" class="button k-button k-primary raised has-gradient is-fat is-bold">
                                        <span class="text">Get Started</span>
                                        <span class="front-gradient"></span>
                                    </a>
                                </p> -->
                        <!-- <a class="button k-button k-secondary raised has-gradient is-fat is-bold rounded">
                            <span class="text">Selengkapnya</span>
                            <span class="front-gradient"></span>
                        </a> -->

                    </div>
                    <!-- Hero image -->
                    <div class="column is-7">
                        <figure class="image">
                            <img style="width:80%; margin-left:50px;" src="assets/app/images/bg/about.svg" alt="About iitf">
                        </figure>
                    </div>
                </div>
            </div>
        </div>

        <!-- Hero footer -->
        <div class="hero-foot">
            <div class="container">
                <div class="has-text-centered">
                    <div class="buy-title is-centered" style="color:black !important;">Dipersembahkan oleh:</div>
                </div>
                <div class="tabs is-centered">
                    <!-- Client / partner list -->
                    <ul>
                        <li><a href="http://amikompurwokerto.ac.id" target="_blank"><img style="width:80px; height:10%;" class="hero-logo" src="assets/app/images/logo/logo_amikom.png" alt="AMIKOM Purwokerto"></a></li>
                        <li><a href="#"><img style="width:80px; height:10%;" class="hero-logo" src="assets/app/images/logo/banner.png" alt="IITF 2019"></a></li>
						<li><a href="/intermediaamikom.org" target="_blank"><img style="width:80px; height:10%;" class="hero-logo" src="assets/app/images/logo/intermedia.png" alt="INTERMEDIA"></a></li>
                    </ul>
                    </ul>
                </div>
            </div>
        </div>

    </section>
    <!-- /Landing page Hero -->

    <!-- Icon Features section -->
    <section id="start" class="section is-transparent is-relative">
        <!-- Container -->
        <div class="container">

            <div class="has-text-centered">
                <div class="buy-title" style="color: black !important;">RANGKAIAN KEGIATAN</div>
                <!-- Divider -->
                <div class="divider is-centered"></div>
            </div>

            <!-- Content Rangkaian Kegiatan -->
            <div class="content-wrapper is-medium">
                <div class="columns is-vcentered">
                    <!-- Feature -->
                    <div class="column is-4">
                        <!-- <a href="#"> -->
                        <div class="feature">
                            <img src="assets/app/images/rangkaian-kegiatan/roadshow.svg" alt="" data-aos="fade-up" data-aos-delay="100" data-aos-offset="200" data-aos-easing="ease-out-quart">
                            <h4 class="title is-6 is-tight ">Roadshow</h4>
                            <p>Roadshow merupakan kegiatan berbagi ilmu kepada siswa / siswi SMK . Dengan tujuan membagi ilmu di bidang Pemrograman dan Multimedia serta menumbuhkan minat dan bakat para peserta.</p>
                        </div>
                        <!-- </a> -->
                    </div>
                    <!-- Feature -->
                    <div class="column is-4">
                        <!-- <a href="<?= base_url() ?>detail"> -->
                        <div class="feature">
                            <img src="assets/app/images/rangkaian-kegiatan/lomba.svg" alt="" data-aos="fade-up" data-aos-delay="300" data-aos-offset="200" data-aos-easing="ease-out-quart">
                            <h4 class="title is-6 is-tight ">Lomba IT</h4>
                            <p>Lomba IT merupakan kegiatan kompetisi dalam bidang IT dengan tujuan untuk memfasilitasi para penggiat IT mulai dari kalangan pelajar, mahasiswa dan masyarakat umum untuk saling berkompetisi.</p>
                        </div>
                        <!-- </a> -->
                    </div>
                    <!-- Feature -->
                    <div class="column is-4">
                        <!-- <a href="<?= base_url() ?>detail"> -->
                        <div class="feature">
                            <img src="assets/app/images/rangkaian-kegiatan/festival.svg" alt="" data-aos="fade-up" data-aos-delay="500" data-aos-offset="200" data-aos-easing="ease-out-quart">
                            <h4 class="title is-6 is-tight ">Festival</h4>
                            <p>Festival merupakan puncak acara dari IITF dengan beragam acara didalamnya mulai dari Expo Product IT , Seminar , sampai penganugerahan untuk yang menjuarai lomba IT.</p>
                        </div>
                        <!-- </a> -->
                    </div>
                </div>

                <!-- Play video button -->
                <!-- <div class="cta-wrapper has-text-centered">
                    <div class="video-button levitate js-modal-btn" data-video-id="6WG7D47tGb0">
                        <a>Scroll Up !</a>
                    </div>
                </div> -->
                <!-- CTA -->
                <!-- <p>
                        <a href="#roadmap" class="button k-button k-primary raised has-gradient is-fat is-bold">
                            <span class="text">Selengkapnya</span>
                            <span class="front-gradient"></span>
                        </a>
                    </p> -->
            </div>
            <!-- Content Rangkaian Kegiatan-->
        </div>
        <!-- /Container -->
    </section>
    <!-- /Icon Features section -->


    <!-- ICO section -->
    <section class="section is-medium is-end" id="reward">
        <!-- Container -->
        <div class="container">

            <!-- Title & subtitle -->
            <h2 class="title is-light is-semibold has-text-centered is-spaced">LOMBA</h2>
            <!-- Divider -->
            <div class="divider is-centered"></div>
            <h4 class="subtitle is-6 is-light has-text-centered is-compact">Beberapa Perlombaan yang diadakan dengan beragam hadiah.</h4>

            <!-- Content wrapper -->
            <div class="content-wrapper is-large">
                <!-- Flying tabs wrapper -->
                <div class="flying-wrapper">
                    <!-- Tabs container -->
                    <div class="flying-tabs-container">
                        <!-- Tabs -->
                        <div class="flying-tabs">
                            <?php
                            $i = 1;
                            foreach ($lomba as $key => $val) { ?>
                                <div class="flying-child tab-<?= $i ?> <?php if ($i == 1) {
                                                                                echo "is-active";
                                                                            } ?>" data-tab="tab-<?= $i ?>"><a href="javascript:void(0);"><?= $val['nama'] ?></a></div>
                            <?php
                                $i++;
                            } ?>
                            <div class="slider"></div>
                        </div>
                    </div>

                    <!-- Tabs content wrapper -->
                    <div class="flying-tabs-content">
                        <!-- Tab 1 -->
                        <?php
                        $j = 1;
                        $k = 0;
                        foreach ($lomba as $key => $value) { ?>
                            <div id="tab-<?= $j ?>" class="tab-content <?php if ($j == 1) {
                                                                                echo "is-active";
                                                                            } ?>">
                                <div class="columns is-vcentered ">
                                    <div class="column">
                                        <div class="container">
                                            <div class="hadiah-box animated preFadeInUp fadeInUp">
                                                <?php
                                                    $a = 1;
                                                    foreach ($value['juara'] as $keya => $val) { ?>
                                                    <div class="box-hadiah box-hadiah--<?= $a ?>">
                                                        <img class="hadiah-trophy" src="assets/app/images/hadiah/juara_<?= $a ?>.png" alt="juara <?= $a ?>">
                                                        <p class="juara"><?= $val['nama'] ?></p>
                                                        <!-- <p class="nominal">Rp <?= number_format($val['nominal']) ?></p> -->
                                                        <p class="sertif">Hadiah utama, sertifikat, piala</p>
                                                    </div>
                                                <?php
                                                        $a++;
                                                        // $k++;
                                                    } ?>
                                            </div>
                                            <div class="cta-wrapper has-text-centered animated preFadeInUp fadeInUp">
                                                <a href="<?= base_url() ?>detail?lomba=<?= $value['nama'] ?>" class="button k-button k-primary raised has-gradient is-fat is-bold">
                                                    <span class="text">Detail Lomba</span>
                                                    <span class="front-gradient"></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php
                            $j++;
                            $k++;
                        } ?>
                        <div class="cta-wrapper has-text-centered animated preFadeInUp fadeInUp">
                            <a href="<?= base_url() ?>daftar" class="button k-button k-primary raised has-gradient is-fat is-bold">
                                <span class="text">Daftar Sekarang</span>
                                <span class="front-gradient"></span>
                            </a>
                        </div>
                        <!-- /Tab 1 -->
                    </div>
                </div>

            </div>
            <!-- Content wrapper -->
        </div>
        <!-- /Container -->
    </section>
    <!-- /ICO section -->

    <!-- Roadmap section -->
    <section class="section is-medium is-light" id="timeline">
        <!-- Container -->
        <div class="container">
            <!-- Divider -->
            <div class="divider is-centered"></div>
            <!-- Title & subtitle -->
            <h2 class="title is-dark is-semibold has-text-centered is-spaced">TIMELINE IITC 2020</h2>
            <h4 class="subtitle is-6 is-dark has-text-centered is-compact">Seluruh rangkaian kegiatan akan diadakan pada bulan Agustus sampai Oktober.</h4>

            <!-- Content wrapper -->
            <div class="content-wrapper">
                <!-- Timeline -->
                <div class="krypton-timeline">
                    <div class="timeline">
                        <!-- Events wrapper -->
                        <div class="events-wrapper">
                            <!-- Events list -->
                            <div class="events">
                                <ol>
                                    <!-- Event -->
                                    <li>
                                        <a href="#0" data-date="22/08/2019">
                                            <span>Info</span>
                                            <span></span>
                                        </a>
                                    </li>
                                    <!-- Event -->
                                    <li>
                                        <a href="#0" data-date="28/08/2019">
                                            <span>tanggal</span>
                                            <span></span>
                                        </a>
                                    </li>
                                    <!-- Event -->
                                    <li>
                                        <a href="#0" data-date="28/09/2019">
                                            <span>akan</span>
                                            <span></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#0" data-date="13/10/2019">
                                            <span>hadir</span>
                                            <span></span>
                                        </a>
                                    </li>

                                </ol>

                                <!-- Track line -->
                                <span class="filling-line" aria-hidden="true"></span>
                            </div>
                            <!-- Events list -->
                        </div>
                        <!-- Events wrapper -->

                        <ul class="timeline-navigation">
                            <li><a href="#0" class="prev inactive">Prev</a></li>
                            <li><a href="#0" class="next">Next</a></li>
                        </ul> <!-- .cd-timeline-navigation -->
                    </div> <!-- .timeline -->

                    <!-- Main events content -->
                    <div class="events-content">
                        <ol>
                            <!-- Event -->
                            <li class="selected" data-date="22/08/2019">
                                <!-- Inner -->
                                <div class="inner-wrapper">
                                    <div class="title-wrapper">
                                        <!-- Icon -->
                                        <img src="<?= base_url() ?>assets/app/images/icons/ico/platform-launch.svg" alt="">
                                        <!-- Title & date -->
                                        <div>
                                            <span class="event-title">ITEMWEBI</span>
                                            <small> Agustus 2020</small>
                                        </div>
                                    </div>
                                    <p>
                                        Kegiatan webinar series tentang teknologi diadakan untuk umum sekaligus sebagai pre-event dibukanya IITC 2020.
                                    </p>
                                </div>
                            </li>

                            <!-- Event -->
                            <li data-date="28/08/2019">
                                <div class="inner-wrapper">
                                    <div class="title-wrapper">
                                        <img src="<?= base_url() ?>assets/app/images/icons/ico/presale.svg" alt="">
                                        <div>
                                            <span class="event-title">Pembukaan Pendaftaran Perlombaan</span>
                                            <small> 2020</small>
                                        </div>
                                    </div>
                                    <p>
                                        Pembukaan Pendaftaran untuk Lomba IT yang akan diadakan pada September mendatang. Pendaftaran dapat dilakukan secara online pada website IITC
                                        atau mendaftar secara offline dengan datang langsung ke stand
                                        pendaftaran IITC di Universitan Amikom Purwokerto
                                    </p>
                                </div>
                            </li>

                            <!-- Event -->
                            <li data-date="28/09/2019">
                                <div class="inner-wrapper">
                                    <div class="title-wrapper">
                                        <img src="<?= base_url() ?>assets/app/images/icons/ico/ico.svg" alt="">
                                        <div>
                                            <span class="event-title">Perlombaan</span>
                                            <small> Oktober 2019</small>
                                        </div>
                                    </div>
                                    <p>
                                        Hari Perlombaan beragam kategori yang disediakan.
                                    </p>
                                </div>
                            </li>

                            <!-- Event -->
                            <li data-date="13/10/2019">
                                <div class="inner-wrapper">
                                    <div class="title-wrapper">
                                        <img src="assets/app/images/icons/ico/ico-2.svg" alt="">
                                        <div>
                                            <span class="event-title">Awarding</span>
                                            <small>2020</small>
                                        </div>
                                    </div>
                                    <p>
                                        Puncak acara IITC 2020, meliputi acara penganugerahan nominasi juara, sminar, dan berbagai acara lainnya.
                                    </p>
                                </div>
                            </li>


                        </ol>
                    </div> <!-- .events-content -->
                </div>
                <!-- Timeline -->

            </div>

            <!-- CTA -->
            <div class="cta-wrapper has-text-centered">
                <a href="<?= base_url() ?>timeline" class="button k-button k-primary raised has-gradient is-fat is-bold">
                    <span class="text">Timeline Selengkapnya</span>
                    <span class="front-gradient"></span>
                </a>
            </div>
        </div>
        <!-- /Container -->
    </section>
    <!-- /Roadmap section -->


    <!-- Company section -->
    <section class="section is-medium has-big-dark-gradient" id="mediapartner">
        <!-- Container -->
        <div class="container">

            <!-- Spaced divider -->
            <div class="divider is-centered"></div>


            <!-- Title & subtitle -->
            <h2 class="title is-light is-semibold has-text-centered is-spaced">Media Partner & Sponsorship</h2>
            <h4 class="subtitle is-6 is-light has-text-centered is-compact">IITC didukung oleh beberapa media partner & Sponsor.</h4>

            <!-- Content wrapper -->
            <div class="content-wrapper is-large">
                <!-- Partner logos -->
                <!-- <div class="partners"> -->
                <div class="partners">
                    <div class="columns is-12 is-mobile">
                        <div class="partner-item">
                            <a href="https://puskomedia.id" target="_blank">
                                <img src="assets/app/images/media-partner/puskomedia.png" alt="puskomedia">
                            </a>
                        </div>
                        <div class="partner-item">
                            <a href="#" target="_blank">
                                <img src="assets/app/images/media-partner/inviz.png" alt="inul vizta">
                            </a>
                        </div>
                        <div class="partner-item">
                            <a href="#" target="_blank">
                                <img src="assets/app/images/media-partner/arpuz.png" alt="Arpuz Store">
                            </a>
                        </div>
                        <div class="partner-item">
                            <a href="#" target="_blank">
                                <img src="assets/app/images/media-partner/bem.png" alt="puskomedia">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="partners">
                    <div class="columns is-12 is-mobile">
                        <div class="partner-item">
                            <a href="#" target="_blank">
                                <img src="assets/app/images/media-partner/cyber-amikom-solo.png" alt="puskomedia">
                            </a>
                        </div>
                        <div class="partner-item">
                            <a href="#" target="_blank">
                                <img src="assets/app/images/media-partner/amikomfm.png" alt="inul vizta">
                            </a>
                        </div>
                        <div class="partner-item">
                            <a href="#" target="_blank">
                                <img src="assets/app/images/media-partner/pitcom.png" alt="Arpuz Store">
                            </a>
                        </div>
                        <div class="partner-item">
                            <a href="#" target="_blank">
                                <img src="assets/app/images/media-partner/Assem.png" alt="puskomedia">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="partners">
                    <div class="columns is-12 is-mobile">
                        <div class="partner-item">
                            <a href="#" target="_blank">
                                <img src="assets/app/images/media-partner/eventpelajar.png" alt="puskomedia">
                            </a>
                        </div>
                        <div class="partner-item">
                            <a href="#" target="_blank">
                                <img src="assets/app/images/media-partner/infolomba.jpg" alt="inul vizta">
                            </a>
                        </div>
                        <div class="partner-item">
                            <a href="#" target="_blank">
                                <img src="assets/app/images/media-partner/infobanyumasan.png" alt="Arpuz Store">
                            </a>
                        </div>
                        <div class="partner-item">
                            <a href="#" target="_blank">
                                <img src="assets/app/images/media-partner/petanikode.png" alt="Arpuz Store">
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Partner -->
                <!-- <div class="partner-item">
                        <img src="assets/app/images/media-partner/biznet.png" alt="biznet">
                    </div> -->
                <!-- Partner -->
                <!-- <div class="partner-item">
                        <img src="assets/app/images/media-partner/ampu-studio.png" alt="ampu studio">
                    </div> -->
                <!-- Partner -->
                <!-- <div class="partner-item">
                        <a href="https://puskomedia.id" target="_blank">
                            <img src="assets/app/images/media-partner/puskomedia.png" alt="puskomedia">
                        </a>
                    </div>
                    <div class="partner-item">
                        <a href="#" target="_blank">
                            <img src="assets/app/images/media-partner/cyber-amikom-solo.png" alt="puskomedia">
                        </a>
                    </div>
                    <div class="partner-item">
                        <a href="#" target="_blank">
                            <img src="assets/app/images/media-partner/bem.png" alt="puskomedia">
                        </a>
                    </div>
                    <div class="partner-item">
                        <a href="#" target="_blank">
                            <img src="assets/app/images/media-partner/inviz.png" alt="puskomedia">
                        </a>
                    </div>
                    <div class="partner-item">
                        <a href="#" target="_blank">
                            <img src="assets/app/images/media-partner/Assem.png" alt="puskomedia">
                        </a>
                    </div>
                    <div class="partner-item">
                        <a href="#" target="_blank">
                            <img src="assets/app/images/media-partner/petanikode-logo.png" alt="puskomedia">
                        </a>
                    </div>
                    <div class="partner-item">
                        <a href="#" target="_blank">
                            <img src="assets/app/images/media-partner/pitcom-logo-fix.png" alt="puskomedia">
                        </a>
                    </div> -->

                <!-- Partner -->
                <!-- <div class="partner-item">
                        <img src="assets/app/images/media-partner/kaskus.png" alt="kaskus">
                    </div> -->

                <!-- </div> -->
            </div>


            <!-- CTA -->
            <div class="cta-wrapper has-text-centered">
                <a href="https://api.whatsapp.com/send?phone=62859180664194" target="_blank" class="button k-button k-primary raised has-gradient is-fat is-bold">
                    <span class="text">Open Media Partner & Sponsorship</span>
                    <span class="front-gradient"></span>
                </a>
            </div>

        </div>
        <!-- /Content Media Partner -->
</div>
</section>
<!-- /Company section -->
<section class="section is-medium ">
    <!-- Spaced divider -->
    <div class="divider is-centered is-spacer"></div>
    <!-- Title & subtitle -->
    <h2 class="title is-dark is-semibold has-text-centered is-spaced">FAQ</h2>
    <h4 class="subtitle is-6 is-dark has-text-centered is-compact">Beberapa pertanyaan yang mungkin ingin kamu tanyakan.</h4>

    <!-- Content FAQ -->
    <div class="content-wrapper is-large">
        <div class="columns">
            <div class="column is-5 is-offset-1">

                <!-- Accordion -->
                <div class="accordion">
                    <!-- Option -->
                    <div class="accordion-option">
                        <input type="checkbox" id="toggle1" class="accordion-toggle" />
                        <label class="accordion-title" for="toggle1">
                            Bagaimana cara mendaftar lomba IITC ?
                        </label>
                        <div class="accordion-content">
                            <p>Kamu bisa mendaftar secara online dengan membuat akun pada <b>Area Peserta</b> (tekan tombol <b>AREA PESERTA</b> yang ada pada menu website) kemudian silahkan mengikuti langkah-langkah yang diberikan.</p>
                        </div>
                    </div>

                    <!-- Option -->
                    <div class="accordion-option">
                        <input type="checkbox" id="toggle2" class="accordion-toggle" />
                        <label class="accordion-title" for="toggle2">
                            Bagaimana cara download Guide Book lomba ?
                        </label>
                        <div class="accordion-content">
                            <p>Silahkan menuju ke tab Lomba, pilih kategori lomba yang ingin kamu ikuti, lalu klik "detail lomba". Kamu akan diarahakan pada halaman detail lomba yang dipilih. Disitu kamu bisa mendownload guide book sesuai kategori lomba yang kamu pilih </p>
                        </div>
                    </div>

                    <!-- Option -->
                    <div class="accordion-option">
                        <input type="checkbox" id="toggle3" class="accordion-toggle" />
                        <label class="accordion-title" for="toggle3">
                            Kapan batas akhir pendaftaran lomba ?
                        </label>
                        <div class="accordion-content">
                            <p>Pendaftaran dan submisi file akan ditutup pada 29 September 2019 pukul 23.59 </p>
                        </div>
                    </div>

                    <!-- Option -->
                    <div class="accordion-option">
                        <input type="checkbox" id="toggle4" class="accordion-toggle" />
                        <label class="accordion-title" for="toggle4">
                            Apa saja tema perlombaannya ?
                        </label>
                        <div class="accordion-content">
                            <p>
                                Mobile App = Menumbuhkan Industri Indonesia dengan Teknologi <br>
                                Poster = Literasi Digital <br>
                                Web Design = StartUp <br>
                                Motion Graphic = Edukasi Narkoba <br>
                                Untuk ketentuan lebih lengkap silahkan Download Guide Book pada masing - masing lomba</p>
                        </div>
                    </div>

                    <!-- Option -->
                </div>
                <!-- /Accordion -->
            </div>
            
            <div class="column is-5">

                <!-- Accordion -->
                <div class="accordion">
                    <!-- Option -->
                    <div class="accordion-option">
                        <input type="checkbox" id="toggle6" class="accordion-toggle" />
                        <label class="accordion-title" for="toggle6">
                            Anggota team saya berbeda sekolah/instansi apakah bisa mendaftar ?
                        </label>
                        <div class="accordion-content">
                            <p>Untuk kategori lomba Web Design, dan Motion Graphic tiap personil masing � masing team harus berasal dari sekolah/instansi yang sama. Namun, untuk kategori Mobile App personil masing � masing team boleh dari sekolah/instansi yang berbeda </p>
                        </div>
                    </div>

                    <!-- Option -->
                    <div class="accordion-option">
                        <input type="checkbox" id="toggle7" class="accordion-toggle" />
                        <label class="accordion-title" for="toggle7">
                            Bagaimana cara membayar biaya pendaftarannya ?
                        </label>
                        <div class="accordion-content">
                            <p>Pembayaran dapat dilakukan via transfer ke rekening bank, e-wallet (Ovo, Go-Pay, Dana) yang akan diinformasikan saat kamu mendaftar.</p>
                        </div>
                    </div>

                    <!-- Option -->
                    <div class="accordion-option">
                        <input type="checkbox" id="toggle10" class="accordion-toggle" />
                        <label class="accordion-title" for="toggle10">
                            Dimana alamat Univertas Amikom Purwokerto ?
                        </label>
                        <div class="accordion-content">
                            <p>Universitas Amikom Purwokerto beralamat di Jl. Letjend Pol. Soemarto, Karangjambu, Purwanegara, Kec. Purwokerto Utara, Kabupaten Banyumas, Jawa Tengah 53127 (Sekolah Polisi Negara Purwokerto) </p>
                        </div>
                    </div>


                    <!-- Option -->
                    <div class="accordion-option">
                        <input type="checkbox" id="toggle9" class="accordion-toggle" />
                        <label class="accordion-title" for="toggle9">
                            Saya dari luar kota Purwokerto, Apakah saya dapat ikut mendaftar perlombaan ?
                        </label>
                        <div class="accordion-content">
                            <p>Peserta boleh berasal dari manapun di seluruh Indonesia, asalkan memenuhi seluruh ketentuan persyaratan yang ada pada GuideBook masing-masing kategori lomba </p>
                        </div>
                    </div>

                    <!-- Option -->
                    

                </div>
                
            </div>
            
            <!-- /Accordion -->
            
        </div>
        <h4 class="subtitle is-6 is-dark has-text-centered is-compact"><b>Masih punya pertanyaan yang belum terjawab?.</b></h4><br/>
        <p class="subtitle is-6 is-dark has-text-centered is-compact">Jangan sungkan untuk menghubungi kami dan kirimkan pertanyaan kamu melalui contact person yang tersedia</p>
    </div>
    </div>
    <!-- /Content FAQ -->
</section>
</div>