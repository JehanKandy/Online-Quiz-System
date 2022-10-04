<link rel="stylesheet" href="css/style.css">
<?php include "lib/layouts/header.php";?>
<?php include "lib/layouts/nav.php";?>
<?php include "lib/function/function.php"; ?>

<div class="home-img"></div>
<div class="home-title">
    Quizzes are in following Topics
</div>
<div class="home-grid">
    <div class="grid-item1">In Environment</div>
    <div class="grid-item2">In Automobile </div>
    <div class="grid-item3">In Maths</div>
    <div class="grid-item4">In Robotics</div>
    <div class="grid-item5">In Sports</div>
    <div class="grid-item6">In Pollution </div>
    <div class="grid-item7">In IQ</div>
    <div class="grid-item8">In IT</div>
</div>
<div class="comment">
    <div class="title">
        Comments from users
    </div>
    <div class="body">
        <div class='comment-grid'>
            <?php user_commnets(); ?>
        </div>
        <center>
            <a href="all_commnet.php"><button class="all-commnet-btn">See All Comments</button></a>
        </center>
    </div>
</div>
<div class="partner">
    <div class="title">PARTNERSHIP</div>
    <div class="partner-grid">
        <div class="p-item1"></div>
        <div class="p-item2"></div>
        <div class="p-item3"></div>
        <div class="p-item4"></div>
        <div class="p-item5"></div>
        <div class="p-item6"></div>
    </div>
</div>

<script src="js/script.js"></script>
<?php include "lib/layouts/home_footer.php";?>
