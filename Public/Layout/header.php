<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LARK</title>
    <link rel="stylesheet" href="Layout/reset.css">
    <link rel="stylesheet" href="Layout/theme.css">
    <link rel="stylesheet" href="Layout/style.css">
    <link rel="stylesheet" href="Layout/index.css">
    <link rel="stylesheet" href="Layout/product.css">
    <link rel="stylesheet" href="Layout/about.css">
    <link rel="stylesheet" href="Layout/checkout.css">
    <link rel="stylesheet" href="Layout/register.css">
    <link rel="stylesheet" href="Layout/cart.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/brands.min.css" integrity="sha512-W/zrbCncQnky/EzL+/AYwTtosvrM+YG/V6piQLSe2HuKS6cmbw89kjYkp3tWFn1dkWV7L1ruvJyKbLz73Vlgfg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="scroll.js"></script>
    <script src="filter.js"></script>
</head>

<body>
    <header>
        <div class="menu-container">
            <div class="menu-button text">
                <i class="menu-icon fa fa-bars"></i>
            </div>
            <div class="menu">
                <div class="menu-item text">Pre-built PCs</div>
                <div class="menu-item text">PC Parts</div>
                <div class="menu-item text">On Sale</div>
                <div class="menu-item text">Dell</div>
                <div class="menu-item text">Acer</div>
                <div class="menu-item text">Intel</div>
                <div class="menu-item text">AMD</div>
                <div class="menu-item text">Nvidia</div>
                <a class="menu-item text" href="about.php">About Us</a>
            </div>
        </div>
        <div class="logo-container">
            <span class="logo" onclick="document.location.href='index.php'">LARK</span>
        </div>
        <form class="search-bar">
            <input type="text" class="search-input" placeholder="Search..." name="search">
            <button type="submit">
                <i class="search-icon fa fa-search"></i>
            </button>
        </form>
        <button class="login-button" onclick="document.location.href='login.php'">Login</button>
        <a href="cart.php">
            <i class="cart-icon fa fa-cart-shopping"></i>
        </a>
    </header>