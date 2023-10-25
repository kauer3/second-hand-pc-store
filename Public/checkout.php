<?php
include "Layout/header.php";
?>
<div class="center-content">
    <main class="main-content unset-margin form-container">
        <h1 class="main-title">Checkout</h1>
        <form action="submit">
            <h3 class="subtitle">Shipping</h3>
            <div class="form-input-wrapper form-grid">
                <div class="form-field">
                    <label for="first-name">First Name</label>
                    <input type="text" id="first-name" name="first-name">
                </div>
                <div class="form-field">
                    <label for="last-name">Last Name</label>
                    <input type="text" id="last-name" name="last-name">
                </div>
                <div class="form-field">
                    <label for="address">Address</label>
                    <input type="address" id="address" name="address">
                </div>
                <div class="form-field">
                    <label for="city">City</label>
                    <input type="text" id="city" name="city">
                </div>
                <div class="form-field">
                    <label for="zip">Zip Code</label>
                    <input type="text" id="zip" name="zip">
                </div>
                <div class="form-field">
                    <label for="country">Country</label>
                    <input type="text" id="country" name="country">
                </div>
                <div class="form-field">
                    <label for="phone">Phone</label>
                    <input type="text" id="phone" name="phone">
                </div>
            </div>
            <div class="checkbox-and-form-wrapper">
                <label for="billing-address">Use as billing address</label>
                <input type="checkbox" id="billing-address" name="billing-address">
                <h3 class="subtitle expandable">Billing</h3>
                <div class="form-input-wrapper form-grid expandable">
                    <div class="form-field">
                        <label for="first-name">First Name</label>
                        <input type="text" id="first-name" name="first-name">
                    </div>
                    <div class="form-field">
                        <label for="last-name">Last Name</label>
                        <input type="text" id="last-name" name="last-name">
                    </div>
                    <div class="form-field">
                        <label for="address">Address</label>
                        <input type="address" id="address" name="address">
                    </div>
                    <div class="form-field">
                        <label for="city">City</label>
                        <input type="text" id="city" name="city">
                    </div>
                    <div class="form-field">
                        <label for="zip">Zip Code</label>
                        <input type="text" id="zip" name="zip">
                    </div>
                    <div class="form-field">
                        <label for="country">Country</label>
                        <input type="text" id="country" name="country">
                    </div>
                    <div class="form-field">
                        <label for="phone">Phone</label>
                        <input type="text" id="phone" name="phone">
                    </div>
                </div>
            </div>
            <h3 class="subtitle payment">Payment</h3>
            <button class="checkout-submit-button" type="submit">PayPal</button>
        </form>
    </main>
</div>
<?php
include "Layout/footer.php";
?>