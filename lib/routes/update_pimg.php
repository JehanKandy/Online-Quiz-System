<link rel="stylesheet" href="../../css/dashboard.css">
<?php include("../layouts/header.php"); ?>
<?php 
    include("../function/function.php");

    if(empty($_SESSION['LoginSession'])){
        header("../views/login.php");
    }
?>


<?php include("../layouts/footer.php"); ?>
