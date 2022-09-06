<?php include("../layouts/header.php"); ?>
<?php include("../layouts/nav_login.php"); ?>
<link rel="stylesheet" href="../../css/style.css">

<div class="login-content">
    <div class="title">
        <i class="fas fa-user-alt"></i> Login Here
    </div>
    <div class="body">
        <hr>
        <?php 
            include("../function/function.php");
            if(isset($_POST['login'])){
                $result = user_login($_POST['username'], )
            }
        ?>
        <form action="<?php echo($_SERVER['PHP_SELF']); ?>" method="POST" name="loginform" onsubmit="return validateform()">
            <table border="0">
                <tr>
                    <td>Username : </td>
                </tr>
                <tr>
                    <td>
                        <input type="text" name="username" id="username" class="login-input" placeholder="Username"><span id="usererrormsg"></span>
                    </td>
                </tr>
                <tr>
                    <td>Password : </td>
                </tr>
                <tr>
                    <td>
                        <input type="password" name="password" id="password" class="login-input" placeholder="Password"><span id="passerrormsg"></span>
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
        <hr>
            <a href="pass_reset.php">Forget Password ?</a><br>
            Student SignUp ? <a href="reg_std.php">Student</a><br>
            Teacher SignUp ? <a href="reg_teacher.php">Teacher</a><br>

    </div>
</div>

<?php include("../layouts/footer.php"); ?>
<script src="../../js/script.js"></script>
