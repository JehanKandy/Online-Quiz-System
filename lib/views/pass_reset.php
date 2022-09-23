<link rel="stylesheet" href="../../css/style.css">
<?php include("../layouts/header.php"); ?>
<?php include("../layouts/nav_login.php"); ?>

<div class="container">
    <div class="pass-reset-email">
        <div class="title">
            Password Reset
            <hr>
        </div>
        <?php 
            if(isset($_POST['get_otp'])){
                $result = check_email($_POST['pass_email']);
                echo $result; 
            }
        ?>
        <form action="<?php echo($_SERVER['PHP_SELF']); ?>" method="POST">    
            <span class="form-topics">Email :</span><br>
            <input type="email" name="pass_email" id="passemail" class="pass-reset" placeholder="Email"><br>
            <input type="submit" value="Get OTP" name="get_otp" class="otp-btn">
        </form>

        <p style="color: red;">This OTP send to the above you given email Address</p>
    </div>
</div>

<?php include("../layouts/footer.php"); ?>
