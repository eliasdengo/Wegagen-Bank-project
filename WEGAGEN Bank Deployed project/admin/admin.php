<!DOCTYPE html>
<?php 
require_once "auth.php";
?>
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
  </header><!-- End Header -->

  <main id="main">
<!--this all about local link dynamically isert into user interface-->
  <div class="text-center m-3 px-4">
          <h1>ADMIN PAGE</h1>
  </div>
  <div class="container-lg">
  <div class="row">
    <div class="col-6">
      <div class="position-relative h-100">
                  <form action="" method="post" enctype="multipart/form-data">
                    <div>
                      <h1>Local Links </h1>
                  </div>
                <!--the link that direct to add new items link-->
                  <div><a href="locallink.php" >Add New</a></div>
                  <div>
                      <div class="table-responsive">
                        <!--table to edit and delete ,the data add into database display -->
                          <table class="table table-dark table-hover">
                              <thead>
                                  <tr>
                                      <th>Id</th>
                                      <th>Icon</th>
                                      <th>Title</th>
                                      <th>Link</th>
                                      <th>Edit</th>
                                      <th>Delete</th>
                                  </tr>
                              </thead>
                              <tbody>
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
                                  <tr >
                                      <td ><?php echo $row['id']; ?></td>
                                      <td ><img src="../assets/img/<?php echo $row['icon_dir'];?>" width="40px"/></td>
                                      <td ><?php echo $row['title']; ?></td>
                                      <td ><?php echo $row['link']; ?></td>
                                      <td ><Button  class="btn btn-info" ><a href="llinks.php?edit=<?php echo $row['id'];?>"  name="">Edit</a></Button></td>
                                      <td ><Button  class="btn btn-danger" ><a href="locallinks.php?delete=<?php echo $row['id'];?>" >Delete</a></Button></td>
                                  </tr>
                                  <?php
                        }
                      } else {
                       echo '<tr>No Record Avaliable</tr>';
                      }
                      ?>
                              </tbody>
                          </table>
                      </div>
                  </div>
                  </form>
        </div>
    </div>
<!--all about remittance link to company-->
    <div class="col-6">
       
       <form action="" method="post" enctype="multipart/form-data">
         <div>
           <h1>Remittance Links </h1>
       </div>
       <!--link to direct into ad new items-->
       <div><a href="remittancelink.php" >Add New</a></div>
       <div>
           <div class="table-responsive">
             
               <table class="table table-dark table-hover">
                   <thead>
                       <tr>
                           <th>Id</th>
                           <th>Icon</th>
                           <th>Title</th>
                           <th>Link</th>
                           <th>Edit</th>
                           <th>Delete</th>
                       </tr>
                   </thead>
                   <tbody>
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
                       <tr >
                           <td ><?php echo $row['id']; ?></td>
                           <td ><img src="../assets/img/<?php echo $row['icon_dir'];?>" width="40px"/></td>
                           <td ><?php echo $row['title']; ?></td>
                           <td ><?php echo $row['link']; ?></td>
                           <td ><Button class="btn btn-info"><a href="rlinks.php?edit=<?php echo $row['id'];?>"  name="">Edit</a></Button></td>
                           <td ><Button class="btn btn-danger"><a href="remittancelinks.php?delete=<?php echo $row['id'];?>" >Delete</a></Button></td>
                       </tr>
                       <?php
             }
           } else {
            echo '<tr>No Record Avaliable</tr>';
           }
           ?>
                   </tbody>
               </table>
           </div>
       </div>
       </form>
    </div>
  </div>
</div>


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
