<?php include("../layouts/header.php"); ?>
<?php include("../layouts/nav_loged.php"); ?>
<?php 
	if(empty($_SESSION['LoginSession'])){
		header("location:../views/login.php");
	}
?>
<div class="container">
    <div class="all-comment-user">
        All Comments
    </div>
</div>
<?php include("../layouts/footer.php"); ?>
