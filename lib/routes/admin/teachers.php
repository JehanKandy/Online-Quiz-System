<link rel="stylesheet" href="../../../css/dashboard.css">
<link rel="stylesheet" href="../../../css/style.css">
<?php include "../../layouts/header.php";?>
<?php include "../../layouts/nav_loged_user.php";?>



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
			<a href="../admin.php" class="menu-item"><i class="fas fa-tachometer-alt"></i>Dashboard</a>
			<a href="students.php" class="menu-item"><i class="fas fa-user-graduate"></i>Students</a>
			<a href="teachers.php" class="menu-item"><i class="fas fa-chalkboard-teacher"></i>Teachers &nbsp; <span class="pending">15</span></a>
			<a href="staff.php" class="menu-item"><i class="fas fa-question-circle"></i>Quizzes</a>
			<a href="vehicles.php" class="menu-item"><i class="fas fa-user-tie"></i>Admin</a>
			<a href="my_account_admin.php" class="menu-item"><i class="fas fa-user-cog"></i>Account Settings</a>
		</nav>
	</aside>

	<main class="content">
		<h1>Teacher Management</h1>
		<hr>
		<div class="admin-content">
			<div class="grid">
				<div class="admin-item1">
					<div class="admin-title">
						<i class="fas fa-chalkboard-teacher"></i> &nbsp;  Teacher<br>
					</div>
					<hr class="std-hr">
					<div class="admin-body">
						15
					</div>
				</div>
				<div class="admin-item2">
					<div class="admin-title">
						<i class="fas fa-user-clock"></i> &nbsp;  Pending Teachers<br>
					</div>
					<hr class="tea-hr">
					<div class="admin-body">
						15
					</div>
				</div>
				</div>
			</div>
			<div class="last-title">All Teachers</div>
			<div class="tbl-scorll">
				<table class="student-tbl">
					<thead>
						<tr>
							<th>Email</th>
							<th>Username</th>
							<td>Mobile</td>
							<td>Country</td>
							<th>Status</th>
							<th>Infor</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>jehna@123</td>
							<td>Jehankandy</td>
							<td>+94 711758851</td>
							<td>Sri Lanka</td>
							<td><span class="active">Active</span></td>
							<td><button class="infor-btn">Infor</button></td>
						</tr>
						<tr>
							<td>jehna@123</td>
							<td>Jehankandy</td>
							<td>+94 711758851</td>
							<td>Sri Lanka</td>
							<td><span class="active">Active</span></td>
							<td><button class="infor-btn">Infor</button></td>
						</tr>
						<tr>
							<td>jehna@123</td>
							<td>Jehankandy</td>
							<td>+94 711758851</td>
							<td>Sri Lanka</td>
							<td><span class="deactive">Dective</span></td>
							<td><button class="infor-btn">Infor</button></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</main>
</div>

<script src="../../../js/script.js"></script>
