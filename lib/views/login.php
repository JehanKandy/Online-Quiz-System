<?php include("../layouts/header.php"); ?>
<?php include("../layouts/nav_login.php"); ?>

<div class="login-content">
    <div class="title">
        <i class="fas fa-user-alt"></i> Login Here
    </div>
    <div class="body">
        <form action="<?php echo($_SERVER['PHP_SELF']); ?>" method="POST">
            <label for="username">Username : </label>
            <input type="text" name="username" id="username" class="login-input">

            <label for="password">Password : </label>
            <input type="password" name="password" id="password" class="login-input">

            <input type="submit" value="Login" name="login" class="login-btn">
        </form>
    </div>
</div>

<?php include("../layouts/footer.php"); ?>
