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
                        <h2 class="title is-1  is-semibold is-spaced main-title">Tentang IITC 2020</h2>
                        <!-- Divider -->
                        <div class="divider"></div>
                        <h3 class="subtitle is-7 is-thin" style="font-size:1rem;">
                            IITC (Intermedia Information Technology Competition) 2020 merupakan salah satu program kegiatan
                            yang diselenggarakan oleh UKM INTERMEDIA UNIVERSITAS AMIKOM PURWOKERTO. IITC 2020
                            ini berupa rangkaian kegiatan yang meliputi Pre-Event berupa workshop dan webinar teknologi,
                            main event berupa perlombaan berbagai bidang IT untuk para pelajar, mahasiswa dan umum,
                            serta closing event berupa awarding (penganugerahan penghargaan kepada para peraih juara lomba)
 
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
                            <img style="width:80%; margin-left:50px;" src="assets/app/images/bg/about.svg" alt="About iitc">
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
                        <li><a href="http://amikompurwokerto.ac.id" target="_blank"><img style="width:80px; height:10%;" class="hero-logo" src="assets/app/images/logo/logo_amikom.png" alt="Univeritas Amikom Purwokerto"></a></li>
                        <li><a href="#"><img style="width:80px; height:10%;" class="hero-logo" src="assets/app/images/logo/banner.png" alt="IITC 2020"></a></li>
						<li><a href="http://intermediaamikom.org" target="_blank"><img style="width:80px; height:10%;" class="hero-logo" src="assets/app/images/logo/intermedia.png" alt="INTERMEDIA"></a></li>
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
                            <h4 class="title is-6 is-tight ">Itemwebi</h4>
                            <p>Merupakan kegiatan berbagi ilmu kepada para siswa/siswi SMK/SMA dengan tujuan membagikan ilmu di bidang Pemrograman dan Multimedia, serta menumbuhkan minat dan bakat para peserta.</p>
                        </div>
                        <!-- </a> -->
                    </div>
                    <!-- Feature -->
                    <div class="column is-4">
                        <!-- <a href="<?= base_url() ?>detail"> -->
                        <div class="feature">
                            <img src="assets/app/images/rangkaian-kegiatan/lomba.svg" alt="" data-aos="fade-up" data-aos-delay="300" data-aos-offset="200" data-aos-easing="ease-out-quart">
                            <h4 class="title is-6 is-tight ">Lomba IT</h4>
                            <p>Lomba IT adalah event utama dalam acara IITC, yaitu kompetisi produk bidang IT dengan tujuan untuk memfasilitasi para penggiat IT mulai dari kalangan
                             pelajar, mahasiswa dan masyarakat umum untuk saling berkompetisi dan memperkenalkan hasil karyanya.</p>
                        </div>
                        <!-- </a> -->
                    </div>
                    <!-- Feature -->
                    <div class="column is-4">
                        <!-- <a href="<?= base_url() ?>detail"> -->
                        <div class="feature">
                            <img src="assets/app/images/rangkaian-kegiatan/festival.svg" alt="" data-aos="fade-up" data-aos-delay="500" data-aos-offset="200" data-aos-easing="ease-out-quart">
                            <h4 class="title is-6 is-tight ">Awarding & Seminar</h4>
                            <p>Awarding adalah acara puncak dari event IITC dengan beragam rangkaian sesi di dalamnya, diantaranya meliputi seminar, penganugerahan penghargaan serta pemberian hadiah utama kepada para nominasi juara.</p>
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
                    <div class="flying-tabs-container has-text-centered">
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
                         <!--   <div class="slider"></div> -->
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
                                                        <p class="sertif">Hadiah utama, sertifikat penghargaan</p>
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
                                        <a href="#0" data-date="28/08/2020">
                                            <span>28 AGT</span>
                                            <span></span>
                                        </a>
                                    </li>
                                    <!-- Event -->
                                    <li>
                                        <a href="#0" data-date="07/09/2020">
                                            <span>7 SEP</span>
                                            <span></span>
                                        </a>
                                    </li>
                                    <!-- Event -->
                                    <li>
                                        <a href="#0" data-date="05/10/2020">
                                            <span>5 OKT</span>
                                            <span></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#0" data-date="10/10/2020">
                                            <span>10 OKT</span>
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
                            <li class="selected" data-date="28/08/2020">
                                <!-- Inner -->
                                <div class="inner-wrapper">
                                    <div class="title-wrapper">
                                        <!-- Icon -->
                                        <img src="<?= base_url() ?>assets/app/images/icons/ico/platform-launch.svg" alt="">
                                        <!-- Title & date -->
                                        <div>
                                            <span class="event-title">ITEMWEBI</span>
                                            <small>28-29 Agustus 2020</small>
                                        </div>
                                    </div>
                                    <p>
                                        Kegiatan webinar series tentang teknologi diadakan untuk umum sekaligus sebagai pre-event dibukanya IITC 2020.
                                        Merupakan kegiatan berbagi ilmu kepada para pelajar terkait bidang teknologi seperti pemrograman, multimedia dan lainnya.
                                    </p>
                                </div>
                            </li>

                            <!-- Event -->
                            <li data-date="07/09/2020">
                                <div class="inner-wrapper">
                                    <div class="title-wrapper">
                                        <img src="<?= base_url() ?>assets/app/images/icons/ico/presale.svg" alt="">
                                        <div>
                                            <span class="event-title">Pembukaan Pendaftaran Perlombaan</span>
                                            <small>7 September 2020</small>
                                        </div>
                                    </div>
                                    <p>
                                        Pembukaan Pendaftaran untuk Lomba IT dalam berbagai bidang.
                                        Pendaftaran dapat dilakukan secara online pada website IITC mulai tanggal 7 September hingga  26 September 2020.
                                    
                                    </p>
                                </div>
                            </li>

                            <!-- Event -->
                            <li data-date="05/10/2020">
                                <div class="inner-wrapper">
                                    <div class="title-wrapper">
                                        <img src="<?= base_url() ?>assets/app/images/icons/ico/ico.svg" alt="">
                                        <div>
                                            <span class="event-title">Nominasi Juara</span>
                                            <small>05 Oktober 2020</small>
                                        </div>
                                    </div>
                                    <p>
                                        Pengumuman nominasi juara dan peraih penghargaan pada setiap kategori lomba IITC.
                                    </p>
                                </div>
                            </li>

                            <!-- Event -->
                            <li data-date="10/10/2020">
                                <div class="inner-wrapper">
                                    <div class="title-wrapper">
                                        <img src="assets/app/images/icons/ico/ico-2.svg" alt="">
                                        <div>
                                            <span class="event-title">Awarding</span>
                                            <small>10 Oktober 2020</small>
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
    <div class="container">
        <div class="columns">
            <!-- Container -->
            <div class="column">

                <!-- Spaced divider -->
                <div class="divider is-centered"></div>


                <!-- Title & subtitle -->
                <h2 class="title is-light is-semibold has-text-centered is-spaced">Sponsorship</h2>
                <h4 class="subtitle is-6 is-light has-text-centered is-compact">Didukung oleh:</h4>

                <!-- Content wrapper -->
                <div class="content-wrapper is-large">
                    <!-- Partner logos -->
                    <!-- <div class="partners"> -->
                    <div class="partners">
                        <div class="columns is-12 is-mobile">
                            <div class="partner-item">
                                    <img src="assets/app/images/media-partner/puskomedia.png" title="Puskomedia" alt="puskomedia">
                            </div>

                             <div class="partner-item">
                                    <img src="assets/app/images/media-partner/capen2.png" title="Catatan Pena" alt="Catatan Pena">
                            </div>
                        </div>
                    </div>
                    
                    <div class="partners">
                        <div class="columns is-mobile">
                            <div class="partner-item">
                                    <img src="assets/app/images/media-partner/dicoding.png" title="Dicoding" alt="Dicoding">
                            </div>
                        </div>
                    </div> 
                  <!--  <div class="partners">
                        <div class="columns is-12 is-mobile">
                             <div class="partner-item">
                                    <img src="assets/app/images/media-partner/bem2020.png" title="BEM Universitas Amikom Purwokerto" alt="BEM UAP">
                            </div>
                        </div>
                    </div> -->
                  <!--  <div class="partners">
                        <div class="columns is-12 is-mobile">
                            <div class="partner-item">
                                    <img src="assets/app/images/media-partner/pyy.png" title="@PamitYang2an" alt="Pamityang2an">
                            </div> 
                            <div class="partner-item">
                                    <img src="assets/app/images/media-partner/kaskus.png" alt="kaskus">
                            </div>
                        </div>
                    </div> -->
                    

                     </div>
                </div>
            </div>
            <div class="column">

                <!-- Spaced divider -->
                <div class="divider is-centered"></div>


                <!-- Title & subtitle -->
                <h2 class="title is-light is-semibold has-text-centered is-spaced">Media Partner</h2>
                <h4 class="subtitle is-6 is-light has-text-centered is-compact">Didukung oleh:</h4>

                <!-- Content wrapper -->
                <div class="content-wrapper is-large">
                    <!-- Partner logos -->
                    <!-- <div class="partners"> -->
                  <!--  <div class="partners">
                        <div class="columns is-12 is-mobile">
                            <div class="partner-item">

                                    <img src="assets/app/images/media-partner/puskomedia.png" title="Puskomedia" alt="puskomedia">

                            </div>

                             <div class="partner-item">

                                    <img src="assets/app/images/media-partner/dicoding.png" title="Dicoding" alt="Dicoding">

                            </div>
                             <div class="partner-item">
                                <img src="assets/app/images/media-partner/lukan.png" title="Lukan Group" alt="Lukan Group">
                            </div> 


                        </div>
                    </div> -->
                    <div class="partners">
                        <div class="columns is-mobile">
                           <div class="partner-item">
                                    <img src="assets/app/images/media-partner/ln.jpg" title="Lomba Nasional" alt="Lomba Nasional">
                            </div> 

                            <div class="partner-item">
                                    <img src="assets/app/images/media-partner/amikomfm.png" title="Amikom FM" alt="Amikom FM">
                            </div>

                        <div class="partner-item">
                            <img src="assets/app/images/media-partner/ampu-studio.png" title="Ampu Studio" alt="Ampu Studio">
                        </div>


                        </div>
                    </div>
                    <div class="partners">
                        <div class="columns is-12 is-mobile">
                            <div class="partner-item">
                                    <img src="assets/app/images/media-partner/lukan.png" title="Lukan Group" alt="Lukan Group">
                            </div> 
                             <div class="partner-item">
                                    <img src="assets/app/images/media-partner/bem2020.png" title="BEM Universitas Amikom Purwokerto" alt="BEM UAP">
                            </div>
                            <div class="partner-item">
                                    <img src="assets/app/images/media-partner/ul.png" title="Update Lomba" alt="Update Lomba">
                            </div> 
                           <div class="partner-item">
                                    <img src="assets/app/images/media-partner/infolomba.png" title="Info Lomba" alt="Info Lomba">
                            </div>


                        </div>
                    </div>
                    <div class="partners">
                        <div class="columns is-12 is-mobile">

                            <div class="partner-item">
                            <img src="assets/app/images/media-partner/eventpelajar.png" title="Event Pelajar" alt="Event Pelajar">
                        </div> 
                        <div class="partner-item">
                                    <img src="assets/app/images/media-partner/ou.png" title="Olimpiade Update" alt="Olimpiade Update">
                            </div> 
                             <div class="partner-item">
                                    <img src="assets/app/images/media-partner/pk.png" title="Pengen Kuliah" alt="Pengen Kuliah">
                            </div> 


                        </div>
                    </div>
                    <!-- Partner -->
                    <div class="partners">
                        <div class="columns is-12 is-mobile">
                    <div class="partner-item">
                            <img src="assets/app/images/media-partner/ib.png" title="Info Banyumas" alt="Info Banyumas">
                        </div> 
                  
                    <div class="partner-item">
                            <img src="assets/app/images/media-partner/info.lomba.png" title="Info.Lomba" alt="Info.Lomba">
                        </div> 
                        <div class="partner-item">
                            <img src="assets/app/images/media-partner/ilm.png" title="Info Lomba Mahasiswa" alt="Info Lomba Mahasiswa">
                        </div> 
                    </div>
                    </div>
                     <div class="partners">
                        <div class="columns is-12 is-mobile">
                    <div class="partner-item">
                                    <img src="assets/app/images/media-partner/pyy.png" title="@PamitYang2an" alt="Pamityang2an">
                            </div> 
                           <div class="partner-item">
                                    <img src="assets/app/images/media-partner/ie.png" title="Info Event" alt="Info Event">
                            </div> 
                             
                    <div class="partner-item">
                            <img src="assets/app/images/media-partner/acarakampus.png" title="Acara Kampus" alt="Acara Kampus">
                        </div> 
                    </div>
                    </div>
                        <!--
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
            </div>
        </div>
        <!-- CTA -->
        <div class="cta-wrapper has-text-centered">
            <a href="https://api.whatsapp.com/send?phone=6289691919556" target="_blank" class="button k-button k-primary raised has-gradient is-fat is-bold">
                <span class="text">Open Media Partner &amp; Sponsorship</span>
                <span class="front-gradient"></span>
            </a>
        </div>
        <!-- /Content Media Partner -->
    </div>
