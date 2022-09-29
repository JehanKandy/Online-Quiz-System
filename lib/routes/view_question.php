<link rel="stylesheet" href="../../css/dashboard.css">
<?php include("../layouts/header.php"); ?>
<?php include("../function/function.php"); ?>

<div class="container">
    <div class="view-question">
        <div class="title">
            Question
        </div>
        <div class="body">
            <?php 
                if(isset($_POST['answer_std'])){
                    $result = get_answer($_POST[''])
                }            
            ?>
            <div class="std-question">
                <?php get_question_to_answer(); ?>
                <hr>                
                <?php reply_asnwer(); ?>
            </div>
        </div>
    </div>

</div>

<?php include("../layouts/footer.php"); ?>
