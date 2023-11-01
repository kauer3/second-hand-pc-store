<?php
    include "Layout/header.php";
    include "../Include/Cart.php";
?>
<main class="main-content cart-main">
    <h1 class="main-title text">Cart</h1>
    <div class="cart-item-list">
        <?php
            $priceTotal = 0;
            if(isset($_SESSION["cart"])) {
                $cartList = unserialize($_SESSION["cart"]);
                foreach($cartList as $item) {
                    echo "<div class=\"cart-item\">";
                    echo "<div class=\"cart-item-image square-image-container\">";
                    echo "<img src=\"Assets/Img/$item->prodID/$item->prodID.jpg\" alt=\"$item->name\"></div>";
                    echo "<span class=\"cart-item-title text\">$item->name</span>";
                    echo "<span class=\"cart-item-price\">$$item->price</span>";
                    echo "<span class=\"cart-item-specs\">";
                    echo "$item->specs</span></div>";
                    $priceTotal += $item->price;
                    $_SESSION["total"] = $priceTotal;
                }    
            
        ?>
        <div class="total-price-container">
            <span class="total-price-label text">Total</span>
            <span class="total-price text">$<?php echo $priceTotal;?></span>
        </div>
        <button class="cart-checkout-button" type="button" onclick="document.location.href='checkout.php'">Checkout</button>
        <?php }
            else {
                echo "<div class=\"cart-item\">";
                echo "<span class=\"cart-item-title text\">There are no items in cart!</span></div>";
            }
        ?>
    </div>
</main>
<?php
include "Layout/footer.php";
?>