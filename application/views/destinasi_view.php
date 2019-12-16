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
        <h1>Paket</h1>
        <p>Destinasi yang bakal kalian kunjungi setelah kalian booking paket ini ada di bawah ini.</p>
      </div>
    </div>
  </section>
  <!--================Hero Banner SM Area End =================-->


  <!--================Tour section Start =================-->
  <section class="section-margin pb-xl-5">

    <div class="container">
      <div class="row">
        <?php
        foreach($destinasi as $d): ?>

        <ul class="card-list">
        <li class="card">
		<a class="card-image" href="https://michellezauner.bandcamp.com/album/psychopomp-2" target="_blank" style="background-image: url(<?= base_url('assets/img_destinasi/').$d->cover ?>);" data-image-full="https://s3-us-west-2.amazonaws.com/s.cdpn.io/310408/psychopomp-500.jpg">
			<img src="<?= base_url('assets/img_destinasi/').$d->cover ?>" alt="<?= base_url('assets/img_destinasi/').$d->nama_wisata ?>" />
		</a>
		<!-- <a class="card-description" href="https://michellezauner.bandcamp.com/album/psychopomp-2" target="_blank"> -->
			<h2><?=$d->nama_wisata ?></h2>
			<p><?=$d->deskripsi ?></p>
		<!-- </a> -->
	</li>
  </ul>

  <?php endforeach; ?> 

      </div>
  
    </div>
    <br><br>
      <div class="section-intro text-center pb-90px">
        <h2><?=$d->nama_paket ?></h2>
        <p>lama hari : <?=$d->lama_hari ?></p>
        <p>Harga : <?=$d->harga ?></p>
      </div>
    <!-- <button type="button" id="myModalMenu" class="btn btn-primary " data-toggle="modalMenu" style="width: 500px; margin-left: 435px;" data-target="#exampleModalCenter">
        Book
    </button>  -->
    <button type="button" data-toggle="modal" data-target="#modal_tgl" data-idpaket="<?= $d->id_kota?>" class="btn btn-primary btn-xs" style="width: 500px; margin-left: 495px;"> Pilih Paket</a></button>
  </section>

  <div class="modal" tabindex="-1" role="dialog" id="modal_tgl">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Masukkan Tanggal Pemesanan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="">
      <input type="" name="id_paket" id="id_paket" value="">
      <input type="date"> </input>
      </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" style="color:white;"> <a href="<?= base_url('Welcome/tourguide/'.$d->id_kota) ?>">Save</button>
      </div>
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
  <script>
  $('#modal_tgl').on('show.bs.modal', function (event) { 
  var button = $(event.relatedTarget) // Button that triggered the modal 
  var idpaket = button.data('idpaket') // Extract info from data-* attributes // If necessary, you could initiate an AJAX request here (and then do the updating in a callback). // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this) 
  modal.find('.modal-body #id_paket').val(idpaket) 
  })
  </script>
</body>
</html>
  