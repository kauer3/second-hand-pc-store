<?php
include "Layout/header.php";
?>
<div class="banner"></div>
<div class="main-section">
    <div class="filter-container">
        <form class="filter">
            <div class="filter-title text">Filter by:</div>
            <div class="filter-item">
                <div class="filter-item-content-item">
                    <label class="text" for="CPU">CPU</label>
                    <input type="checkbox" name="CPU" id="CPU">
                </div>
                <div class="filter-item-content-item">
                    <label class="text" for="GPU">GPU</label>
                    <input type="checkbox" name="GPU" id="GPU">
                </div>
                <div class="filter-item-content-item">
                    <label class="text" for="Motherboard">Motherboard</label>
                    <input type="checkbox" name="Motherboard" id="Motherboard">
                </div>
                <div class="filter-item-content-item">
                    <label class="text" for="RAM">RAM</label>
                    <input type="checkbox" name="RAM" id="RAM">
                </div>
                <div class="filter-item-content-item">
                    <label class="text" for="Dell">Dell</label>
                    <input type="checkbox" name="Dell" id="Dell">
                </div>
                <div class="filter-item-content-item">
                    <label class="text" for="Acer">Acer</label>
                    <input type="checkbox" name="Acer" id="Acer">
                </div>
                <div class="filter-item-content-item">
                    <label class="text" for="Intel">Intel</label>
                    <input type="checkbox" name="Intel" id="Intel">
                </div>
                <div class="filter-item-content-item">
                    <label class="text" for="AMD">AMD</label>
                    <input type="checkbox" name="AMD" id="AMD">
                </div>
                <div class="filter-item-content-item">
                    <label class="text" for="Nvidia">Nvidia</label>
                    <input type="checkbox" name="Nvidia" id="Nvidia">
                </div>
            </div>
            <div class="filter-item">
                <div class="filter-item-content-item-grid">
                    <label class="text" for="MinPrice">Min Price</label>
                    <input type="range" name="MinPrice" id="MinPrice" min="0" max="2000">
                    <span class="price text">$200.99</span>
                </div>
                <div class="filter-item-content-item-grid">
                    <label class="text" for="MaxPrice">Max Price</label>
                    <input type="range" name="MaxPrice" id="MaxPrice" min="30" max="2000">
                    <span class="price text">$2000.99</span>
                </div>
            </div>
        </form>
    </div>
    <main class="products-grid">
        <div class="product-card" onclick="document.location.href='product.php'">
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