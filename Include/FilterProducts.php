<?php
    require "../Include/Dbconnect.php";
    include "../Include/Product.php";
    
    $sql = [];
    $parameteres = [];
    if(isset($_GET["search"])){
        $sql[] = " name LIKE ?";
        $parameteres[] = "%" . $_GET["search"] . "%";
    }

    //Filters by type
    if(isset($_GET["CPU"])){
        $sql[] = " type = CPU";
    }
    if(isset($_GET["GPU"])){
        $sql[] = " type = GPU";
    }
    if(isset($_GET["Motherboard"])){
        $sql[] = " type = Motherboard";
    }
    if(isset($_GET["RAM"])){
        $sql[] = " type = RAM";
    }

    //Filters by manufacture
    if(isset($_GET["Dell"])){
        $sql[] = " manufacture = Dell";
    }
    if(isset($_GET["Acer"])){
        $sql[] = " manufacture = Acer";
    }
    if(isset($_GET["Intel"])){
        $sql[] = " manufacture = Intel";
    }
    if(isset($_GET["AMD"])){
        $sql[] = " manufacture = AMD";
    }
    if(isset($_GET["Nvidia"])){
        $sql[] = " manufacture = Nvidia";
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
    
    //Construct SQL Query
    $query = "SELECT * FROM products";
    if($sql) {
        $query .= ' WHERE ' . implode(' AND ', $sql);
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