<?php
    include "Layout/header.php";
?>
<main class="main-content unset-margin form-container">
    <h1 class="main-title">Login</h1>
    <form action="./Handle/Handle_Login.php" method="post">
        <div class="form-input-wrapper">
            <div class="form-field">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" <?php if(isset($_SESSION["login_error"]))
                {
                    echo "value=\"" . $_SESSION["email"] . "\"";
                    unset($_SESSION["login_error"]);
                    unset($_SESSION["email"]);
                }
                ?>>
            </div>
            <div class="form-field">
                <label for="password">Password</label>
                <input type="password" id="password" name="password">
            </div>
        </div>
        <button class="form-submit-button" type="submit">Login</button>
    </form>
    <span class="message">
        Still don't have an account? <a href="register.php">Create a new one here</a>.
    </span>
</main>
<?php
    include "Layout/footer.php";
?>