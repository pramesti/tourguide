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
              <li class="nav-item "><a class="nav-link" href="<?= base_url('Welcome/city') ?>">City</a></li> 
              <li class="nav-item active"><a class="nav-link" href="<?= base_url('Welcome/order') ?>">Order</a></li>
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
        <h1>List Order!</h1>
        <p>Jangan lupa atur jadwalnya yang hati-hati. <br>Kalo udah fix, cusss pesen!</p>
      </div>
    </div>
  </section>
  <!--================Hero Banner SM Area End =================-->

  <section class="section-margin pb-xl-5">
  <div class="container">

  <div class="panel">
					<div class="panel-heading">Order</div>
					<div class="panel-body">

						<form action="<?php echo base_url('Welcome/pesan/'); ?>" method="post">
							<table class="table table-striped">
								<thead>
									<tr>
                  <th>Nama Paket</th>
                    <th>Foto Tourguide</th>
										<th>Nama Tourguide</th>
                    <th>Kemampuan</th>
                    <th>Telephone</th>
                  <th>Harga Paket</th>
                  <th>Lama Hari</th>
										<th>Aksi</th>
									</tr>
								</thead>
								<tbody>
								
								<?php
									if($order != NULL){
										foreach ($order as $cart) {

											echo '
												<tr>
                          <input type="hidden" name="id_tourguide[]" value="'.$cart->id_tourguide.'">
                          <input type="hidden" name="id_paket[]" value="'.$cart->id_paket.'">
                          <td>'.$cart->nama_paket.'</td>
                          <td><img src="'.base_url('assets/img_guide/').$cart->foto.'" width="100px" /></td>
                          <td>'.$cart->nama.'</td>
                          <td>'.$cart->kemampuan.'</td>
                          <td>'.$cart->telp.'</td>
                          <td>'.$cart->harga.'</td>
                          <td>'.$cart->lama_hari.'</td>
													
                          <td>
                          
                          <a href="'.base_url().'Welcome/delete_pesanan/'.$cart->id_pesanan.'"class="btn btn-danger btn-sm" 
                          onclick="return confirm(\'Anda yakin Ingin Menghapus Data\')">Hapus</a>
													</td>
												</tr>
											';
										}
									} else {
										echo '
											<tr>
												<td colspan="8">
													Pesanan Kosong.
												</td>
											</tr>
										';
									}
								?>
								</tbody>
							</table>
              
							<?php
								if($order != NULL)
								{
									echo '
										<div class="row">
											<div class="col-md-4">
											</div>
                      <div class="col-md-5">
                      <input type="hidden" name="status" value="2">
                        <label>Tanggal Pemesanan</label>
												<input type="date" name="jadwal" class="form-control input-lg" required>
											</div>

											<div class="col-md-3">
												<input type="submit" name="submit" value="Pesan" class="btn btn-lg btn-block btn-primary">
											</div>

										';
								}
							?>
						</form>

					</div>
				</div>
        </div>


</section>
<script src="<?= base_url() ?>assets/vendors/jquery/jquery-3.2.1.min.js"></script>
  <script src="<?= base_url() ?>assets/vendors/bootstrap/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url() ?>assets/vendors/owl-carousel/owl.carousel.min.js"></script>
  <script src="<?= base_url() ?>assets/vendors/nice-select/jquery.nice-select.min.js"></script>
  <script src="<?= base_url() ?>assets/js/jquery.ajaxchimp.min.js"></script>
  <script src="<?= base_url() ?>assets/js/mail-script.js"></script>
  <script src="<?= base_url() ?>assets/js/skrollr.min.js"></script>
  <script src="<?= base_url() ?>assets/js/main.js"></script>