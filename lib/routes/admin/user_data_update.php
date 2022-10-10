<link rel="stylesheet" href="../../../css/dashboard.css">
<link rel="stylesheet" href="../../../css/style.css">
<?php include("../../layouts/header.php"); ?>
<?php include("../../layouts/nav_loged_user.php"); ?>

<?php 
	if(empty($_SESSION['LoginSession'])){
		header("location:../../views/login.php");
	}
?>
<div class="container">
	<div class="data-update-user">
		<div class="title">
			Update Information
		</div>
		<div class="body">
			hi all
		</div>
	</div>
</div>

<?php include("../../layouts/footer.php"); ?>
