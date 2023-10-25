<?php
include "Layout/header.php";
?>
<main class="main-content unset-margin form-container">
    <h1 class="main-title">Register</h1>
    <form action="./Handle/Handle_Register.php" method="post">
        <div class="form-input-wrapper">
            <div class="form-field">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" <?php if(isset($_SESSION["password_missmatch"])){
                    echo "value=\"" . $_SESSION["email"] . "\"";}
                ?> required>
            </div>
            <div class="form-field">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" <?php if(isset($_SESSION["password_missmatch"])){
                    echo"value=\"" . $_SESSION["password"] . "\"";
                    unset($_SESSION["password_missmatch"]);
                    unset($_SESSION["email"]);
                    unset($_SESSION["password"]);
                }
                ?> required>
            </div>
            <div class="form-field">
                <label for="confirm-password">Confirm Password</label>
                <input type="password" id="confirm-password" name="confirm-password" required>
            </div>
            <div class="form-field">
                <label for="phone">Phone</label>
                <input type="text" id="phone" name="phone" required>
            </div>
        </div>
        <button class="form-submit-button" type="submit">Register</button>
    </form>
    <span class="message">
        Already have an account? <a href="login.php">Log in here</a>.
    </span>
</main>
<?php
include "Layout/footer.php";
?>