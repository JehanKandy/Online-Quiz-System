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
        $result = 

    }
?>

<div class="container">
    <div class="pass-reset-content">
        <h3 style="padding-bottom: 20px;">Reset Password</h3>

        <?php pass_check_email(); ?>

        <p style="color: red;">the OTP send to the above email addree</p>
    </div>
</div>

<?php include("../layouts/footer.php"); ?>
