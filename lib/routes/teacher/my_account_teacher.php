<link rel="stylesheet" href="../../../css/dashboard.css">
<link rel="stylesheet" href="../../../css/style.css">
<?php include "../../layouts/header.php";?>
<?php include "../../layouts/nav_loged_user.php";?>

<?php 
	if(empty($_SESSION['LoginSession'])){
		header("location:../../views/login.php");
	}
?>

<div class="app">
	<div class="menu-toggle">
		<div class="hamburger">
			<span></span>
		</div>
	</div>

	<aside class="sidebar">
		<nav class="menu">
			<?php profile_img_user();?>
			<p class="profile-name"><?php user_id_loged();?></p>
			<a href="../teacher.php" class="menu-item"><i class="fas fa-tachometer-alt"></i>Dashboard</a>
			<a href="tea_students.php" class="menu-item"><i class="fas fa-user-graduate"></i>Students</a>
			<a href="quizzes.php" class="menu-item"><i class="fas fa-question-circle"></i>Quizzes</a>
			<a href="my_account_teacher.php" class="menu-item"><i class="fas fa-user-cog"></i>Account Settings</a>
		</nav>

	</aside>

	<main class="content">
		<h1>My Information</h1>
		<hr>
		<?php teacher_data(); ?>
		<?php 
			if(isset($_POST['update-img'])){
				
			}
		
		?>
		<hr>


	</main>
</div>

<script src="../../../js/script.js"></script>
