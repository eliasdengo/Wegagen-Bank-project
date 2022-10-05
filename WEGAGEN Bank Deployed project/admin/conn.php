
   <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname="dblink";
    
    // Create connection
    $conn = mysqli_connect($servername, $username, $password,$dbname);
    
    // Check connection
    if (mysqli_connect_errno()) {
      die("Connection failed: " . mysqli_connect_error());
      exit();
    }
    //echo "Connected successfully";
    ?>