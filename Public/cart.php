<?php
include "Layout/header.php";
?>
<main class="main-content cart-main">
    <h1 class="main-title text">Cart</h1>
    <div class="cart-item-list">
        <div class="cart-item">
            <div class="cart-item-image square-image-container">
                <img src="https://picsum.photos/500/900" alt="LARK Computing">
            </div>
            <span class="cart-item-title text">Name Of Product 1</span>
            <span class="cart-item-price">$99.00</span>
            <span class="cart-item-specs">
                Specification 1 of the product<br>
                Specification 2 of the same product<br>
                Specification 3 of the same product as well<br>
                Specification 4 of the product<br>
                Specification 5 of the same product<br>
                Specification 6 of the same product as well<br>
                Specification 7 of the product
            </span>
        </div>
        <div class="cart-item">
            <div class="cart-item-image square-image-container">
                <img src="https://picsum.photos/500" alt="LARK Computing">
            </div>
            <span class="cart-item-title text">Name Of Product 2</span>
            <span class="cart-item-price">$57.99</span>
            <span class="cart-item-specs">
                Specification 1 of the product<br>
                Specification 2 of the same product<br>
                Specification 3 of the same product as well<br>
                Specification 4 of the product<br>
                Specification 5 of the same product<br>
                Specification 6 of the same product as well<br>
                Specification 7 of the product
            </span>
        </div>
        <div class="cart-item">
            <div class="cart-item-image square-image-container">
                <img src="https://picsum.photos/600" alt="LARK Computing">
            </div>
            <span class="cart-item-title text">Name Of Product 2</span>
            <span class="cart-item-price">$199.99</span>
            <span class="cart-item-specs">
                Specification 1 of the product<br>
                Specification 2 of the same product<br>
                Specification 3 of the same product as well<br>
                Specification 4 of the product<br>
                Specification 5 of the same product<br>
                Specification 6 of the same product as well<br>
                Specification 7 of the product
            </span>
        </div>
        <div class="total-price-container">
            <span class="total-price-label text">Total</span>
            <span class="total-price text">$275.99</span>
        </div>
        <button class="cart-checkout-button" type="button" onclick="document.location.href='checkout.php'">Checkout</button>
    </div>
</main>
<?php
include "Layout/footer.php";
?>