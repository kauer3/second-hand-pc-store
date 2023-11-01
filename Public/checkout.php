<?php
include "Layout/header.php";
?>
<div class="center-content">
    <main class="main-content unset-margin form-container">
        <h1 class="main-title">Checkout</h1>
        <form action="./Handle/Handle_Checkout.php" method="post">
            <h3 class="subtitle">Shipping</h3>
            <div class="form-input-wrapper form-grid">
                <div class="form-field">
                    <label for="first-name">First Name</label>
                    <input type="text" id="first-name" name="first-name" <?php if(isset($user)){echo "value=\"" . $user->firstname . "\"";}?> required>
                </div>
                <div class="form-field">
                    <label for="last-name">Last Name</label>
                    <input type="text" id="last-name" name="last-name" <?php if(isset($user)){echo "value=\"" . $user->lastname . "\"";}?> required>
                </div>
                <div class="form-field">
                    <label for="address">Address</label>
                    <input type="address" id="address" name="address" <?php if(isset($user)){echo "value=\"" . $user->address . "\"";}?> required>
                </div>
                <div class="form-field">
                    <label for="city">City</label>
                    <input type="text" id="city" name="city" <?php if(isset($user)){echo "value=\"" . $user->city . "\"";}?> required>
                </div>
                <div class="form-field">
                    <label for="zip">Zip Code</label>
                    <input type="text" id="zip" name="zip"<?php if(isset($user)){echo "value=\"" . $user->zipcode . "\"";}?> required>
                </div>
                <div class="form-field">
                    <label for="country">Country</label>
                    <input type="text" id="country" name="country" <?php if(isset($user)){echo "value=\"" . $user->country . "\"";}?> required>
                </div>
                <div class="form-field">
                    <label for="phone">Phone</label>
                    <input type="text" id="phone" name="phone" <?php if(isset($user)){echo "value=\"" . $user->phone . "\"";}?> required>
                </div>
            </div>
            <div class="checkbox-and-form-wrapper">
                <label for="billing-address">Use as billing address</label>
                <input type="checkbox" id="billing-address" name="billing-address">
                <h3 class="subtitle expandable">Billing</h3>
                <div class="form-input-wrapper form-grid expandable">
                    <div class="form-field">
                        <label for="first-name">First Name</label>
                        <input type="text" id="first-name" name="first-name" required>
                    </div>
                    <div class="form-field">
                        <label for="last-name">Last Name</label>
                        <input type="text" id="last-name" name="last-name" required>
                    </div>
                    <div class="form-field">
                        <label for="address">Address</label>
                        <input type="address" id="address" name="address" required>
                    </div>
                    <div class="form-field">
                        <label for="city">City</label>
                        <input type="text" id="city" name="city" required>
                    </div>
                    <div class="form-field">
                        <label for="zip">Zip Code</label>
                        <input type="text" id="zip" name="zip" required>
                    </div>
                    <div class="form-field">
                        <label for="country">Country</label>
                        <input type="text" id="country" name="country" required>
                    </div>
                    <div class="form-field">
                        <label for="phone">Phone</label>
                        <input type="text" id="phone" name="phone" required>
                    </div>
                </div>
            </div>
            <h3 class="subtitle payment">Payment</h3>
            <button class="checkout-submit-button" type="submit">Place Order</button>
        </form>
    </main>
</div>
<?php
include "Layout/footer.php";
?>