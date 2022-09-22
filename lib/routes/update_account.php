<link rel="stylesheet" href="../../css/dashboard.css">
<?php include("../layouts/header.php"); ?>
<?php include("../function/function.php"); ?>

<?php account_update(); ?>

<?php 
    if(isset($_POST['update_user_data'])){
        $result = update_data_user($_FILES['image']['name'], $_POST['user_id'], $_POST['update_username'])
    }

?>

<?php include("../layouts/footer.php"); ?>
