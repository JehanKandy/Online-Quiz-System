<link rel="stylesheet" href="../../css/style.css">
<?php include("../layouts/header.php"); ?>
<?php include("../layouts/nav_login.php"); ?>
<?php include("../function/function.php"); ?>

<div class="container">
    <div class="verify-otp">
        <div class="title">
            Verify OTP
        </div>
        <form action="<?php echo($_SERVER['PHP_SELF'])?>">
            <span class="otp-num">Enter OTP : </span><br>
            <input type="number" name="otp_num" id="otpid" placeholder="OTP" class="otp-input"><br>

            <input type="submit" value="Verify OTP" name="otp_verify" class="verify-btn">
        </form>
    </div>
</div>
<?php include("../layouts/footer.php"); ?>
