<div class="toast-notification">
    <?php if(isset($_SESSION['error_message'])){
        echo "<p>" . $_SESSION['error_message'] . "</p>";
        unset($_SESSION['error_message']);
    }?>
</div>