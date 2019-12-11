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
              <li class="nav-item"><a class="nav-link" href="<?= base_url('Welcome/order') ?>">Order</a></li>
              <li class="nav-item"><a class="nav-link" href="<?= base_url('Welcome/CekOrder') ?>">Cek Order</a></li>
              <li class="nav-item active"><a class="nav-link" href="<?= base_url('Welcome/profil') ?>">Profil</a></li>
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
        <h1>Profil</h1>
        <p>Air seed winged lights saw kind whales in sixth best a dont seas dron image so fish all tree on</p>
      </div>
    </div>
  </section>
  <!--================Hero Banner SM Area End =================-->

  <section class="section-margin pb-xl-5">
  <div class="container">
  <section class="hero is-success is-fullheight">
    <div class="hero-body">
        <div class="container has-text-centered">
            <div class="column is-4 is-offset-4">
                <h3 class="title has-text-black"> Profile Viewer</h3>
                <hr class="login-hr">
                <div class="field is-horizontal userid-label-field">
                  <div class="field-body userid-field">
                  </div>
                </div>
                <div class="box">
                <?php
                  foreach($user as $u): ?>
                  <h3 class="title has-text-black"><span id="name"><?=$u->nama_user ?></span>  <sup><i id="pronoun"></i></sup></h3>
                  <div id="bio"></div>
                  <br>
                  <table class="table details">
                    <tr>
                      <td>Email:</td>
                      <td><span id="location"> <?=$u->email ?></span></td>
                    </tr>
                    <tr>
                      <td>Telphone:</td>
                      <td><span id="points" class="tag is-info"><?=$u->telp ?></span></td>
                    </tr>
                    <tr>
                      <td>Alamat:</td>
                      <td><span id="posts" class="tag is-warning"><?=$u->alamat ?></span></td>
                    </tr>
                    <tr>
                      <td>Tanggal Lahir:</td>
                      <td><span id="reactions" class="tag is-light"><?=$u->tgl_lahir ?></span></td>
                    </tr>
                    <tr>
                      <td>Password:</td>
                      <td><input type="password" id="myInput" class="tag is-danger" value="<?=$u->password ?>" style="border-style:hidden; background-color:white;" disabled></input><br><br>
                      <input type="checkbox" onclick="myFunction()">Show Password</td>
                    </tr>
                  </table>
                  <?php endforeach; ?>
                  <br>
                  <a href="#ubah" class="btn btn-primary" data-toggle="modal" onclick="prepare_edit_user(<?= $u->id_user?>)">Update Data</a>
                </div>
            </div>
        </div>
    </div>
</section>
</div>
</section>

<script>
function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>

<div class="modal fade" id="ubah">
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
        <form action="<?=base_url('Welcome/edit_user')?>" method="post" enctype="multipart/form-data">
        <input type="hidden" name="edit_id_user" id="edit_id_user">
					<br> Nama User
              <input type="type" name="edit_nama_user" id="edit_nama_user" class="form-control">
     
          <br> Email
              <input type="type" name="edit_email" id="edit_email" class="form-control">
     
          <br> Telephone
              <input type="type" name="edit_telp" id="edit_telp" class="form-control">
       
          <br> Alamat
              <input type="type" name="edit_alamat" id="edit_alamat" class="form-control">
        
          <br> Tanggal Lahir
              <input type="date" name="edit_tgl_lahir" id="edit_tgl_lahir" class="form-control">
        
          <br> Password
              <input type="type" name="edit_password" id="edit_password" class="form-control">
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

<script>
	function prepare_edit_user(id_user)
	{
		$.getJSON('<?php echo base_url(); ?>Welcome/get_data_user_by_id/' + id_user,  function(data){
			$("#edit_id_user").val(data.id_user);
      $("#edit_nama_user").val(data.nama_user);
			$("#edit_email").val(data.email);
      $("#edit_telp").val(data.telp);
      $("#edit_alamat").val(data.alamat);
      $("#edit_tgl_lahir").val(data.tgl_lahir);
      $("#edit_password").val(data.password);
		});
	}
</script>

<script src="<?= base_url() ?>assets/vendors/jquery/jquery-3.2.1.min.js"></script>
  <script src="<?= base_url() ?>assets/vendors/bootstrap/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url() ?>assets/vendors/owl-carousel/owl.carousel.min.js"></script>
  <script src="<?= base_url() ?>assets/vendors/nice-select/jquery.nice-select.min.js"></script>
  <script src="<?= base_url() ?>assets/js/jquery.ajaxchimp.min.js"></script>
  <script src="<?= base_url() ?>assets/js/mail-script.js"></script>
  <script src="<?= base_url() ?>assets/js/skrollr.min.js"></script>
  <script src="<?= base_url() ?>assets/js/main.js"></script>