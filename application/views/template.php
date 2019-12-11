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
              <li class="nav-item active"><a class="nav-link" href="<?= base_url('Welcome/home') ?>">Home</a></li> 
              <li class="nav-item "><a class="nav-link" href="<?= base_url('Welcome/city') ?>">City</a></li> 
              <li class="nav-item"><a class="nav-link" href="<?= base_url() ?>assets/package.html">Booking</a>
              <li class="nav-item"><a class="nav-link" href="<?= base_url() ?>assets/contact.html">Contact</a></li>
              <li class="nav-item"><a class="nav-link" href="<?= base_url() ?>assets/contact.html">Profil</a></li>
              <li class="nav-item" ><a class="nav-link" name="logout" href="<?= base_url('login/logout')?>">Logout</a></li>
              
            </ul>
          </div> 
        </div>
      </nav>
    </div>
  </header>
  <!--================Header Menu Area =================-->


  <!--================Hero Banner Area Start =================-->
   <?php $this->load->view($content); ?>
  <!--================Blog section End =================-->


  <!-- ================ start footer Area ================= -->
  <footer class="footer-area">
    <div class="container">
      <div class="row">
        <div class="col-lg-3  col-md-6 col-sm-6">
          <div class="single-footer-widget">
            <h6>About Agency</h6>
            <p>
              The world has become so fast paced that people don’t want to stand by reading a page of information to be  they would much rather look at a presentation and understand
            </p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="single-footer-widget">
            <h6>Navigation Links</h6>
            <div class="row">
              <div class="col">
                <ul>
                  <li><a href="<?= base_url() ?>assets/#">Home</a></li>
                  <li><a href="<?= base_url() ?>assets/#">Feature</a></li>
                  <li><a href="<?= base_url() ?>assets/#">Services</a></li>
                  <li><a href="<?= base_url() ?>assets/#">Portfolio</a></li>
                </ul>
              </div>
              <div class="col">
                <ul>
                  <li><a href="<?= base_url() ?>assets/#">Team</a></li>
                  <li><a href="<?= base_url() ?>assets/#">Pricing</a></li>
                  <li><a href="<?= base_url() ?>assets/#">Blog</a></li>
                  <li><a href="<?= base_url() ?>assets/#">Contact</a></li>
                </ul>
              </div>										
            </div>							
          </div>
        </div>							
        <div class="col-lg-3  col-md-6 col-sm-6">
          <div class="single-footer-widget">
            <h6>Newsletter</h6>
            <p>
              For business professionals caught between high OEM price and mediocre print and graphic output.									
            </p>								
            <div id="mc_embed_signup">
              <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscription relative">
                <div class="input-group d-flex flex-row">
                  <input name="EMAIL" placeholder="Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address '" required="" type="email">
                  <button class="btn bb-btn"><span class="lnr lnr-location"></span></button>		
                </div>									
                <div class="mt-10 info"></div>
              </form>
            </div>
          </div>
        </div>
        <div class="col-lg-3  col-md-6 col-sm-6">
          <div class="single-footer-widget mail-chimp">
            <h6 class="mb-20">InstaFeed</h6>
            <ul class="instafeed d-flex flex-wrap">
              <li><img src="<?= base_url() ?>assets/img/instagram/i1.jpg" alt=""></li>
              <li><img src="<?= base_url() ?>assets/img/instagram/i2.jpg" alt=""></li>
              <li><img src="<?= base_url() ?>assets/img/instagram/i3.jpg" alt=""></li>
              <li><img src="<?= base_url() ?>assets/img/instagram/i4.jpg" alt=""></li>
              <li><img src="<?= base_url() ?>assets/img/instagram/i5.jpg" alt=""></li>
              <li><img src="<?= base_url() ?>assets/img/instagram/i6.jpg" alt=""></li>
              <li><img src="<?= base_url() ?>assets/img/instagram/i7.jpg" alt=""></li>
              <li><img src="<?= base_url() ?>assets/img/instagram/i8.jpg" alt=""></li>
            </ul>
          </div>
        </div>						
      </div>

      <div class="footer-bottom">
        <div class="row align-items-center">
          <p class="col-lg-8 col-sm-12 footer-text m-0 text-center text-lg-left"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="<?= base_url() ?>assets/https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          <div class="col-lg-4 col-sm-12 footer-social text-center text-lg-right">
            <a href="<?= base_url() ?>assets/#"><i class="fab fa-facebook-f"></i></a>
            <a href="<?= base_url() ?>assets/#"><i class="fab fa-twitter"></i></a>
            <a href="<?= base_url() ?>assets/#"><i class="fab fa-dribbble"></i></a>
            <a href="<?= base_url() ?>assets/#"><i class="fab fa-behance"></i></a>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- ================ End footer Area ================= -->




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