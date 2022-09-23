<link rel="stylesheet" href="../../css/dashboard.css">
<?php include("../layouts/header.php"); ?>
<?php include("../function/function.php"); ?>

<?php 
    if(empty($_SESSION['LoginSession'])){
        header("location:../views/login.php");
    }
?>

<div class="container">
    <div class="pass-reset-content">
        <h3 style="padding-bottom: 20px;">Reset Password</h3>

        <?php pass_check_email(); ?>
    </div>
</div>

<?php include("../layouts/footer.php"); ?>
