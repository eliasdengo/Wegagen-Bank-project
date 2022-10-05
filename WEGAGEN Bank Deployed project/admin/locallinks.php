<?php
session_start();
require_once "auth.php";
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dblink";

$icon="";
$title ="";
$link ="";
// Check connection
//if (mysqli_connect_errno()) { 
  //die("Connection failed: " . mysqli_connect_error());
//}
$msg="";
$conn = mysqli_connect($servername, $username, $password, $dbname);
 if (isset($_POST['add'])) {
   $parent = dirname(__DIR__);
$target_file = $parent."./assets/img/"  . basename($_FILES["icon"]["name"]);

    $icon=$_FILES['icon']['name'];
    $title = $_POST['title'];
    $link =  $_POST['link'];
 
 $sql = "INSERT INTO locallink(icon_dir,title,link) VALUES ('$icon',
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
   echo "<script type='text/javascript'>alert('$msg')</script>";
   header("Location: http://localhost/WEGAGEN/admin/locallinks.html");
   exit();
 }

 // Close connection
 mysqli_close($conn);
}

if(isset($_GET['delete'])){
$id=$_GET['delete'];
$conn->query("DELETE FROM locallink where id=$id") or die($conn->error());
  header('location: http://localhost/WEGAGEN/admin/admin.php');
  exit();
  mysqli_close($conn);
}


if(isset($_GET['edit'])){

   $id=$_GET['edit'];
   $result=$conn->query("select * from locallink where id=$id") or die($conn->error());
   if(count((array)$result)>0){
    $row=$result->mysqli_fetch_array();
    $icon=$row['icon_dir'];
    $title=$row['title'];
    $link=$row['link'];
  
   }
}

 ?>
