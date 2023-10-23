<?php
    require "../Include/Dbconnect.php";
    include "../Include/Product.php";
    
    $sql = [];
    $parameteres = [];
    if(isset($_GET["search"])){
        $sql[] = " name LIKE ?";
        $parameteres[] = $_GET["search"];
    }
    
    //Minprice and Maxprice check
    if(isset($_GET["MinPrice"])){
        $minPrice = floatval($_GET["MinPrice"]);
    }
    if(isset($_GET["MaxPrice"])){
        $maxPrice = floatval($_GET["MaxPrice"]);
    }
    if(isset($minPrice) && isset($maxPrice) && $minPrice < $maxPrice){
        $sql[] = " price BETWEEN " . $minPrice . " AND " . $maxPrice;
    }
    elseif(isset($minPrice)){
        $sql[] = " price > $minPrice";
    }
    elseif(isset($maxPrice)){
        $sql[] = " price < $maxPrice";
    }
    //

    $query = "SELECT * FROM products";

    if($sql) {
        $query .= ' WHERE ' . implode(' AND ', $sql);
    }
    $stmt = $connection->prepare($query);

    if($parameteres){
        $stmt->bind_param(str_repeat('s', count($parameteres)), ...$parameteres);
    }
    $stmt->execute();
    $result = $stmt->get_result();
    if(!$result) {
        die("Failed Running SQL statment: " . $connection->error);
    }
?>