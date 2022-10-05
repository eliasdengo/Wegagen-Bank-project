<?php 
require_once 'conn.php';

  $id=$_GET['edit'];
 $sql="select * from locallink where id=$id";
  $result=mysqli_query($conn,$sql);
   $row=mysqli_fetch_assoc($result);
   $icon=$row['icon_dir'];
   $title=$row['title'];
   $link=$row['link'];
  
  if(isset($_POST['Update'])){

    $parent = dirname(__DIR__);
$target_file = $parent."./assets/img/"  . basename($_FILES["icon"]["name"]);
  if($icon!=''){
   
    $icon=$row['icon_dir'];
  }else{
    $icon=$_FILES['icon']['name'];
  }
 
  $title=$_POST['title'];
  $link=$_POST['link'];

  $sql="update `locallink` set id=$id,icon_dir='$icon',title='$title',link='$link' where id=$id";

  $result=mysqli_query($conn,$sql);

  if($result){

    header('location: http://localhost/WEGAGEN/admin/admin.php');
    exit();

  }else{

    die(mysqli_error($conn));
  }

  }


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Wegagen Links</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">

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
        <h1><a href="index.html"><img title="locallink" alt="Western Union" src="../assets/img/cropped-cropped-cropped-cropped-wegagen-bank-1.png" width="120px"/></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto " id="llink" href="locallinks.html">Local Links</a></li>
          <li><a class="nav-link scrollto " id="rlink" href="remittancelinks.html">Remittance Links</a></li>

        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">


    <section class="vh-70 gradient-custom" id="loclink">
        <div class="container py-3 h-70">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
              <div class="card bg-dark text-white" style="border-radius: 1rem;">
                <div class="card-body p-5 text-center">
                  <form action="#" method="post" enctype="multipart/form-data" >
                        <div class="input-group mb-3">
                            <label style="color:#ff660f;">Local Links</label>
                            </div>
                    <div class="input-group mb-3">
                      <img src="../assets/img/<?php echo $row['icon_dir'];?>" width="100px"/>
                      </div>
                  <div class="mb-md-5 mt-md-4 pb-5">
                    <div class="mb-3">
                        <label for="icon" class="form-label">Icons</label>
                        <input class="form-control" name="icon" type="file" value="../assets/img/<?php echo $row['icon_dir'];?>"  id="icon">
                      </div>
                      <div class="mb-3">
                      <label for="title" class="form-label">Title</label>
                      <input type="text" class="form-control" name="title" value="<?php echo $title; ?>" id="title" placeholder="name@example.com">
                    </div>
                    <div class="mb-3">
                        <label for="link" class="form-label">Link</label>
                        <input type="url" class="form-control form-control-lg" name="link" value="<?php echo  $link; ?>" id="link" placeholder="https://www.wegagen.com"/>
                      </div>
                      <div class="mb-3">
                        <input class="btn btn-warning  text-light bg-dark" type="submit" name="Update" value="Update">
                      </div>
                    </div>
                  </form>
                </div>
    

                </div>
              </div>
            </div>
          </div>
        </div>
      </section>


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
  <script src="../assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="../assets/vendor/aos/aos.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>

</body>

</html>
