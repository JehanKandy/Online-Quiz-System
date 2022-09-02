<?php include("../layouts/header.php"); ?>
<?php include("../layouts/nav_login.php"); ?>

<div class="login-content">
    <div class="title">
        <i class="fas fa-user-alt"></i> Login Here
    </div>
    <div class="body">
        <form action="<?php echo($_SERVER['PHP_SELF']); ?>" method="POST">
            <table border="0">
                <tr>
                    <td>Username : </td>
                </tr>
                <tr>
                    <td>
                        <input type="text" name="username" id="username" class="login-input">
                    </td>
                </tr>
                <tr>
                    <td>Password : </td>
                </tr>
                <tr>
                    <td>
                        <input type="password" name="password" id="password" class="login-input">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" value="Login" name="login" class="login-btn">
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>

<?php include("../layouts/footer.php"); ?>
