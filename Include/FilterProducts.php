<?php
    require "../Include/Dbconnect.php";
    include "../Include/Product.php";
    
    $sql = [];
    $sql2 = [];
    $parameteres = [];
    $query = "SELECT * FROM products";

    if(isset($_GET["search"])){
        $queryConstruct = " WHERE name LIKE ?";
        $parameteres[] = "%" . $_GET["search"] . "%";
    }

    //Filters by type
    if(isset($_GET["Prebuilt"]) && $_GET["Prebuilt"]){
        $sql[] = " category = 'Prebuilt'";
    }
    if(isset($_GET["CPU"]) && $_GET["CPU"]){
        $sql[] = " category = 'CPU'";
    }
    if(isset($_GET["GPU"]) && $_GET["GPU"]){
        $sql[] = " category = 'GPU'";
    }
    if(isset($_GET["Motherboard"]) && $_GET["Motherboard"]){
        $sql[] = " category = 'Motherboard'";
    }
    if(isset($_GET["RAM"]) && $_GET["RAM"]){
        $sql[] = " category = 'RAM'";
    }

    //Filters by manufacture
    if(isset($_GET["Dell"]) && $_GET["Dell"]){
        $sql2[] = " manufacture = 'Dell'";
    }
    if(isset($_GET["Acer"]) && $_GET["Acer"]){
        $sql2[] = " manufacture = 'Acer'";
    }
    if(isset($_GET["Intel"]) && $_GET["Intel"]){
        $sql2[] = " manufacture = 'Intel'";
    }
    if(isset($_GET["AMD"]) && $_GET["AMD"]){
        $sql2[] = " manufacture = 'AMD'";
    }
    if(isset($_GET["Nvidia"]) && $_GET["Nvidia"]){
        $sql2[] = " manufacture = 'Nvidia'";
    }
    //
    
    //
    if($sql) {
        if(isset($queryConstruct)){
            $queryConstruct .= " AND (" . implode(' OR ', $sql) . ")";
        }
        else{
            $queryConstruct = " WHERE " . implode(' OR ', $sql);
        }
        
    }
    if($sql2) {
        if(isset($queryConstruct)){
            $queryConstruct .= " AND (" . implode(' OR ', $sql2) . ")";
        }
        else{
            $queryConstruct = " WHERE " . implode(' OR ', $sql2);
        }
        
    }
    //Minprice and Maxprice check
    if(isset($_GET["MinPrice"])){
        $minPrice = floatval($_GET["MinPrice"]);
    }
    if(isset($_GET["MaxPrice"])){
        $maxPrice = floatval($_GET["MaxPrice"]);
    }
    if(isset($queryConstruct)){
        if(isset($minPrice) && isset($maxPrice) && $minPrice < $maxPrice){
            $sqlPrice = " AND price BETWEEN " . $minPrice - 0.01 . " AND " . $maxPrice + 0.01;
        }
        elseif(isset($minPrice)){
            $sqlPrice = " AND price > $minPrice";
        }
        elseif(isset($maxPrice)){
            $sqlPrice = " AND price < $maxPrice";
        }
    }
    elseif(isset($minPrice) && isset($maxPrice) && $minPrice < $maxPrice){
        $sqlPrice = " WHERE price BETWEEN " . $minPrice - 0.01 . " AND " . $maxPrice + 0.01;
    }
    elseif(isset($minPrice)){
        $sqlPrice = " WHERE price > $minPrice";
    }
    elseif(isset($maxPrice)){
        $sqlPrice = " WHERE price < $maxPrice";
    }
    //

    if(isset($queryConstruct)){
        $query .= $queryConstruct;
    }
    if(isset($sqlPrice)){
        $query .= $sqlPrice;
    }
    //Prepare Statements
    $stmt = $connection->prepare($query);
    if($parameteres){
        $stmt->bind_param(str_repeat('s', count($parameteres)), ...$parameteres);
    }
    
    $stmt->execute();
    $result = $stmt->get_result();
    
    $productList = array();
    if(!$result) {
        die("Failed Running SQL statment: " . $connection->error);
    }
    while($row = $result->fetch_assoc()){
        $productItem = new Product($row["prodID"], $row["name"], $row["category"], $row["manufacture"], $row["specs"], $row["descr"], $row["price"]);
        array_push($productList, $productItem);
    }
?>