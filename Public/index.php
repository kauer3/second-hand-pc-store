<?php
    include "Layout/header.php";
    include "../Include/FilterProducts.php";

    // $url = $_SERVER['REQUEST_URI'];
    // $url_components = parse_url($url);
    // parse_str($url_components['query'], $params);
    // $GPU = $params['GPU'];
    // $CPU = $params['CPU'];
    // $Motherboard = $params['Motherboard'];
    // $RAM = $params['RAM'];
    // $Dell = $params['Dell'];
    // $Acer = $params['Acer'];
    // $Intel = $params['Intel'];
    // $AMD = $params['AMD'];
    // $Nvidia = $params['Nvidia'];
    // $MinPrice = $params['MinPrice'];
    // $MaxPrice = $params['MaxPrice'];

    // //if $GPU is on, get reference for corresponding input checkbox and mark it as checked
    // if ($GPU == "on") {
    //     $GPU = "checked";
    // }

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
                    echo "<div class=\"product-card-image\"><img src=\"./Assets/Img/" . $item->prodID . ".jpeg\" alt=\"" . $item->name . "\"></div>";
                    echo "<div class=\"product-card-content\">";
                    echo "<div class=\"card-text\">";
                    echo "<div class=\"product-card-title\">" . $item->name . "</div>";
                    echo "<div class=\"product-card-price text\">$" . $item->price . "</div>";
                    echo "</div><button class=\"product-card-button text\">Add to Cart</button></div></div>";
                }
            }
            product_div($productList);
        ?>
        <div class="product-card" onclick="document.location.href='product.php'">
            <div class="product-card-image">
                <img src="https://picsum.photos/270/230" alt="Product Title">
            </div>
            <div class="product-card-content">
                <div class="card-text">
                    <div class="product-card-title text">Product Title</div>
                    <div class="product-card-price text">$200.99</div>
                </div>
                <button class="product-card-button text">Add to Cart</button>
            </div>
        </div>
        <div class="product-card">
            <div class="product-card-image">
                <img src="https://picsum.photos/270/230" alt="product">
            </div>
            <div class="product-card-content">
                <div class="card-text">
                    <div class="product-card-title text">Product Title</div>
                    <div class="product-card-price text">$200.99</div>
                </div>
                <button class="product-card-button text">Add to Cart</button>
            </div>
        </div>
        <div class="product-card">
            <div class="product-card-image">
                <img src="https://picsum.photos/270/230" alt="product">
            </div>
            <div class="product-card-content">
                <div class="card-text">
                    <div class="product-card-title text">Product Title</div>
                    <div class="product-card-price text">$200.99</div>
                </div>
                <button class="product-card-button text">Add to Cart</button>
            </div>
        </div>
        <div class="product-card">
            <div class="product-card-image">
                <img src="https://picsum.photos/270/230" alt="product">
            </div>
            <div class="product-card-content">
                <div class="card-text">
                    <div class="product-card-title text">Product Title</div>
                    <div class="product-card-price text">$200.99</div>
                </div>
                <button class="product-card-button text">Add to Cart</button>
            </div>
        </div>
        <div class="product-card">
            <div class="product-card-image">
                <img src="https://picsum.photos/270/230" alt="product">
            </div>
            <div class="product-card-content">
                <div class="card-text">
                    <div class="product-card-title text">Product Title</div>
                    <div class="product-card-price text">$200.99</div>
                </div>
                <button class="product-card-button text">Add to Cart</button>
            </div>
        </div>
        <div class="product-card">
            <div class="product-card-image">
                <img src="https://picsum.photos/270/230" alt="product">
            </div>
            <div class="product-card-content">
                <div class="card-text">
                    <div class="product-card-title text">Product Title</div>
                    <div class="product-card-price text">$200.99</div>
                </div>
                <button class="product-card-button text">Add to Cart</button>
            </div>
        </div>
        <div class="product-card">
            <div class="product-card-image">
                <img src="https://picsum.photos/270/230" alt="product">
            </div>
            <div class="product-card-content">
                <div class="card-text">
                    <div class="product-card-title text">Product Title</div>
                    <div class="product-card-price text">$200.99</div>
                </div>
                <button class="product-card-button text">Add to Cart</button>
            </div>
        </div>
        <div class="product-card">
            <div class="product-card-image">
                <img src="https://picsum.photos/270/230" alt="product">
            </div>
            <div class="product-card-content">
                <div class="card-text">
                    <div class="product-card-title text">Product Title</div>
                    <div class="product-card-price text">$200.99</div>
                </div>
                <button class="product-card-button text">Add to Cart</button>
            </div>
        </div>
        <div class="product-card">
            <div class="product-card-image">
                <img src="https://picsum.photos/270/230" alt="product">
            </div>
            <div class="product-card-content">
                <div class="card-text">
                    <div class="product-card-title text">Product Title</div>
                    <div class="product-card-price text">$200.99</div>
                </div>
                <button class="product-card-button text">Add to Cart</button>
            </div>
        </div>
        <div class="product-card">
            <div class="product-card-image">
                <img src="https://picsum.photos/270/230" alt="product">
            </div>
            <div class="product-card-content">
                <div class="card-text">
                    <div class="product-card-title text">Product Title</div>
                    <div class="product-card-price text">$200.99</div>
                </div>
                <button class="product-card-button text">Add to Cart</button>
            </div>
        </div>
        <div class="product-card">
            <div class="product-card-image">
                <img src="https://picsum.photos/270/230" alt="product">
            </div>
            <div class="product-card-content">
                <div class="card-text">
                    <div class="product-card-title text">Product Title</div>
                    <div class="product-card-price text">$200.99</div>
                </div>
                <button class="product-card-button text">Add to Cart</button>
            </div>
        </div>
        <div class="product-card">
            <div class="product-card-image">
                <img src="https://picsum.photos/270/230" alt="product">
            </div>
            <div class="product-card-content">
                <div class="card-text">
                    <div class="product-card-title text">Product Title</div>
                    <div class="product-card-price text">$200.99</div>
                </div>
                <button class="product-card-button text">Add to Cart</button>
            </div>
        </div>
        <div class="product-card">
            <div class="product-card-image">
                <img src="https://picsum.photos/270/230" alt="product">
            </div>
            <div class="product-card-content">
                <div class="card-text">
                    <div class="product-card-title text">Product Title</div>
                    <div class="product-card-price text">$200.99</div>
                </div>
                <button class="product-card-button text">Add to Cart</button>
            </div>
        </div>
        <div class="product-card">
            <div class="product-card-image">
                <img src="https://picsum.photos/270/230" alt="product">
            </div>
            <div class="product-card-content">
                <div class="card-text">
                    <div class="product-card-title text">Product Title</div>
                    <div class="product-card-price text">$200.99</div>
                </div>
                <button class="product-card-button text">Add to Cart</button>
            </div>
        </div>
        <div class="product-card">
            <div class="product-card-image">
                <img src="https://picsum.photos/270/230" alt="product">
            </div>
            <div class="product-card-content">
                <div class="card-text">
                    <div class="product-card-title text">Product Title</div>
                    <div class="product-card-price text">$200.99</div>
                </div>
                <button class="product-card-button text">Add to Cart</button>
            </div>
        </div>
    </main>
</div>
<?php
include "Layout/footer.php";
?>