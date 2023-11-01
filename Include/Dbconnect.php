<?php
    require "../dbconfig.php";
    $con = mysqli_init();
    mysqli_ssl_set($con,NULL,NULL, "DigiCertGlobalRootCA.crt.pem", NULL, NULL);
    mysqli_real_connect($con,  $servername, $username, $password, $dbname,  $port, MYSQLI_CLIENT_SSL);
    if (mysqli_connect_errno($con)) {
    die('Failed to connect to MySQL: '.mysqli_connect_error()); }

    //$connection = new mysqli($servername, $username, $password, $dbname);
  //  if($connection->connect_errno) {
//        die("Connection failed: " . $connection->connect_errno);
 //   }
?>
