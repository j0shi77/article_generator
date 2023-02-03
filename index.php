<?php
  include("admin/function.php");
  $ambildata = mysqli_query($conn, "select * from t_artikel order by rand(), idartikel");
  $get_link = mysqli_query($conn, "select * from target order by rand(), link_target");


  while ($data = mysqli_fetch_array($ambildata)) {
    $deskripsi = $data['deskripsi'];
    $gambar = $data['gambar'];
    $judul = $data['judul'];
  }

  while ($fetch = mysqli_fetch_array($get_link)){
    $link = $fetch['link_target'];
    $keyword = $fetch['keyword'];
  }
  
  ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Skydass - <?= $judul ?> </title>
  <link rel="shortcut icon" href="images/favicon.png" />
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <!-- Icon -->
  <link rel="stylesheet" href="assets/fonts/line-icons.css">
  <!-- Slicknav -->
  <link rel="stylesheet" href="assets/css/slicknav.css">
  <!-- Owl carousel -->
  <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
  <link rel="stylesheet" href="assets/css/owl.theme.css">

  <link rel="stylesheet" href="assets/css/magnific-popup.css">
  <link rel="stylesheet" href="assets/css/nivo-lightbox.css">
  <!-- Animate -->
  <link rel="stylesheet" href="assets/css/animate.css">
  <!-- Main Style -->
  <link rel="stylesheet" href="Assets/css/main.css">
  <!-- Responsive Style -->
  <link rel="stylesheet" href="assets/css/responsive.css">

</head>

<body>

  <!-- Header Section Start -->
  <header id="hero-area" >
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-md bg-inverse fixed-top scrolling-navbar" id="atas" >
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <a class="navbar-brand brand-logo mr-5" href="index.php"><img src="images/logo.svg" style="width:150px;" class="mr-2" alt="logo" /></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <i class="lni-menu"></i>
        </button>
        <div class="collapse navbar-collapse menu-white" id="navbarCollapse">
          <ul class="navbar-nav mr-auto w-100 justify-content-end clearfix">
            <li class="nav-item">
              <a class="nav-link active" href="index.php">Blog</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <!-- Header Section End -->

  
     
      <!-- Blog Section Start  -->
      <div id="blog-single">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 col-md-12 col-xs-12">
              <div class="blog-post">
                <div class="post-thumb" style="margin-top: -25px;"> <br>
                  <img class="img-thumbnail" src="uploads/<?=$gambar;?>" style="width:auto; margin:auto; display:block;" alt="">
                </div> <br>
                <div class="post-content">
                  <h1 style="text-align: center;"><?=$judul ?></h1><br>
                  <p><?=$deskripsi; ?></p>
                  <?php
                  preg_match_all('#\bhttps?://[^,\s()<>]+(?:\([\w\d]+\)|([^,[:punct:]\s]|/))#', $link, $match);
                  
                  echo '<a href="'.implode("", $match[0]).'">'.$keyword.'</a>'; 
                  
                  ?>
                  <p>
                  
                  </p>
                  <br>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  <?php
  ?>

  <!-- Blog Section End  -->

  <!-- Copyright Section Start -->
  <div class="copyright">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-xs-12">
          <p style="text-align:center;">© Copyright by admin</p>
        </div>
      </div>
    </div>
  </div>
  <!-- Copyright Section End -->

  <!-- Go to Top Link -->
  <a href="#" class="back-to-top">
    <i class="lni-arrow-up"></i>
  </a>

  <!-- Preloader -->
  <div id="preloader">
    <div class="loader" id="loader-1"></div>
  </div>
  <!-- End Preloader -->

  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="assets/js/jquery-min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/owl.carousel.min.js"></script>
  <script src="assets/js/jquery.mixitup.js"></script>
  <script src="assets/js/wow.js"></script>
  <script src="assets/js/jquery.nav.js"></script>
  <script src="assets/js/scrolling-nav.js"></script>
  <script src="assets/js/jquery.easing.min.js"></script>
  <script src="assets/js/jquery.counterup.min.js"></script>
  <script src="assets/js/nivo-lightbox.js"></script>
  <script src="assets/js/jquery.magnific-popup.min.js"></script>
  <script src="assets/js/waypoints.min.js"></script>
  <script src="assets/js/jquery.slicknav.js"></script>
  <script src="assets/js/main.js"></script>
  <script src="assets/js/form-validator.min.js"></script>
  <script src="assets/js/contact-form-script.min.js"></script>

</body>

</html>