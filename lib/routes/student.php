<link rel="stylesheet" href="../../css/dashboard.css">
<?php include "../layouts/header.php";?>
<?php include "../layouts/nav_loged.php";?>

<?php 
    if(empty($_SESSION['LoginSession'])){
        header("location:../views/login.php");
    }
?>

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
                <?php user_commnets(); ?>
				</div>
                <a href="comment.php"><button class="comment-add">Add a Comment</button></a>
	</div>
    <div class="admin-msg">
	    <div class="title">Questions and Answers</div>
		<div class="std-msg-grid">
            <div class="type-answer">											
				<div class="std-body">
                    <?php 
                        if(isset($_POST['askQuseion'])){
                            $result = check_question($_POST['question']);
                            echo $result;
                        }
                    ?>
					<form action="<?php echo($_SERVER['PHP_SELF']); ?>" method="POST" name="typeAnser" onsubmit="return questionCheck();">
                        <textarea class="type-answer-input" name="question" id="question" placeholder="Ask Question"></textarea>
                        <span id="ansererr"></span><br>
                        <input type="submit" value="Ask Question" name="askQuseion" class="question-btn">                
                    </form>
				</div>
			</div>
            <div class="display-answer">											
				<div class="std-body">
                    <div class="title">Your Question</div>
                    <textarea class="type-answer-input" disabled><?php view_my_question(); ?></textarea>
				</div>
			</div>
        <div class="reply-form-title">
            Reply From : <?php reply_answer_std(); ?>
        </div>
	</div>
</div>
</div>
<?php include "../layouts/footer.php";?>
<script src="../../js/script.js"></script>
