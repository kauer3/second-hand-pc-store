<?php
include "Layout/header.php";
?>
<main class="main-content unset-margin form-container">
    <h1 class="main-title">Register</h1>
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
            <div class="form-field">
                <label for="confirm-password">Confirm Password</label>
                <input type="password" id="confirm-password" name="confirm-password">
            </div>
            <div class="form-field">
                <label for="phone">Phone</label>
                <input type="text" id="phone" name="phone">
            </div>
        </div>
        <button type="submit">Register</button>
    </form>
    <span class="message">
        Already have an account? <a href="login.php">Log in here</a>.
    </span>
</main>
<?php
include "Layout/footer.php";
?>