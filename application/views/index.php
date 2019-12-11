<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>TourPal</title>
	<link rel="icon" href="<?= base_url() ?>assets/img/Fevicon.png" type="image/png">

  <link rel="stylesheet" href="<?= base_url() ?>assets/vendors/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/vendors/fontawesome/css/all.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/vendors/themify-icons/themify-icons.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/vendors/linericon/style.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/vendors/owl-carousel/owl.theme.default.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/vendors/owl-carousel/owl.carousel.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/vendors/flat-icon/font/flaticon.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/vendors/nice-select/nice-select.css">
  <link rel="stylesheet" href="<?= base_url(); ?>assets/css/style.css">
</head>
<body class="bg-shape">

  <!--================ Header Menu Area start =================-->
  <header class="header_area">
    <div class="main_menu">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container box_1620">
          <a class="navbar-brand logo_h" href="<?= base_url() ?>assets/index.html"><img src="<?= base_url() ?>assets/img/logo.png" alt=""></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
            <ul class="nav navbar-nav menu_nav justify-content-end">
              <li class="nav-item active"><a class="nav-link" href="<?= base_url('Welcome/home') ?>">Home</a></li> 
              <li class="nav-item "><a class="nav-link" href="<?= base_url('Welcome/city') ?>">City</a></li> 
              <li class="nav-item"><a class="nav-link" href="<?= base_url('Welcome/order') ?>">Order</a></li>
              <li class="nav-item"><a class="nav-link" href="<?= base_url('Welcome/CekOrder') ?>">Cek Order</a></li>
              <li class="nav-item"><a class="nav-link" href="<?= base_url('Welcome/profil') ?>">Profil</a></li>
              <li class="nav-item" ><a class="nav-link" name="logout" href="<?= base_url('login/logout')?>">Logout</a></li>
              
            </ul>
          </div> 
        </div>
      </nav>
    </div>
  </header>
  <!--================Header Menu Area =================-->


  <!--================Hero Banner Area Start =================-->
  <section class="hero-banner magic-ball">
    <div class="container">

      <div class="row align-items-center text-center text-md-left">
        <div class="col-md-6 col-lg-5 mb-5 mb-md-0">
          <h1>DISCOVER WORLD DISCOVER YOU</h1>
          <p>Jika kita hanya hidup sekali maka akan sia-sia jika hanya berdiam diri. Ingin sejenak pergi bersenang hati tapi rasa malas dan tidak mau kerepotan menghantui? TourPal disini sebagai solusi.</p>
        </div>
        <div class="col-md-6 col-lg-7 col-xl-6 offset-xl-1">
          <img class="img-fluid" src="<?= base_url() ?>assets/img/home/hero-img11.png" alt="">
        </div>
      </div>
    </div>
  </section>
  <!--================Hero Banner Area End =================-->


  <!--================Service Area Start =================-->
  <section class="section-margin generic-margin">
    <div class="container">
      <div class="section-intro text-center pb-90px">
        <img class="section-intro-img" src="<?= base_url() ?>assets/img/home/section-icon.png" alt="">
        <h2>Our Great Services</h2>
        <p>Ga pake ribet, semua udah diatur sama kita. Kamu tinggal klik-klik dan nyantai aja nunggu tanggalnya.</p>
      </div>

      <div class="row">
        <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
          <div class="service-card text-center">
            <div class="service-card-img">
              <img class="img-fluid" src="<?= base_url() ?>assets/img/home/service1.png" alt="">
            </div>
            <div class="service-card-body">
              <h3>Pemesanan Tour Guide</h3>
              <p>Jangan hidup dalam ketidaktahuan. Kita bakal kasih kalian pemandu super asik dan informatik. Jangan khawatir ga punya cerita buat diceritain.</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
          <div class="service-card text-center">
            <div class="service-card-img">
              <img class="img-fluid" src="<?= base_url() ?>assets/img/home/service2.png" alt="">
            </div>
            <div class="service-card-body">
              <h3>Ticket Booking</h3>
              <p>Udah bayangin masuk tempat wisata buat ambil foto-foto asik, eh tiketnya antri panjang atau abis lagi, kan sebel. TourPal udah booking ticket segera setelah pembayaran terkonfirmasi kok.</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
          <div class="service-card text-center">
            <div class="service-card-img">
              <img class="img-fluid" src="<?= base_url() ?>assets/img/home/service3.png" alt="">
            </div>
            <div class="service-card-body">
              <h3>Destination Suggestion</h3>
              <p>Tempat-tempat keren ga dateng tiba-tiba ke pikiran kita ya kan. Tourpal selalu kasih saran-saran tempat asik yang di update tiap minggunya di halaman home.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================Service Area End =================-->


  <!--================About Area Start =================-->
  <section class="bg-gray section-padding magic-ball magic-ball-about">
    <div class="container">
      <div class="row">
        <div class="col-lg-7 col-md-6 mb-4 mb-md-0">
          <div class="about-img">
            <img class="img-fluid" src="<?= base_url() ?>assets/img/home/about-img11.png" alt="">
          </div>
        </div>
        <div class="col-lg-5 col-md-6 align-self-center about-content">
          <h2>Masih Nunggu Apa? <br class="d-none d-xl-block"> Jangan Diambil Pusing! <br class="d-none d-xl-block">Pesen Sekarang Juga!</h2>
          <p>Rasa puas dan seneng kalian itu kebahagiaan tersendiri bagi kita. Udah langsung aja liat-liat kota yang tersedia.</p>
          <a class="button" href="<?= base_url('Welcome/city') ?>">Show Cities</a>
        </div>
      </div>
    </div>
  </section>
  <!--================About Area End =================-->


  <script src="<?= base_url() ?>assets/vendors/jquery/jquery-3.2.1.min.js"></script>
  <script src="<?= base_url() ?>assets/vendors/bootstrap/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url() ?>assets/vendors/owl-carousel/owl.carousel.min.js"></script>
  <script src="<?= base_url() ?>assets/vendors/nice-select/jquery.nice-select.min.js"></script>
  <script src="<?= base_url() ?>assets/js/jquery.ajaxchimp.min.js"></script>
  <script src="<?= base_url() ?>assets/js/mail-script.js"></script>
  <script src="<?= base_url() ?>assets/js/skrollr.min.js"></script>
  <script src="<?= base_url() ?>assets/js/main.js"></script>
</body>
</html>