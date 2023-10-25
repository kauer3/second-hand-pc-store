<?php
include "Layout/header.php";
include "../Include/GenProductPage.php";
?>
<main class="main-content">
    <h1 class="main-title"><?php echo $product->name;?></h1>
    <div class="product-info">
        <div class="images-grid">
            <div class="sub-images">
                <div class="sub-image square-image-container">
                    <img src="https://picsum.photos/100" alt="Product Image">
                </div>
                <div class="sub-image square-image-container">
                    <img src="https://picsum.photos/200/300" alt="Product Image">
                </div>
                <div class="sub-image square-image-container">
                    <img src="https://picsum.photos/300/200" alt="Product Image">
                </div>
                <div class="sub-image square-image-container">
                    <img src="https://picsum.photos/400" alt="Product Image">
                </div>
            </div>
            <div class="main-image square-image-container">
                <?php echo "<img src=\"./Assets/Img/" . $product->prodID . "/" . $product->prodID . ".jpg\" alt=\"" . $product->name . "\">"?>
            </div>
        </div>
        <div class="specs-and-buttons">
            <h3 class="price"><?php echo "$" . $product->price;?></h3>
            <button class="cart-button">Add To Cart</button>
            <button class="wishlist-button">Add To Wishlist</button>
            <span class="specs">
                <?php echo $product->specs;?>
            </span>
        </div>
    </div>
    <div class="description paragraphs">
        <h3 class="description-title">Description</h3>
        <p class="description-text">
            <?php echo $product->desc;?>
        </p>
    </div>
</main>

<?php
include "Layout/footer.php";
?>