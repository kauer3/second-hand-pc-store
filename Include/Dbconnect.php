<?php
    require "../dbconfig.php";
    $con = mysqli_init();
    
    mysqli_real_connect($con,  $servername, $username, $password, $dbname,  $port);
    if ($con->mysqli_connect_errno()) {
    die('Failed to connect to MySQL: '.mysqli_connect_error()); }

    //$connection = new mysqli($servername, $username, $password, $dbname);
  //  if($connection->connect_errno) {
//        die("Connection failed: " . $connection->connect_errno);
 //   }
?>
