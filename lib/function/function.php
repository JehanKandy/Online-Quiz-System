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
            return "<span style='color:red;'>Teacher Already Exists</span>";
        }else{
            $user_insert = "INSERT INTO user_tbl(username,email,pass1,roll,user_status,join_date,is_pending)VALUES('$username','$email','$password','student','1',NOW(),'0')";
            $user_insert_result = mysqli_query($con,$user_insert);
            header("location:../views/login.php");
        }
    }

    function reg_teacher($username,$email,$password){
        $con = Connection();

        $check_user = "SELECT * FROM user_tbl WHERE username = '$username' && email = '$email' && roll = 'teacher'";
        $check_user_result = mysqli_query($con, $check_user);
        $check_user_nor = mysqli_num_rows($check_user_result);
        
        $_SESSION['teacherID'] = $username;
        if($check_user_nor > 0){
            return "<span style='color:red;'>Teacher Already Exists</span>";
        }else{
            $user_insert = "INSERT INTO user_tbl(username,email,pass1,roll,user_status,join_date,is_pending)VALUES('$username','$email','$password','teacher','0',NOW(),'1')";
            $user_insert_result = mysqli_query($con,$user_insert);
            header("location:../views/teacher_wait.php");
        }
    }

    function user_id(){
        $con = Connection();
        $userid = strval($_SESSION['teacherID']);
        echo $userid;
    }

    function user_login($username, $password){
        $con = Connection();
    
        $user_check = "SELECT * FROM user_tbl WHERE username = '$username' && pass1 = '$password' && user_status = '1' && is_pending = '0'";
        $user_check_result = mysqli_query($con, $user_check);
        $user_check_nor = mysqli_num_rows($user_check_result);
        $user_check_row = mysqli_fetch_assoc($user_check_result);

        if($user_check_nor > 0){
            if($user_check_row['roll'] == 'admin'){
                setcookie('login',$user_check_row['email'],time()+60*60,'/');
                $_SESSION['LoginSession'] = $user_check_row['email'];
                header("location:../routes/admin.php");

                if(isset($_SESSION['LoginSession'])){
                    $session_start = time();
                    
                }
            }
        }else{
            return "<span style='color:red;'>Recodes Not Found...!</span>";
        }
    }

    
?>
