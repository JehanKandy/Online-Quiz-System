<?php include("../../layouts/header.php"); ?>
<?php include("../../layouts/nav_loged_user.php"); ?>
<?php 
	if(empty($_SESSION['LoginSession'])){
		header("location:../../views/login.php");
	}
?>



<?php include("../../layouts/footer.php"); ?>
