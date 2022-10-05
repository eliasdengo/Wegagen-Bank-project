<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Wegagen Links</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Bootslander - v4.9.0
  * Template URL: https://bootstrapmade.com/bootslander-free-bootstrap-landing-page-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1><a href="index.html"><img title="locallink" alt="Western Union" src="assets/img/cropped-cropped-cropped-cropped-wegagen-bank-1.png" width="120px"/><span> Wegagen Bank</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto " href="#locallinks">Local Links</a></li>
          <li><a class="nav-link scrollto " href="#remittancelinks">Remittance Links</a></li>

        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Features Section ======= -->
    <a name="locallinks"></a>
    <section id="local" class="features">
      <div class="container">
        <div class="section-title" data-aos="fade-up">
          <h2>Links</h2>
          <p>Local Links</p>
        </div>
        <div class="row aos-init aos-animate" data-aos="fade-left">
       <?php 
       $servername = "localhost";
       $username = "root";
       $password = "";
       $dbname = "dblink";
       $conn = mysqli_connect($servername, $username, $password, $dbname);
       $sql = "select * from locallink";
       $result=mysqli_query($conn, $sql);
     
        if (mysqli_num_rows($result) > 0) {
          // output data of each row
          while($row = mysqli_fetch_assoc($result)) {
            ?>
            
           <div class="col-lg-3 col-md-4 mt-4">
           <div class="icon-box" data-aos="zoom-in" data-aos-delay="50">
           <h3><a href="<?php echo $row['link'];?>" target="_blank"><img title="locallink" alt="<?php echo $row['title'];?>"  src="assets/img/<?php echo $row['icon_dir'];?>" width="40px"/><?php echo $row["title"]; ?></a></h3>
          </div>
          </div>
           <?php
          }
        } else {
          echo "0 results";
        }
        ?>
      </div>
      </div>
    </section><!-- End Features Section -->


    <!-- ======= Features Section ======= -->
    <a name="remittancelinks"></a>
    <section id="remittance" class="features">
      <div class="container">
        <div class="section-title" data-aos="fade-up">
          <h2>Links</h2>
          <p>Remittance Links</p>

        </div>
        <div class="row" data-aos="fade-left">
       <?php 
       $servername = "localhost";
       $username = "root";
       $password = "";
       $dbname = "dblink";
       $conn = mysqli_connect($servername, $username, $password, $dbname);
       $sql = "select * from remittancelink";
       $result=mysqli_query($conn, $sql);
     
        if (mysqli_num_rows($result) > 0) {
          // output data of each row
          while($row = mysqli_fetch_assoc($result)) {
            ?>
            
           <div class="col-lg-3 col-md-4 mt-4">
           <div class="icon-box" data-aos="zoom-in" data-aos-delay="50">
           <h3><a href="<?php echo $row['link'];?>"   target="_blank" class="stretched-link"><img title="locallink" alt="<?php echo $row['title'];?>"  src="assets/img/<?php echo $row['icon_dir'];?>" width="40px"/><?php echo $row["title"]; ?></a></h3>
          </div>
          </div>
           <?php
          }
        } else {
          echo "0 results";
        }
        ?>
      </div>
      </div>
    </section><!-- End Features Section -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Wegagen Bank</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/bootslander-free-bootstrap-landing-page-template/ -->
        Designed by Elias Dengo
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
