<!--
@Project: Learnify
@Programmer: Syauqi Zaidan Khairan Khalaf
@Website: https://linktr.ee/syauqi
@Email : syaokay@gmail.com

@About-Learnify :
Web Edukasi Open Source yang dibuat oleh Syauqi Zaidan Khairan Khalaf.
Learnify adalah Web edukasi yang dilengkapi video, materi dan sistem ujian
yang tersedia secara gratis. Learnify dibuat ditujukan agar para siswa dan
guru dapat terus belajar dan mengajar dimana saja dan kapan saja.
-->

<!doctype html>
<html lang="en">

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="<?= base_url('assets/') ?>img/favicon.png" type="image/png">
    <!-- Title -->
    <title>Selamat datang - <?php
                            $data['user'] = $this->db->get_where('siswa', ['email' =>
                            $this->session->userdata('email')])->row_array();
                            echo $data['user']['nama'];
                            ?> - Noor Course Student</title>
    <!-- Bootstrap CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/bootstrap.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>vendors/linericon/style.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>vendors/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>vendors/lightbox/simpleLightbox.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>vendors/nice-select/css/nice-select.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>vendors/animate-css/animate.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>vendors/popup/magnific-popup.css">
    <!-- Main css -->
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/style.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/user_style.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/responsive.css">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- Library -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.10.4/dist/sweetalert2.all.min.js"></script>

</head>

<body style="overflow-x:hidden;background-color:#fbf9fa">


    <!-- Start Navigation Bar -->
    <header class="header_area" style="background-color: white !important;">
        <div class="main_menu">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <a class="navbar-brand logo_h" href="<?= base_url('welcome') ?>"><img src="<?= base_url('assets/') ?>img/logo.png" alt=""></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav ml-auto">
                            <li class="nav-item "><a class="nav-link" href="javascript:void(0)">Hai, <?php
                                                                                                        $data['user'] = $this->db->get_where('siswa', ['email' =>
                                                                                                        $this->session->userdata('email')])->row_array();
                                                                                                        echo $data['user']['nama'];
                                                                                                        ?></a>
                            </li>
                            <li class="nav-item active"><a class="nav-link" href="<?= base_url('user') ?>">Beranda</a>
                            </li>
                            <li class=" nav-item "><a class=" nav-link text-danger" href="<?= base_url('welcome/logout') ?>">Log Out</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!-- End Navigation Bar -->


    <!-- Start Greetings Card -->
    <div class="container">
        <div class="bg-white mx-auto p-4 buat-text" data-aos="fade-down" data-aos-duration="1400" style="width: 100%; border-radius:10px;">
            <div class="row" style="color: black; font-family: 'poppins';">
                <div class="col-md-12 mt-1">
                    <h1 class="display-4" style="color: black; font-family:'poppins';" data-aos="fade-down" data-aos-duration="1400">Selamat Datang
                        di Noor Course <span style="font-size: 40px;">👋🏻
                        </span> </h1>
                    <p>Hello Students! , Ini merupakan halaman utama Noor Course! Silahkan pilih kelas yang akan kamu
                        akses
                        dan pilih mata pelajaran yang ingin kamu pelajari. Selamat belajar ya students!</p>
                    <hr>
                    <h4 style="line-height: 4px;" data-aos="fade-down" data-aos-duration="1700"><?php
                                                                                                $data['user'] = $this->db->get_where('siswa', ['email' =>
                                                                                                $this->session->userdata('email')])->row_array();
                                                                                                echo $data['user']['nama'];
                                                                                                ?> - Noor Course</h3>
                        <p data-aos="fade-down" data-aos-duration="1800">Silahkan pilih kelas yang akan kamu akses
                            dibawah
                            ini!
                        </p>
                </div>
            </div>
        </div>
    </div>
    <!-- End Greetings Card -->


    <br>


<!--================Courses Area =================-->
<div class="main_title p-4">
            <h2 data-aos="fade-up" data-aos-duration="1600">Pelajaran Yang Tersedia di Noor Course</h2>
            <p data-aos="fade-up" data-aos-duration="1800">Merciful revaluation burying love ultimate value inexpedient ubermensch. Holiest madness victorious morality hope endless christian madness. Love dead fearful transvaluation marvelous. Oneself right ideal abstract endless faith deceptions zarathustra grandeur law ubermensch free.</p>
        </div>

