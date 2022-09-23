<link rel="stylesheet" href="../../css/style.css">
<?php include("../layouts/header.php"); ?>
<?php include("../layouts/nav_login.php"); ?>
<?php include("../function/function.php"); ?>

<div class="verify-otp">
    <div class="title">
        Verify OTP
    </div>
    <form action="<?php echo($_SERVER['PHP_SELF'])?>">
        <span class="otp-num">Enter OTP : </span>
        <input type="number" name="otp_num" id="otpid" placeholder="OTP">

        <input type="submit" value="Verify OTP" name="otp_verify" class="verify-btn">
    </form>
</div>

<?php include("../layouts/footer.php"); ?>
