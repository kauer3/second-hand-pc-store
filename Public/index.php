<?php
include "Layout/header.php";
?>
<div class="banner"></div>
<div class="filter-container">
    <div class="filter">
        <div class="filter-title">Filter by:</div>
        <div class="filter-item">
            <div class="filter-item-title">Brand</div>
            <div class="filter-item-content">
                <div class="filter-item-content-item">
                    <label for="CPU">CPU</label>
                    <input type="checkbox" name="CPU" id="CPU">
                </div>
                <div class="filter-item-content-item">
                    <label for="GPU">GPU</label>
                    <input type="checkbox" name="GPU" id="GPU">
                </div>
                <div class="filter-item-content-item">
                    <label for="Motherboard">Motherboard</label>
                    <input type="checkbox" name="Motherboard" id="Motherboard">
                </div>
                <div class="filter-item-content-item">
                    <label for="RAM">RAM</label>
                    <input type="checkbox" name="RAM" id="RAM">
                </div>
                <div class="filter-item-content-item">
                    <label for="Dell">Dell</label>
                    <input type="checkbox" name="Dell" id="Dell">
                </div>
                <div class="filter-item-content-item">
                    <label for="Acer">Acer</label>
                    <input type="checkbox" name="Acer" id="Acer">
                </div>
                <div class="filter-item-content-item">
                    <label for="Intel">Intel</label>
                    <input type="checkbox" name="Intel" id="Intel">
                </div>
                <div class="filter-item-content-item">
                    <label for="AMD">AMD</label>
                    <input type="checkbox" name="AMD" id="AMD">
                </div>
                <div class="filter-item-content-item">
                    <label for="Nvidia">Nvidia</label>
                    <input type="checkbox" name="Nvidia" id="Nvidia">
                </div>
                <div class="filter-item-content-item">
                    <label for="MinPrice">Min Price</label>
                    <input type="range" name="MinPrice" id="MinPrice">
                </div>
                <div class="filter-item-content-item">
                    <label for="MaxPrice">Max Price</label>
                    <input type="range" name="MaxPrice" id="MaxPrice">
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include "Layout/footer.php";
?>