</section>
<!-- /Company section -->
<section class="section is-medium ">
    <!-- Spaced divider -->
    <div class="divider is-centered is-spacer"></div>
    <!-- Title & subtitle -->
    <h2 class="title is-dark is-semibold has-text-centered is-spaced">F.A.Q.</h2>
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
                            Bagaimana cara mendaftar lomba IITC?
                        </label>
                        <div class="accordion-content">
                            <p>Kamu bisa mendaftar secara online dengan membuat akun pada <b>Area Peserta</b> (tekan tombol <b>AREA PESERTA</b> yang ada pada menu website) kemudian silahkan mengikuti langkah-langkah yang diberikan.</p>
                        </div>
                    </div>

                    <!-- Option -->
                    <div class="accordion-option">
                        <input type="checkbox" id="toggle2" class="accordion-toggle" />
                        <label class="accordion-title" for="toggle2">
                            Bagaimana cara download Guide Book lomba?
                        </label>
                        <div class="accordion-content">
                            <p>Silahkan menuju ke tab Lomba, pilih kategori lomba yang ingin kamu ikuti, lalu klik "detail lomba". 
                            Kamu akan diarahakan pada halaman detail lomba yang dipilih. Di situ kamu bisa mendownload guide book sesuai kategori lomba yang kamu pilih.</p>
                        </div>
                    </div>

                    <!-- Option -->
                    <div class="accordion-option">
                        <input type="checkbox" id="toggle3" class="accordion-toggle" />
                        <label class="accordion-title" for="toggle3">
                            Kapan batas akhir pendaftaran lomba?
                        </label>
                        <div class="accordion-content">
                            <p>Pendaftaran akan ditutup pada 26 September 2020 pukul 23.59 WIB, sedangkan waktu untuk submisi file akan ditutup pada 3 Oktober 2020.</p>
                        </div>
                    </div>

                    <!-- Option -->
                    <div class="accordion-option">
                        <input type="checkbox" id="toggle4" class="accordion-toggle" />
                        <label class="accordion-title" for="toggle4">
                            Apa saja jenis perlombaannya?
                        </label>
                        <div class="accordion-content">
                            <p>
                               1. Web Design ~ Pelajar SMK/SMA dan sederajat<br/>
                               2. Poster ~ Pelajar SMK/SMA dan sederajat<br/>
                               3. Mobile App ~ Mahasiswa<br/>
                               4. Foto Desain Produk ~ Mahasiswa<br/>
                               5. Short Movie ~ Mahasiswa<br/>
                               6. Jurnalistik ~ Mahasiswa<br/>
                               <br/>
                                Untuk ketentuan lebih lengkap silahkan download guide book pada masing - masing lomba.</p>
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
                           Apakah anggota team boleh berasal dari instansi/sekolah yang berbeda?
                        </label>
                        <div class="accordion-content">
                            <p>Untuk perlombaan kategori pelajar dan mahasiswa, setiap anggota team harus berasal dari instansi perguruan tinggi/sekolah yang sama.</p>
                        </div>
                    </div>

                    <!-- Option -->
                    <div class="accordion-option">
                        <input type="checkbox" id="toggle7" class="accordion-toggle" />
                        <label class="accordion-title" for="toggle7">
                            Bagaimana cara membayar biaya pendaftarannya?
                        </label>
                        <div class="accordion-content">
                            <p>Pembayaran dapat dilakukan melalui transfer ke rekening bank atau e-wallet yang akan diinformasikan setelah kamu mendaftar.</p>
                        </div>
                    </div>

                    <!-- Option -->
                    <div class="accordion-option">
                        <input type="checkbox" id="toggle10" class="accordion-toggle" />
                      <!--  <label class="accordion-title" for="toggle10">
                            Dimana alamat Universitas Amikom Purwokerto?
                        </label>
                        <div class="accordion-content">
                            <p>Universitas Amikom Purwokerto beralamat di Jl. Letjend Pol. Soemarto, Karangjambu, Purwanegara, Kec. Purwokerto Utara, Kabupaten Banyumas, Jawa Tengah 53127 (Sekolah Polisi Negara Purwokerto) </p>
                        </div> -->
                        
                        <label class="accordion-title" for="toggle10">
                            Bagaimana pola pendaftaran teamnya?
                        </label>
                        <div class="accordion-content">
                            <p>Untuk pola pendaftarannya, hanya ketua team saja yang melakukan pendaftaran, kemudian menambahkan data anggotanya di dashboard peserta setelah berhasil mendaftar.</p>
                        </div>
                    </div>


                    <!-- Option -->
                    <div class="accordion-option">
                        <input type="checkbox" id="toggle9" class="accordion-toggle" />
                        <label class="accordion-title" for="toggle9">
                            Apakah ada batasan domisili untuk mengikut perlombaan?
                        </label>
                        <div class="accordion-content">
                            <p>Peserta boleh berasal dari manapun di seluruh Indonesia, asalkan memenuhi seluruh ketentuan persyaratan yang ada pada guide book masing-masing kategori lomba.</p>
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