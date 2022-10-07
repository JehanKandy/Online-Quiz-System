<link rel="stylesheet" href="../../css/dashboard.css">
<link rel="stylesheet" href="../../css/style.css">
<?php include "../layouts/header.php";?>
<?php include "../layouts/nav_loged.php";?>

<?php 
	if(empty($_SESSION['LoginSession'])){
		header("location:../views/login.php");
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
			<?php profile_img();?>
			<p class="profile-name"><?php user_id_loged();?></p>
			<a href="teacher.php" class="menu-item"><i class="fas fa-tachometer-alt"></i>Dashboard</a>
			<a href="teacher/tea_students.php" class="menu-item"><i class="fas fa-user-graduate"></i>Students</a>
			<a href="teacher/quizzes.php" class="menu-item"><i class="fas fa-question-circle"></i>Quizzes</a>
			<a href="std_question.php" class="menu-item"><i class="far fa-comments"></i>Chats</a>
			<a href="teacher/my_account_teacher.php" class="menu-item"><i class="fas fa-user-cog"></i>Account Settings</a>
		</nav>
	</aside>

	<main class="content">
		<h1>Welcome, To Teacher Dashboard</h1>
		<hr>
		<div class="admin-content">
			<div class="grid">
				<div class="admin-item1">
					<div class="admin-title">
						<i class="fas fa-user-graduate"></i> &nbsp;  Students<br>
					</div>
					<hr class="std-hr">
					<div class="admin-body">
						15
					</div>
				</div>
				<div class="admin-item2">
					<div class="admin-title">
						<i class="fas fa-chalkboard-teacher"></i> &nbsp;  Teachers<br>
					</div>
					<hr class="tea-hr">
					<div class="admin-body">
						15
					</div>
				</div>
				<div class="admin-item3">
					<div class="admin-title">
						<i class="fas fa-plus"></i> &nbsp;  Added Quizzes<br>
					</div>
					<hr class="admin-hr">
					<div class="admin-body">
						15
					</div>
				</div>
				<div class="admin-item4">
					<div class="admin-title">
						<i class="fas fa-question-circle"></i> &nbsp;  Quizzes<br>
					</div>
					<hr class="qui-hr">
					<div class="admin-body">
						15
					</div>
				</div>
			</div>
			<div class="last-title">Last Access Users</div>
			<table class="lastuser-tbl">
				<thead>
					<tr>
						<th>Name</th>
						<th>Email</th>
						<th>Access Time</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Jehankandy</td>
						<td>jehan@123123123</td>
						<td>2022/05/22 10:13:45</td>
					</tr>
					<tr>
						<td>Jehankandy</td>
						<td>jehan@123123123</td>
						<td>2022/05/22 10:13:45</td>
					</tr>
					<tr>
						<td>Jehankandy</td>
						<td>jehan@123123123</td>
						<td>2022/05/22 10:13:45</td>
					</tr>
				</tbody>
			</table>
			<div class="admin-comment">
				<div class="title">User Comments</div>
				<div class="admin-comment-grid">
				<?php user_commnets(); ?>
				</div>
				<a href="more_comments.php"><button class="comment-add">More Comment</button></a>
			</div>
			<div class="admin-msg">
				<div class="title">Messages From Students</div>
				<div class="msg-grid">
					<div class="msg-item1">											
						<div class="msg-user">Kamal Perera</div>
						<div class="msg-roll">Student</div>
						<div class="msg-body">
							Lorem ipsum dolor, sit amet consectetur adipisicing elit. Omnis odit dolorem deserunt eveniet, dignissimos dicta eum nobis quaerat, maiores animi reprehenderit aliquid atque, amet itaque possimus est numquam vitae rerum?
						</div>
					</div>
					<div class="msg-item2">
						<div class="msg-user">Kamal Perera</div>
						<div class="msg-roll">Student</div>
						<div class="msg-body">
							Lorem ipsum dolor, sit amet consectetur adipisicing elit. Omnis odit dolorem deserunt eveniet, dignissimos dicta eum nobis quaerat, maiores animi reprehenderit aliquid atque, amet itaque possimus est numquam vitae rerum?
						</div>
					</div>
					<div class="msg-item3">
						<div class="msg-user">Kamal Perera</div>
						<div class="msg-roll">Student</div>
						<div class="msg-body">
							Lorem ipsum dolor, sit amet consectetur adipisicing elit. Omnis odit dolorem deserunt eveniet, dignissimos dicta eum nobis quaerat, maiores animi reprehenderit aliquid atque, amet itaque possimus est numquam vitae rerum?
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>
</div>

<script src="../../js/script.js"></script>
