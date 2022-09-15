<link rel="stylesheet" href="../../css/dashboard.css">
<link rel="stylesheet" href="../../css/style.css">
<?php include "../layouts/header.php";?>
<?php include "../layouts/nav_loged.php";?>




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
			<a href="admin.php" class="menu-item"><i class="fas fa-tachometer-alt"></i>Dashboard</a>
			<a href="admin/users.php" class="menu-item"><i class="fas fa-user-graduate"></i>Students</a>
			<a href="admin/admins.php" class="menu-item"><i class="fas fa-chalkboard-teacher"></i>Teachers &nbsp; <span class="pending">15</span></a>
			<a href="admin/staff.php" class="menu-item"><i class="fas fa-question-circle"></i>Quizzes</a>
			<a href="admin/vehicles.php" class="menu-item"><i class="fas fa-user-tie"></i>Admin</a>
			<a href="admin/my_account_admin.php" class="menu-item"><i class="fas fa-user-cog"></i>Account Settings</a>
		</nav>

	</aside>

	<main class="content">
		<h1>Welcome, To Admin Dashboard</h1>
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
						<i class="fas fa-user-tie"></i> &nbsp;  Admins<br>
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
					<th>Name</th>
					<th>Email</th>
					<th>Access Time</th>
				</thead>
			</table>
		</div>
	</main>
</div>

<script src="../../js/script.js"></script>
