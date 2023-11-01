<?php
    if($_SERVER["REQUEST_METHOD"] == "GET"){
        die("This page does not accept GET requests!!!");
    }
    session_start();

    require "../../dbconfig.php";
    $connection = new mysqli($servername, $username, $password, $dbname);
    if($connection->connect_errno) {
        die("Connection failed: " . $connection->connect_errno);
    }

    include "../../Include/Cart.php";
    include "../../Include/User.php";

    if(isset($_SESSION["user"])){
        $user = unserialize($_SESSION["user"]);
        $userID = $user->userID;
    }
    else {
        $userID = 0;
    }
    
    if(isset($_SESSION["cart"])) {
        $cartList = unserialize($_SESSION["cart"]);
        $productList = [];
        foreach($cartList as $item) {
            array_push($productList, $item->name);
        }
        $products = implode(", ", $productList);
    }
    else {
        die("Cart not set!!!");
    }

    $firstName = $_POST["first-name"];
    $lastName = $_POST["last-name"];
    $address = $_POST["address"];
    $city = $_POST["city"];
    $zip = $_POST["zip"];
    $country = $_POST["country"];
    $phone = $_POST["phone"];
    $total = $_SESSION["total"];

    $sql = "INSERT INTO orders (userID, products, firstName, lastName, address, city, zip, country, phone, total) VALUE (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = $connection->prepare($sql);
    $stmt->bind_param('ssssssssid', $userID, $products, $firstName, $lastName, $address, $city, $zip, $country, $phone, $total);

    $stmt->execute();

    unset($_SESSION["cart"]);

    header('Location: ../index.php')
?>