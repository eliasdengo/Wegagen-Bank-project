<?php
session_start();
require_once "auth.php";
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dblink";

$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
//if (mysqli_connect_errno()) { 
  //die("Connection failed: " . mysqli_connect_error());
//}
$msg="";

 if (isset($_POST['add'])) {
   $parent = dirname(__DIR__);
$target_file = $parent."./assets/img/"  . basename($_FILES["icon"]["name"]);

    $icon=$_FILES['icon']['name'];
    $title = $_POST['title'];
    $link =  $_POST['link'];
 
 $sql = "INSERT INTO remittancelink(icon_dir,title,link) VALUES ('$icon',
     '$title','$link')";
  
  mysqli_query($conn, $sql); //stores the submitted data into the database table : image

  //now let move the uploaded image into the folder:images


 if(move_uploaded_file($_FILES['icon']['tmp_name'],$target_file)){
$msg="Icon uploaded successfully";
echo "<script type='text/javascript'>alert('$msg');</script>";
header("Location:http://localhost/WEGAGEN/admin/admin.php");
exit();
 }
 else{
   $msg="there was aproblem uploading icon ";
   echo "<script type='text/javascript'>alert('$msg');</script>";
   header("Location:http://localhost/WEGAGEN/admin/remittancelinks.html");
   exit;
 }

 // Close connection
 mysqli_close($conn);
}
//for deleting data from data base
if(isset($_GET['delete'])){
  $id=$_GET['delete'];
  $conn->query("DELETE FROM remittancelink where id=$id") or die($conn->error());
  
    header('location: http://localhost/WEGAGEN/admin/admin.php');
    exit();
    
  }
  

 ?>
