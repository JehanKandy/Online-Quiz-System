<link rel="stylesheet" href="../../css/dashboard.css">
<?php include("../layouts/header.php"); ?>
<?php include("../function/function.php"); ?>

<?php 
    if(empty($_SESSION['LoginSession'])){
        header("location:../views/login.php");
    }
?>

<?php 
    if(isset($_POST['get_otp'])){
        $result = get_email_opt($_POST['check_email']);
        echo $result;
    }
?>

<div class="container">
    <div class="pass-reset-content">
        <h3 style="padding-bottom: 20px;">Reset Password</h3>

        <?php pass_check_email(); ?>

        <p style="color: red;">the OTP send to the above email address</p>
    </div>
</div>

<?php include("../layouts/footer.php"); ?>
