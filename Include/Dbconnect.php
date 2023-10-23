<?php
    require "../dbconfig.php";
    $connection = new mysqli($servername, $username, $password, $dbname);
    if($connection->connect_errno) {
        die("Connection failed: " . $connection->connect_errno);
    }
?>