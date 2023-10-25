<?php
    include "Layout/header.php";
    include "../Include/FilterProducts.php";
?>
<div class="banner"></div>
<div class="main-section">
    <div class="filter-container">
        <form class="filter">
            <h3 class="filter-title text">Filter by:</h3>
            <div class="filter-item">
                <div class="filter-item-content-item">
                    <label class="text" for="CPU">CPU</label>
                    <input class="filter-checkbox" type="checkbox" name="CPU" id="CPU" onchange="updateURL(this)">
                </div>
                <div class="filter-item-content-item">
                    <label class="text" for="GPU">GPU</label>
                    <input class="filter-checkbox" type="checkbox" name="GPU" id="GPU" onchange="updateURL(this)">
                </div>
                <div class="filter-item-content-item">
                    <label class="text" for="Motherboard">Motherboard</label>
                    <input class="filter-checkbox" type="checkbox" name="Motherboard" id="Motherboard" onchange="updateURL(this)">
                </div>
                <div class="filter-item-content-item">
                    <label class="text" for="RAM">RAM</label>
                    <input class="filter-checkbox" type="checkbox" name="RAM" id="RAM" onchange="updateURL(this)">
                </div>
                <div class="filter-item-content-item">
                    <label class="text" for="Dell">Dell</label>
                    <input class="filter-checkbox" type="checkbox" name="Dell" id="Dell" onchange="updateURL(this)">
                </div>
                <div class="filter-item-content-item">
                    <label class="text" for="Acer">Acer</label>
                    <input class="filter-checkbox" type="checkbox" name="Acer" id="Acer" onchange="updateURL(this)">
                </div>
                <div class="filter-item-content-item">
                    <label class="text" for="Intel">Intel</label>
                    <input class="filter-checkbox" type="checkbox" name="Intel" id="Intel" onchange="updateURL(this)">
                </div>
                <div class="filter-item-content-item">
                    <label class="text" for="AMD">AMD</label>
                    <input class="filter-checkbox" type="checkbox" name="AMD" id="AMD" onchange="updateURL(this)">
                </div>
                <div class="filter-item-content-item">
                    <label class="text" for="Nvidia">Nvidia</label>
                    <input class="filter-checkbox" type="checkbox" name="Nvidia" id="Nvidia" onchange="updateURL(this)">
                </div>
            </div>
            <div class="filter-item">
                <div class="filter-item-content-item-grid">
                    <label class="text" for="MinPrice">Min Price</label>
                    <input class="price-range" type="range" name="MinPrice" id="MinPrice" step="10" min="0" max="2000" value="0" onchange="updateURL(this)" oninput="updatePriceIndicator(this)">
                    <span id="MinPrice-indicator" class="price text">$0.00</span>
                </div>
                <div class="filter-item-content-item-grid">
                    <label class="text" for="MaxPrice">Max Price</label>
                    <input class="price-range" type="range" name="MaxPrice" id="MaxPrice" step="10" min="30" max="2000" value="2000" onchange="updateURL(this)" oninput="updatePriceIndicator(this)">
                    <span id="MaxPrice-indicator" class="price text">$2000.00</span>
                </div>
            </div>
        </form>
    </div>
    <main class="products-grid">
        <?php
            function product_div($listProd) {
                foreach($listProd as $item) {
                    echo "<div class=\"product-card\" onclick=\"document.location.href='product.php?product=" . $item->prodID . "'\">";
                    echo "<div class=\"product-card-image\"><img src=\"./Assets/Img/" . $item->prodID . "/" . $item->prodID . ".jpg\" alt=\"" . $item->name . "\"></div>";
                    echo "<div class=\"product-card-content\">";
                    echo "<div class=\"card-text\">";
                    echo "<div class=\"product-card-title\">" . $item->name . "</div>";
                    echo "<div class=\"product-card-price text\">$" . $item->price . "</div>";
                    echo "</div><button class=\"product-card-button text\">Add to Cart</button></div></div>";
                }
            }
            product_div($productList);
        ?>
    </main>
</div>
<?php
include "Layout/footer.php";
?>