<?php include("../layouts/header.php"); ?>
<?php include("../layouts/nav_loged.php"); ?>
<?php 
	if(empty($_SESSION['LoginSession'])){
		header("location:../views/login.php");
	}
?>
<div class="container">
    <div class="all-comment">
        <div class="title">
            All Comments
        </div>
        <a href="index.php"><button class="bck-comment-btn">Back to Home</button></a>
        <div class="body">
            <div class='comment-grid'>
                <?php all_comments(); ?>
            </div>
        </div>
    </div>
</div>

<?php include("../layouts/footer.php"); ?>