<?php
include "Layout/header.php";
include "../Include/GenProductPage.php";
include "../Include/Cart.php";
?>
<main class="main-content">
    <h1 class="main-title"><?php echo $product->name;?></h1>
    <div class="product-info">
        <div class="images-grid">
            <div class="sub-images">
                <div class="sub-image square-image-container">
                    <img src="<?php echo "./Assets/Img/$product->prodID/". $product->prodID ."_1.jpg"?>" alt="Product Image">
                </div>
                <div class="sub-image square-image-container">
                    <img src="<?php echo "./Assets/Img/$product->prodID/". $product->prodID ."_2.jpg"?>" alt="Product Image">
                </div>
                <div class="sub-image square-image-container">
                    <img src="<?php echo "./Assets/Img/$product->prodID/". $product->prodID ."_3.jpg"?>" alt="Product Image">
                </div>
                <div class="sub-image square-image-container">
                    <img src="<?php echo "./Assets/Img/$product->prodID/". $product->prodID ."_4.jpg"?>" alt="Product Image">
                </div>
            </div>
            <div class="main-image square-image-container">
                <?php echo "<img src=\"./Assets/Img/" . $product->prodID . "/" . $product->prodID . ".jpg\" alt=\"" . $product->name . "\">"?>
            </div>
        </div>
        <div class="specs-and-buttons">
            <h3 class="price"><?php echo "$" . $product->price;?></h3>
            <?php
                $itemInCart = false; 
                if(isset($_SESSION["cart"])) {
                    $cartList = unserialize($_SESSION["cart"]);
                    foreach($cartList as $item){
                        if($item->prodID == $product->prodID){
                            echo "<button class=\"cart-button\" onclick=\"document.location.href='./Handle/Handle_Remove_Cart.php?prodID=$product->prodID'\">Remove From Cart</button>";
                            $itemInCart = true;
                            break;
                        }
                    }
                }
                elseif(!$itemInCart) {
                    echo "<button class=\"cart-button\" onclick=\"document.location.href='./Handle/Handle_Add_Cart.php?prodID=$product->prodID&name=$product->name&specs=$product->specs&price=$product->price'\">Add To Cart</button>";
                }
                ?>
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