<link rel="stylesheet" href="../../css/style.css">
<?php include("../layouts/header.php"); ?>
<?php include("../layouts/nav_login.php"); ?>

<div class="container">
    <div class="pass-reset-email">
        <div class="title">
            Password Reset
        </div>
        <form action="<?php echo($SERVER['PHP_SELF'])?>" method="POST">    
            Email :<br>
            <input type="email" name="pass_email" id="passemail" class="pass-reset" placeholder="Email"><br>
            <input type="submit" value="Get OTP" name="get_otp" class="otp-btn">
        </form>
    </div>
</div>

<?php include("../layouts/footer.php"); ?>
