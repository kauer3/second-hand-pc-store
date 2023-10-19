<?php
include "Layout/header.php";
?>
<div class="banner"></div>
<div class="filter-container">
    <div class="filter">
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
            <div class="filter-item-content-item">
                <label class="text" for="MinPrice">Min Price</label>
                <input type="range" name="MinPrice" id="MinPrice">
                <span class="price text">$200.99</span>
            </div>
            <div class="filter-item-content-item">
                <label class="text" for="MaxPrice">Max Price</label>
                <input type="range" name="MaxPrice" id="MaxPrice">
                <span class="price text">$2000.99</span>
            </div>
        </div>
    </div>
</div>
</div>
<?php
include "Layout/footer.php";
?>