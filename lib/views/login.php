<?php include("../layouts/header.php"); ?>
<?php include("../layouts/nav_login.php"); ?>
<link rel="stylesheet" href="../../css/style.css">

<div class="login-content">
    <div class="title">
        <i class="fas fa-user-alt"></i> Login Here
    </div>
    <div class="body">
        <hr>
        <form action="<?php echo($_SERVER['PHP_SELF']); ?>" method="POST" name="loginform" onsubmit="return validateform()">
            <table border="0">
                <tr>
                    <td>Username : </td>
                </tr>
                <tr>
                    <td>
                        <input type="text" name="username" id="username" class="login-input"><span id="usererrormsg"></span>
                    </td>
                </tr>
                <tr>
                    <td>Password : </td>
                </tr>
                <tr>
                    <td>
                        <input type="password" name="password" id="password" class="login-input"><span id="usererrormsg"></span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" value="Login" name="login" class="login-btn">
                    </td>
                </tr>
            </table>
        </form>
        <br>
            <a href="pass_reset.php">Forget Password ?</a><br>
            Don't have an Account ? <a href="reg.php">Sign Up</a>
    </div>
</div>

<?php include("../layouts/footer.php"); ?>
<script src="../../js/script.js"></script>
