const urlParams = new URLSearchParams(window.location.search);
let maxPrice;
let minPrice;
let maxPriceIndicator;
let minPriceIndicator;

document.addEventListener("DOMContentLoaded", function () {
    maxPrice = document.getElementById("MaxPrice");
    minPrice = document.getElementById("MinPrice");
    minPriceIndicator = document.getElementById("MinPrice-indicator");
    maxPriceIndicator = document.getElementById("MaxPrice-indicator");
    if (urlParams.size) {
        const productsGrid = document.querySelector(".products-grid");
        productsGrid.scrollIntoView();
        for (const [key, value] of urlParams) {
            let input = document.getElementById(key);
            if (input.type == 'range') {
                let priceIndicator = key == "MaxPrice" ? maxPriceIndicator : minPriceIndicator;
                priceIndicator.innerText = `$${value}.00`;
                input.value = value;
            } else {
                input.checked = true;
            }
        }
    }
});

function updateURL(input) {
    if (input.type == 'range') {
        urlParams.set('MaxPrice', maxPrice.value);
        urlParams.set('MinPrice', minPrice.value);
    } else if (input.checked) {
        urlParams.set(input.id, true);
    } else {
        urlParams.delete(input.id);
    }
    window.location.search = urlParams;
};

function updatePriceIndicator(input) {
    if (input.id == 'MaxPrice') {
        checkOppositePriceRange(input.value, minPrice, minPriceIndicator)
        maxPriceIndicator.innerText = `$${input.value}.00`;
    } else {
        checkOppositePriceRange(input.value, maxPrice, maxPriceIndicator)
        minPriceIndicator.innerText = `$${input.value}.00`;
    }
};

function checkOppositePriceRange(newValue, oppositeInput, oppositePriceIndicator) {
    if (maxPrice.valueAsNumber < minPrice.valueAsNumber) {
        oppositeInput.value = newValue;
        oppositePriceIndicator.innerText = `$${newValue}.00`;
    }
};