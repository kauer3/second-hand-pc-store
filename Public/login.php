<?php
    include "Layout/header.php";
?>
<main class="main-content unset-margin form-container">
    <h1 class="main-title">Login</h1>
    <form action="submit">
        <div class="form-input-wrapper">
            <div class="form-field">
                <label for="email">Email</label>
                <input type="text" id="email" name="email">
            </div>
            <div class="form-field">
                <label for="password">Password</label>
                <input type="password" id="password" name="password">
            </div>
        </div>
        <button type="submit">Login</button>
    </form>
    <span class="message">
        Still don't have an account? <a href="register.php">Create a new one here</a>.
    </span>
</main>
<?php
    include "Layout/footer.php";
?>