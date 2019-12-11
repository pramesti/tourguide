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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>

<body class="bg-shape">

	<!--================ Header Menu Area start =================-->
	<header class="header_area">
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="container box_1620">
					<a class="navbar-brand logo_h" href="<?= base_url() ?>assets/index.html"><img
							src="<?= base_url() ?>assets/img/logo.png" alt=""></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse"
						data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
						aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>

					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav justify-content-end">
							<li class="nav-item "><a class="nav-link" href="<?= base_url('Welcome/Home') ?>">Home</a>
							</li>
							<li class="nav-item "><a class="nav-link" href="<?= base_url('Welcome/city') ?>">City</a>
							</li>
							<li class="nav-item"><a class="nav-link" href="<?= base_url('Welcome/order') ?>">Order</a>
							</li>
							<li class="nav-item active"><a class="nav-link"
									href="<?= base_url('Welcome/CekOrder') ?>">Cek Order</a></li>
							<li class="nav-item"><a class="nav-link" href="<?= base_url('Welcome/profil') ?>">Profil</a>
							</li>
							<li class="nav-item"><a class="nav-link" name="logout"
									href="<?= base_url('login/logout')?>">Logout</a></li>

						</ul>
					</div>
				</div>
			</nav>
		</div>
	</header>
	<!--================Header Menu Area =================-->

	<!--================Hero Banner SM Area Start =================-->
	<section class="hero-banner-sm magic-ball magic-ball-banner" id="parallax-1" data-anchor-target="#parallax-1"
		data-300-top="background-position: 0px -80px" data-top-bottom="background-position: 0 100px">
		<div class="container">
			<div class="hero-banner-sm-content">
				<h1>Cek Order</h1>
				<p>Segera konfirmasi ya setelah transfer. Terimakasih.</p>
			</div>
		</div>
	</section>
	<!--================Hero Banner SM Area End =================-->



	<section class="section-margin pb-xl-5">
		<div class="container">
		<h4>Transfer sesuai nominal ke : </h3>
		<h3>BRI : 0758263758 a/n Topon</h3>
		<!-- <?php 
			 if($transaksi == NULL){
				
			} else {
				echo'
				<a href="#struk" class="btn btn-primary" data-toggle="modal" class="btn btn-primary">Upload Bukti Transfer</a>
			';
			}
		
		
		?> -->
		<br><br><br>
			<div class="panel">
				<div class="panel-heading"></div>
				<div class="panel-body">

					<form action="<?php echo base_url('Welcome/pesan/'); ?>" method="post">
						<table class="table table-striped">
							<thead>
								<tr>
                                <th>Nama User</th>
                            <th>No. Telp</th>
							<th>Paket</th>
							<th>Lama Hari</th>
							<th>Harga</th>
                            <th>Nama Guide</th>
                            <th>Foto Guide</th>
                            <th>Tanggal Pemesanan</th>
							<th>Status</th>
							<th>Bukti Transfer</th>
							<th>Aksi</th>
								</tr>
							</thead>
							<tbody>

								<?php
									if($transaksi != NULL){
										foreach ($transaksi as $cart) {

											echo '
												<tr>
                           <td>'. $cart->nama_user.'</td>
                        <td>'. $cart->telp.'</td>
						<td>'. $cart->nama_paket.'</td>
						<td>'. $cart->lama_hari.'</td>
						<td>'. $cart->harga.'</td>
                        <td>'. $cart->nama.'</td>
                        <td><img src="'.base_url('assets/img_guide/').$cart->foto.'" width="100px" /></td>
                        <td>'. $cart->jadwal.'</td>
                        <td>'. $cart->status.'</td>
						<td><img src="'.base_url('assets/img_transfer/').$cart->file.'" width="100px" /></td>
						<td><a href="#struk" class="btn btn-primary" data-toggle="modal" class="btn btn-primary" onclick="prepare_edit('. $cart->id_transaksi.')">Upload Bukti Transfer</a></td>
													
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

					</form>

				</div>
			</div>

		</div>
    </section>

                <!-- Modal Ubah -->
<div class="modal fade" id="struk">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">
					<span aria-hidden="true">&times;</span>
					<span class="sr-only">Close</span>
				</button>
				<h4 class="modal-title" id="myModalLabel"></h4>
			</div>
			<div class="modal-body">
				<form action="<?=base_url('Welcome/struk')?>" method="post" enctype="multipart/form-data">
			<input type="text" name="edit_id_transaksi" id="edit_id_transakis">
					<br>
                    <input type="file" name="file" class="form-control">
                    <br>
					<input type="submit" name="simpan" value="Simpan" class="btn btn-success">
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>

<script src="<?= base_url() ?>assets/vendors/jquery/jquery-3.2.1.min.js"></script>
  <script src="<?= base_url() ?>assets/vendors/bootstrap/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url() ?>assets/vendors/owl-carousel/owl.carousel.min.js"></script>
  <script src="<?= base_url() ?>assets/vendors/nice-select/jquery.nice-select.min.js"></script>
  <script src="<?= base_url() ?>assets/js/jquery.ajaxchimp.min.js"></script>
  <script src="<?= base_url() ?>assets/js/mail-script.js"></script>
  <script src="<?= base_url() ?>assets/js/skrollr.min.js"></script>
  <script src="<?= base_url() ?>assets/js/main.js"></script>

  <script>
	function prepare_edit(id_transaksi)
	{
		// console.log(id_transaksi);
		$("#struk #edit_id_transakis").val(id_transaksi);
		$.getJSON('<?php echo base_url(); ?>Welcome/get_data_transaksi_by_id/' + id_transaksi,  function(data){
			$("#edit_id_transaksi").val(data.id_transaksi);
		});
	}
</script>