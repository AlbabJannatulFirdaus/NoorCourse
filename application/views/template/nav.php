<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Learnify dibuat ditujukan agar para siswa dan guru dapat terus belajar dan mengajar dimana saja dan kapan saja." name="Description" />
    <meta content="Learnify, E-learning, Open Source, Syauqi Zaidan Khairan Khalaf, github, programmer indonesia" name="keywords" />
    <link rel="icon" href="<?= base_url('assets/') ?>img/favicon.png" type="image/png">
    <title>Noor course</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/bootstrap.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>vendors/linericon/style.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>vendors/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>vendors/lightbox/simpleLightbox.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>vendors/nice-select/css/nice-select.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>vendors/animate-css/animate.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>vendors/popup/magnific-popup.css">
    <!-- Main CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/style.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/responsive.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- Scripts -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.10.4/dist/sweetalert2.all.min.js"></script>
    <script src="<?= base_url('assets/') ?>js/jquery-3.3.1.min.js"></script>
    <script src="<?= base_url('assets/') ?>js/popper.js"></script>
    <script src="<?= base_url('assets/') ?>js/bootstrap.min.js"></script>
    <script type="text/javascript">
        $(document).ready(() => {
            $("#nav<?= $this->uri->segment(2); ?>").addClass('active')
        })
    </script>

</head>

<body>

    <!--================Header Menu Area =================-->
    <header class="header_area">
        <div class="top_menu row m0">
            <div class="container">
                <div class="float-left">
                    <ul class="list header_social">
                        <li><a href="https://www.facebook.com/syaaauqi"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="https://twitter.com/syaaauqi"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="https://dribbble.com/syaufy"><i class="fa fa-dribbble"></i></a></li>
                        <li><a href="https://www.behance.net/syaufy"><i class="fa fa-behance"></i></a></li>
                        <li><a href="https://www.github.com/syauqi"><i class="fa fa-github"></i></a></li>
                        <li><a href="https://www.instagram.com/syaufy"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
                <div class="float-right">
                    <a class="dn_btn" href="mailto:noorcourse@gmail.com">noorcourse@gmail.com</a>
                </div>
            </div>
        </div>
        <header class=" py-4 px-3 navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <nav class=" navbar fixed-top navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <img class="image" src="../../assets/NC_logo.png" width="42px" style="margin: 1px;">
          <img class="image" src="../../assets/NC_name.png"  width="10%" height="5%" style="margin: 1px;"> 
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
              <div class="collapse navbar-collapse">
                <li class="Beranda">
                  <a class="nav-link"  href="#">Beranda</a>
                </li>
                <li class="Kelas">
                  <a class="nav-link" href="#">Kelas</a>
                </li>
                <li class="Kontak">
                  <a class="nav-link" href="#">Kontak</a>
                </li>
              </div>
              <li>
                <a class="btn btn-primary ms-5 me-1"  href="login" role="button">Login</a>
              </li>
              <li>
                <a class="btn btn-secondary ms-1 me-4 " href="register" role="button">Daftar</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
</header>

        <div class="main_menu">
            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <a class="navbar-brand logo_h" href="<?= base_url('welcome') ?>"><img src="<?= base_url('assets/') ?>img/NC_LOGO.png" alt=""></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav ml-auto">
                            <li class="nav-item" id="nav"><a class="nav-link" href="<?= base_url('welcome') ?>">Beranda</a></li>
                            <li class="nav-item" id="navtentang"><a class="nav-link" href="<?= base_url('welcome/tentang') ?>">Tentang</a>
                            </li>
                            <li class="nav-item submenu dropdown" id="navpelajaran">
                                <a href="<?= base_url('welcome/pelajaran') ?>" class="nav-link dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">Pelajaran</a>
                            </li>
                            <li class="nav-item" id="navkontak"><a class="nav-link" href="<?= base_url('welcome/kontak') ?>">Kontak</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="#" data-toggle="modal" data-target="#exampleModalCenter">Masuk</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!--================ END Header Menu Area =================-->