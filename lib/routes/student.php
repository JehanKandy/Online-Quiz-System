<link rel="stylesheet" href="../../css/dashboard.css">
<?php include "../layouts/header.php";?>
<?php include "../layouts/nav_loged.php";?>

<div class="container">
    <div class="student-panal">
        <div class="top-title">
            Student Panel
        </div>
        <div class="student-grid">
            <div class="student-item1">
                <div class="title">
                    All Quizzes
                </div>
                <div class="body">15</div>
            </div>
            <div class="student-item2">
                <div class="title">
                    All Quizzes
                </div>
                <div class="body">15</div>
            </div>
            <div class="student-item3">
                <div class="title">
                    All Quizzes
                </div>
                <div class="body">15</div>
            </div>
            <div class="student-item4">
                <div class="title">
                    All Quizzes
                </div>
                <div class="body">15</div>
            </div>
            <div class="student-item5">
                <div class="title">
                    All Quizzes
                </div>
                <div class="body">15</div>
            </div>
            <div class="student-item6">
                <div class="title">
                    Join Date
                </div>
                <div class="body"><?php join_date();?></div>
            </div>
        </div>
        <hr>
        <div class="my-data-std">
            <div class="std-title">
                My Information
            </div>
            <div class="std-body">
                <?php std_data(); ?>
            </div>
        </div>
    </div>
    <div class="admin-comment">
			<div class="title">User Comments</div>
				<div class="admin-comment-grid">
					<div class="comment1">
						<div class="usern">JehanKandy</div>
						<div class="user-roll">Admin</div>
						<div class="commet-body">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, quod cupiditate? Perspiciatis, voluptatibus necessitatibus eum impedit vitae aspernatur soluta optio, corporis, harum voluptates inventore amet minima provident. Eligendi, repellat officia.
						</div>
					</div>
					<div class="comment2">
						<div class="usern">JehanKandy</div>
						<div class="user-roll">Admin</div>
						<div class="commet-body">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, quod cupiditate? Perspiciatis, voluptatibus necessitatibus eum impedit vitae aspernatur soluta optio, corporis, harum voluptates inventore amet minima provident. Eligendi, repellat officia.
						</div>
					</div>
					<div class="comment3">
						<div class="usern">JehanKandy</div>
						<div class="user-roll">Admin</div>
						<div class="commet-body">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, quod cupiditate? Perspiciatis, voluptatibus necessitatibus eum impedit vitae aspernatur soluta optio, corporis, harum voluptates inventore amet minima provident. Eligendi, repellat officia.
						</div>
					</div>
				</div>
	</div>
    <div class="admin-msg">
	    <div class="title">Questions and Answers</div>
		<div class="std-msg-grid">
            <div class="type-answer">											
				<div class="std-body">
					<form action="<?php echo($_SERVER['PHP_SELF']); ?>" method="POST" name="typeAnser" onsubmit="return questionCheck();">
                        <textarea class="type-answer-input" name="question" id="question"></textarea>
                        <span id="ansererr"></span><br>
                        <input type="submit" value="Post Answer" name="askQuseion" class="question-btn">                
                    </form>
				</div>
			</div>
            <div class="display-answer">											
				<div class="std-body">
					Lorem ipsum dolor, sit amet consectetur adipisicing elit. Omnis odit dolorem deserunt eveniet, dignissimos dicta eum nobis quaerat, maiores animi reprehenderit aliquid atque, amet itaque possimus est numquam vitae rerum?
				</div>
			</div>
        <div class="reply-form-title">
            Reply From : Kamal
        </div>
        <div class="reply-anwser">
            <div class="std-user">Kamal Perera</div>
			<div class="std-roll">Student</div>
			<div class="std-msg-body">
				Lorem ipsum dolor, sit amet consectetur adipisicing elit. Omnis odit dolorem deserunt eveniet, dignissimos dicta eum nobis quaerat, maiores animi reprehenderit aliquid atque, amet itaque possimus est numquam vitae rerum?
			</div>            
        </div>
	</div>
</div>
<?php include "../layouts/footer.php";?>
<script src="../../js/script.js"></script>
