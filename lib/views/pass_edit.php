<link rel="stylesheet" href="../../css/style.css">
<?php include("../layouts/header.php"); ?>
<?php include("../layouts/nav_login.php"); ?>

<div class="pass-new-edit">
    <div class="title">
        Change Your Password
    </div>
    <form action="<?php echo($_SERVER['PHP_SELF'])?>" method="POST">
        <span class="form-topic">Email Address : </span><br>
        <input type="email" name="email" id="passnewemail" class="new-pass-input" placeholder="Email"><br>
        <span id="emailerror"></span>
        
        <span class="form-topic">New Password : </span><br>
        <input type="password" name="new_pass" id="newpass" class="new-pass-input" placeholder="New Password"><br>
        <span id="npasserror"></span>

        <span class="form-topic">Confirm New Password : </span><br>
        <input type="password" name="new_cpass" id="newcpass" class="new-pass-input"><br>
        <span id="cnpasserror"></span>
    </form>
</div>

<?php include("../layouts/footer.php"); ?>
