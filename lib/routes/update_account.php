<link rel="stylesheet" href="../../css/dashboard.css">
<?php include("../layouts/header.php"); ?>
<?php include("../function/function.php"); ?>

<?php account_update(); ?>

<?php 
    if(isset($_POST['update_user_data'])){
        $result = update_data_user($_FILES['image']['name'], $_POST['user_id'], $_POST['update_username'], $_POST['update_fn'], $_POST['update_ln'], $_POST['update_mobile'], $_POST['update_address'], $_POST['update_city'], $_POST['update_country']);
        echo $result;
    }

?>

<?php include("../layouts/footer.php"); ?>
