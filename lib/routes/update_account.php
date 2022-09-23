<link rel="stylesheet" href="../../css/dashboard.css">
<?php include("../layouts/header.php"); ?>
<?php include("../function/function.php"); ?>

<?php 
    if(empty($_SESSION['LoginSession'])){
        header("location:../views/login.php");
    }
?>

<?php 
    if(isset($_POST['update_user_data'])){
        $result = update_data_user($_POST['user_id'], $_POST['update_username'], $_POST['update_fn'], $_POST['update_ln'], $_POST['update_mobile'], $_POST['update_address'], $_POST['update_city'], $_POST['update_country']);
        echo $result;
    }

    
?>

<div class="container">
    <p style="color: red;">
    Now you are Going to update Your Information <br>
    After Update Login Again
    </p>
</div>

<?php account_update(); ?>


<?php include("../layouts/footer.php"); ?>
