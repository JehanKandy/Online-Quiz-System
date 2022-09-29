<link rel="stylesheet" href="../../css/dashboard.css">
<?php include("../layouts/header.php"); ?>
<?php include("../function/function.php"); ?>

<div class="container">
    <div class="view-question">
        <div class="title">
            Question
        </div>
        <div class="body">
            <?php get_question_to_answer(); ?>
        </div>
    </div>
</div>

<?php include("../layouts/footer.php"); ?>
