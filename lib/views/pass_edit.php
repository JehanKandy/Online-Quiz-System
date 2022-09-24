<link rel="stylesheet" href="../../css/style.css">
<?php include("../layouts/header.php"); ?>
<?php include("../layouts/nav_login.php"); ?>
<?php include("../function/function.php"); ?>

<div class="container">
    <div class="pass-new-edit">
        <div class="title">
            Change Your Password
        </div>

        <?php 
            if(isset($_POST['reset_new_pass'])) {
                $result = new_pass($_POST['email'], md5($_POST['new_pass']));
                echo $result;
            }  
        ?>

        <form action="<?php echo($_SERVER['PHP_SELF'])?>" method="POST" name="new_pass_edit" onsubmit="return passnew()">
            <span class="form-topic">Email Address : </span><br>
            <input type="email" name="email" id="passnewemail" class="new-pass-input" placeholder="Email"><br>
            <span id="emailerror"></span><br>
            
            <span class="form-topic">New Password : </span><br>
            <input type="password" name="new_pass" id="newpass" class="new-pass-input" placeholder="New Password"><br>
            <span id="npasserror"></span><br>

            <span class="form-topic">Confirm New Password : </span><br>
            <input type="password" name="new_cpass" id="newcpass" class="new-pass-input" placeholder="Confirm New Password"><br>
            <span id="cnpasserror"></span><br>

            <input type="submit" value="Reset Password" name="reset_new_pass" class="new-pass-btn">
        </form>
    </div>
</div>

<?php include("../layouts/footer.php"); ?>
<script src="../../js/script.js"></script>
