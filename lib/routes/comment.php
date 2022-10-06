<link rel="stylesheet" href="../../css/dashboard.css">
<?php include("../layouts/header.php"); ?>
<?php include("../layouts/nav_loged.php"); ?>
<?php 
	if(empty($_SESSION['LoginSession'])){
		header("location:../views/login.php");
	}
?>

<div class="container">
    <div class="user-comment">
        <div class="title">
            Post a Comment
        </div>
        <?php 
            if(isset($_POST['post_comment'])){
                $result = add_comment_to_tbl($_POST['user_comment'], $_POST['email_comment'], $_POST['roll_comment'], $_POST['comment_msg_add']);
            }
        ?>
        <div class="body">
            <?php user_commnet_add(); ?>          
        </div>
    </div>
</div>

<?php include("../layouts/footer.php"); ?>
