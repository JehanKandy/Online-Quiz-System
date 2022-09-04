<?php 
    include("config.php");
    use FTP\Connection;
    session_start();

    function reg_std($username,$email,$password){
        $con = Connection();

        $check_user = "SELECT * FROM user_tbl WHERE username = '$username' && email = '$email' && roll = 'student'";
        $check_user_result = mysqli_query($con, $check_user);
        $check_user_nor = mysqli_num_rows($check_user_result);
        
        if($check_user_nor > 0){
            return "<span style='color:red;'>User Already Exists</span>";
        }else{
            $user_insert = "INSERT INTO user_tbl(username,email,pass1,roll,user_status,join_date)VALUES('$username','$email','$password','student','1',NOW())";
            $user_insert_result = mysqli_query($con,$user_insert);
            header("location:../views/login.php");
        }
    }
?>
