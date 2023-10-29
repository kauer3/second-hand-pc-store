<?php
    session_start();
    include "../../Include/Cart.php";

    if(!isset($_SESSION["cart"])) {
        header('Location: ../index.php');
        die;
    }
    
    $cartList = unserialize($_SESSION["cart"]);
    foreach($cartList as $key => $value){
        if($_GET["prodID"] == $value->prodID){
            unset($cartList[$key]);
        }
    }
    if(count($cartList) <= 0){
        unset($_SESSION["cart"]);
    }
    else {
        $_SESSION["cart"] = serialize($cartList);
    }

    header('Location: ../product.php?product=' . $_GET["prodID"]);
?>