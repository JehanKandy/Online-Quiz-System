<?php 
    include("config.php");
    use FTP\Connection;
    session_start();

    function reg_user($username,$email,$password){
        $con = Connection();

        $check_user = "SELECT * FROM user_tbl WHERE username = '$username' && email = '$email'";
        $check_user_result = mysqli_query($con, $check_user);
        $check_user_nor = mysqli_num_rows($check_user_result);
        
        if(){
            
        }
    }
?>
