<?php include "lib/layouts/header.php"; ?>
<?php include "lib/layouts/nav_login.php"; ?>
<?php include "lib/function/function.php"; ?>

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


<?php include "lib/layouts/home_footer.php"; ?>
<script src="js/script.js"></script>
