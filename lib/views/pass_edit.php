<link rel="stylesheet" href="../../css/style.css">
<?php include("../layouts/header.php"); ?>
<?php include("../layouts/nav_login.php"); ?>

<div class="pass-new-edit">
    <div class="title">
        Change Your Password
    </div>
    <form action="<?php echo($_SERVER['PHP_SELF'])?>" method="POST">
        <span class="form-topic">Email Address : </span><br>
        <input type="email" name="email" id="passnewemail" class="new-pass-input">
        

    </form>
</div>

<?php include("../layouts/footer.php"); ?>
