<?php
    if(!isset($_GET["product"])){
        header('Location: index.php');
    }

    include "../Include/Dbconnect.php";
    include "../Include/Product.php";
    
    $sql = "SELECT * From products WHERE prodID = ?";
    $stmt = $connection->prepare($sql);
    $stmt->bind_param('i', $_GET["product"]);

    $stmt->execute();
    $result = $stmt->get_result();
    if(!$result) {
        die("Failed Running SQL statment: " . $connection->error);
    }
    $productResult = $result->fetch_assoc();

    if($productResult == null){
        header('Location: index.php');
    }

    $product = new Product($productResult["prodID"], $productResult["name"], $productResult["category"], $productResult["manufacture"], $productResult["specs"], $productResult["descr"], $productResult["price"])
?>