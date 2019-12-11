<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Safario Travel - Home</title>
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
  <link rel="stylesheet" href="<?= base_url()?>assets/css/paket/paketstyle.css">
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
              <li class="nav-item "><a class="nav-link" href="<?= base_url('Welcome/Home') ?>">Home</a></li> 
              <li class="nav-item active"><a class="nav-link" href="<?= base_url('Welcome/city') ?>">City</a></li> 
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


  <!--================Hero Banner SM Area Start =================-->
  <section class="hero-banner-sm magic-ball magic-ball-banner" id="parallax-1" data-anchor-target="#parallax-1" data-300-top="background-position: 0px -80px" data-top-bottom="background-position: 0 100px">
    <div class="container">
      <div class="hero-banner-sm-content">
        <h1>Tour guide</h1>
        <ph6>Ini nih <b>YourPal</b> yang bakal nemenin kalian sambil jelasin tempat-tempat yang bakal kalian kunjungi nanti.</h6>
      </div>
    </div>
  </section>
  <!--================Hero Banner SM Area End =================-->

  <!--================Tour section Start =================-->
  
  <section class="section-margin pb-xl-5">
        <div class="container">
        <div class="row">

<?php foreach($tourguide as $g): ?>
  <div class="card-group">
  <div class="card"  style="margin-top: 100px;">
    <img src="<?= base_url('assets/img_guide/').$g->foto ?>" class="card-img-top" alt="..." style="height: 350px; width: 350px;"> 
    <div class="card-body">
      <h5 class="card-title"><?=$g->nama ?></h5>
      <p class="card-text"> Kemampuan : <?=$g->kemampuan ?></p>
      <p class="card-text"> WA : <?=$g->telp_guide ?></p>
    </div>
    <div class="card-footer">
    <td><a href="<?= base_url('Welcome/cari_guide/'.$g->id_tourguide)?>" class="btn btn-primary btn-xs">Pilih Tourguide</a></td>
    </div>
  </div>
</div>
<?php endforeach; ?>
</div>
</div>
</div>
  <!--================Tour section End =================-->



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
  