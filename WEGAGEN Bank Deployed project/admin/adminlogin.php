<?php 
session_start();
if (isset($_POST['login'])) {
$username=$_POST['username'];
$password=$_POST['password'];

// connecting to server 
$conn = mysqli_connect("localhost", "root", "","dblink");

// to prevent from sql injection we have to use 
$username=stripcslashes($username);
$password=stripcslashes($password);

$username=mysqli_real_escape_string($conn,$username);
$password=mysqli_real_escape_string($conn,$password);



//quering data from data base 
$result=mysqli_query($conn,"select * from admin where username='$username' and password='$password'")
 or die("query data from database".mysql_error());

 $row=mysqli_fetch_array($result);

 if($row['username']==$username && $row['password']==$password){
   //session for authentication
  $_SESSION['username']=$row['username'];
    header("Location:http://localhost/WEGAGEN/admin/admin.php");

    //exit;

 }else{
    //echo "<script type='text/javascript'>alert('Login failed!!');</script>";
    header("Location:localhost/WEGAGEN/admin/login.html");
    exit;
 }
 mysqli_close($conn);
}
?>