<div data-aos="fade-up" data-aos-duration="1600" id="fisdas" class="container-2 d-flex align-items-center justify-content-center">
  <div data-aos="fade-up" data-aos-duration="2000" class="main1 d-flex flex-sm-column flex-lg-row align-items-center justify-content-between">
    <div data-aos="fade-up" data-aos-duration="1800" class="w-100 p-3 d-sm-flex d-lg-block flex-sm-column align-items-center justify-content-center">
      <h1>Fisika Dasar</h1>
      <p>Images, videos, PDFs and audio files are supported. Create math expressions and diagrams directly from the app. Take photos with the mobile app and save them to a note.</p>
      <button type="button" class="btn btn-primary btn-sm" href="#" data-toggle="modal" data-target="#exampleModalCenter" >Gabung Sekarang</button>
    </div>
    <div class="landingpage-img-2 w-75">
      <img class="w-100" src="<?= base_url('assets/') ?>img/fisika.png">
    </div>
  </div>
</div>

<div data-aos="fade-up" data-aos-duration="1600" id="kimdas" class="container-2 d-flex align-items-center justify-content-center">
  <div data-aos="fade-up" data-aos-duration="2200" class="main1 d-flex flex-sm-column flex-lg-row-reverse align-items-center justify-content-between">
    <div data-aos="fade-up" data-aos-duration="1800" class="w-100 p-3 d-sm-flex d-lg-block flex-sm-column align-items-center justify-content-center">
      <h1>Fisika Dasar</h1>
      <p>Images, videos, PDFs and audio files are supported. Create math expressions and diagrams directly from the app. Take photos with the mobile app and save them to a note.</p>
      <button type="button" class="btn btn-primary btn-sm" href="#" data-toggle="modal" data-target="#exampleModalCenter" >Gabung Sekarang</button>
    </div>
    <div class="landingpage-img-2 w-75">
      <img class="w-100" src="<?= base_url('assets/') ?>img/fisika.png">
    </div>
  </div>
</div>

<div data-aos="fade-up" data-aos-duration="1600" id="matdas" class="container-3 d-flex align-items-center justify-content-center">
  <div data-aos="fade-up" data-aos-duration="2000" class="color-white main1 d-flex flex-sm-column flex-lg-row align-items-center justify-content-between">
    <div data-aos="fade-up" data-aos-duration="1800" class="w-100 p-3 d-sm-flex d-lg-block flex-sm-column align-items-center justify-content-center">
      <h1>Matematika Dasar</h1>
      <p>Images, videos, PDFs and audio files are supported. Create math expressions and diagrams directly from the app. Take photos with the mobile app and save them to a note.</p>
      <button type="button" class="btn btn-primary btn-sm" href="#" data-toggle="modal" data-target="#exampleModalCenter" >Gabung Sekarang</button>
    </div>
    <div class="landingpage-img-2 w-75">
      <img class="w-100" src="<?= base_url('assets/') ?>img/fisika.png">
    </div>
  </div>
</div>

<div data-aos="fade-up" data-aos-duration="1600" id="biodas" class="container-2 d-flex align-items-center justify-content-center">
  <div data-aos="fade-up" data-aos-duration="2000" class="main1 d-flex flex-sm-column flex-lg-row-reverse align-items-center justify-content-between">
    <div class="w-100 p-3 d-sm-flex d-lg-block flex-sm-column align-items-center justify-content-center">
      <h1 data-aos="fade-up" data-aos-duration="2000" >Biologi Dasar</h1>
      <p>Images, videos, PDFs and audio files are supported. Create math expressions and diagrams directly from the app. Take photos with the mobile app and save them to a note.</p>
      <button type="button" class="btn btn-primary btn-sm" href="#" data-toggle="modal" data-target="#exampleModalCenter" >Gabung Sekarang</button>
    </div>
    <div class="landingpage-img-2 w-75">
      <img class="w-100" src="<?= base_url('assets/') ?>img/fisika.png">
    </div>
  </div>
</div>
</div>
<!--================End Courses Area =================-->


    <br>


    <!-- Start Animate On Scroll -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <!-- End Animate On Scroll -->