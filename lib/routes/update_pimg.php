<link rel="stylesheet" href="../../css/dashboard.css">
<?php include("../layouts/header.php"); ?>
<?php 
    include("../function/function.php");

    if(empty($_SESSION['LoginSession'])){
        header("location:../views/login.php");
    }
?>
<h2 style="padding: 20px;">Update Profile Image</h2>

<?php 
    if(isset($_POST['update_pimg'])){
        $result = update_img($_POST['login_id'], $_FILES['file']['name']);
        echo $result;
    }
?>

<?php update_to_view_img(); ?>

<?php include("../layouts/footer.php"); ?>
