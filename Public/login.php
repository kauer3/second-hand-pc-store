<?php
    include "Layout/header.php";
    if(isset($_SESSION["login_error"])) {
        include "./Layout/toast.php";
    }
    if(isset($_SESSION["user"])){header('Location: ./index.php');}
?>
<div class="center-content">
    <main class="main-content unset-margin form-container">
        <h1 class="main-title">Login</h1>
        <form action="./Handle/Handle_Login.php" method="post">
            <div class="form-input-wrapper">
                <div class="form-field">
                    <label for="email">Email</label>
                    <input required type="email" id="email" name="email" <?php if(isset($_SESSION["login_error"]))
                    {
                        echo "value=\"" . $_SESSION["email"] . "\"";
                        unset($_SESSION["login_error"]);
                        unset($_SESSION["email"]);
                    }
                    ?>>
                </div>
                <div class="form-field">
                    <label for="password">Password</label>
                    <input required type="password" id="password" name="password">
                </div>
            </div>
            <button class="form-submit-button" type="submit">Login</button>
        </form>
        <span class="message">
            Still don't have an account? <a href="register.php">Create a new one here</a>.
        </span>
    </main>
</div>
<?php
    include "Layout/footer.php";
?>