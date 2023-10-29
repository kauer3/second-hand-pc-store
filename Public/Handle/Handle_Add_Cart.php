<?php
    session_start();
    include "../../Include/Cart.php";

    if(isset($_SESSION["cart"])){
        $cartList = unserialize($_SESSION["cart"]);
    }
    else {
        $cartList = [];
    }

    $cartID = $_GET["prodID"];
    $cartName = $_GET["name"];
    $cartSpecs = $_GET["specs"];
    $cartPrice = $_GET["price"];

    $cartItem = new Cart($cartID,$cartName,$cartSpecs,$cartPrice);
    array_push($cartList, $cartItem);

    $_SESSION["cart"] = serialize($cartList);

    header('Location: ../product.php?product=' . $cartID);
?>