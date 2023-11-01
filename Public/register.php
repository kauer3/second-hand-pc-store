<?php
    include "Layout/header.php";
    if(isset($_SESSION["register_error"])) {
        include "./Layout/toast.php";
    }
    if(isset($_SESSION["user"])){header('Location: ./index.php');}
?>
<div class="center-content">
    <main class="main-content unset-margin form-container">
        <h1 class="main-title">Register</h1>
        <form action="./Handle/Handle_Register.php" method="post">
            <div class="form-input-wrapper register-form-grid">
                <div class="form-field">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" <?php if(isset($_SESSION["register_error"])){
                        echo "value=\"" . $_SESSION["email"] . "\"";}
                    ?> required>
                </div>
                <div class="form-field">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" <?php if(isset($_SESSION["register_error"])){
                        echo"value=\"" . $_SESSION["password"] . "\"";
                    }
                    ?> required>
                </div>
                <div class="form-field">
                    <label for="confirm-password">Confirm Password</label>
                    <input type="password" id="confirm-password" name="confirm-password" required>
                </div>
                <div class="form-field">
                    <label for="phone">Phone</label>
                    <input type="text" id="phone" name="phone">
                </div>
                <div class="form-field">
                    <label for="first-name">First Name</label>
                    <input type="text" id="first-name" name="first-name" <?php if(isset($_SESSION["register_error"])){
                        echo"value=\"" . $_SESSION["firstname"] . "\"";
                    }
                    ?> required>
                </div>
                <div class="form-field">
                    <label for="last-name">Last Name</label>
                    <input type="text" id="last-name" name="last-name" <?php if(isset($_SESSION["register_error"])){
                        echo"value=\"" . $_SESSION["lastname"] . "\"";
                    }
                    ?> required>
                </div>
                <div class="form-field">
                    <label for="address">Address</label>
                    <input type="address" id="address" name="address" <?php if(isset($_SESSION["register_error"])){
                        echo"value=\"" . $_SESSION["address"] . "\"";
                    }
                    ?>>
                </div>
                <div class="form-field">
                    <label for="city">City</label>
                    <input type="text" id="city" name="city" <?php if(isset($_SESSION["register_error"])){
                        echo"value=\"" . $_SESSION["city"] . "\"";
                    }
                    ?>>
                </div>
                <div class="form-field">
                    <label for="zip">Zip Code</label>
                    <input type="text" id="zip" name="zip" <?php if(isset($_SESSION["register_error"])){
                        echo"value=\"" . $_SESSION["zip"] . "\"";
                    }
                    ?>>
                </div>
                <div class="form-field">
                    <label for="country">Country</label>
                    <input type="text" id="country" name="country" <?php if(isset($_SESSION["register_error"])){
                        echo"value=\"" . $_SESSION["country"] . "\"";
                    }
                    ?>>
                </div>
                <div class="form-field">
                    <label for="phone">Phone</label>
                    <input type="text" id="phone" name="phone" <?php if(isset($_SESSION["register_error"])){
                        echo"value=\"" . $_SESSION["phone"] . "\"";
                        unset($_SESSION["email"]);
                        unset($_SESSION["password"]);
                        unset($_SESSION["firstname"]);
                        unset($_SESSION["lastname"]);
                        unset($_SESSION["address"]);
                        unset($_SESSION["city"]);
                        unset($_SESSION["zip"]);
                        unset($_SESSION["country"]);
                        unset($_SESSION["phone"]);
                        unset($_SESSION["register_error"]);
                    }
                    ?> required>
                </div>
            </div>
            <button class="form-submit-button" type="submit">Register</button>
        </form>
        <span class="message">
            Already have an account? <a href="login.php">Log in here</a>.
        </span>
    </main>
</div>
<?php
include "Layout/footer.php";
?>