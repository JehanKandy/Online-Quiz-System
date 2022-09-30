<link rel="stylesheet" href="../../css/dashboard.css">
<?php include("../layouts/header.php"); ?>
<?php include("../layouts/nav_loged.php"); ?>

<?php 
    if(empty($_SESSION['LoginSession'])){
        header("location:../views/login.php");
    }
?>

<div class="container">
    <div class="all-td-question">
        <?php std_question_back_btn(); ?>

        <div class="title">Pending Questions</div>
        <table class="all-question-std-tbl">
            <thead>
                <tr>
                    <th>Queston From</th>
                    <th>Ask Date</th>
                    <th>Question</th>
                    <th>Reply By</th>
                    <th>Reply Date</th>
                    <th>View Question</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <?php all_std_question(); ?>
            </tbody>
        </table>
        <hr>
        <div class="title">Answered Questions</div>
        <table class="all-question-std-tbl">
            <thead>
                <tr>
                    <th>Queston From</th>
                    <th>Ask Date</th>
                    <th>Question</th>
                    <th>Reply By</th>
                    <th>Reply Date</th>
                    <th>Answer</th>
                    <th>View Question</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <?php answer_for_question(); ?>
            </tbody>
        </table>
    </div>
</div>

<?php include("../layouts/footer.php"); ?>
