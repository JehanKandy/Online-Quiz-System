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
            }
            if($user_check_row['roll'] == 'teacher'){
                setcookie('login',$user_check_row['email'],time()+60*60,'/');
                $_SESSION['LoginSession'] = $user_check_row['email'];
                header("location:../routes/teacher.php");
            }
            if(isset($_SESSION['LoginSession'])){
                $session_time = "INSERT INTO log_time_tbl(username,time_login)VALUES('$username',NOW())";
                $session_time_result = mysqli_query($con, $session_time);                 
            }
        }         
        if($user_check_nor == 0){
            return "<span style='color:red;'>Recodes Not Found...!</span>";
        }
    }
    function user_id_loged(){
        $con = Connection();

        $email = strval($_SESSION['LoginSession']);

        $user_id_get = "SELECT * FROM user_tbl WHERE email = '$email'";
        $user_id_get_result = mysqli_query($con, $user_id_get);

        $user_id_row = mysqli_fetch_assoc($user_id_get_result);

        echo ($user_id_row['username']);
                
    }


    function profile_img(){
        $con = Connection();
        $email = strval($_SESSION['LoginSession']);

        $check_user_img = "SELECT * FROM user_tbl WHERE email = '$email' && user_status = '1'";
        $check_user_img_result = mysqli_query($con, $check_user_img);
        $check_user_img_row = mysqli_fetch_assoc($check_user_img_result);

        echo "
            <img src='../../upload/".$check_user_img_row['profile_img']."' alt='Profile Image' class='profile-img'>
        ";
    }
    
    
    function profile_img_user(){
        $con = Connection();
        $email = strval($_SESSION['LoginSession']);

        $check_user_img = "SELECT * FROM user_tbl WHERE email = '$email' && user_status = '1'";
        $check_user_img_result = mysqli_query($con, $check_user_img);
        $check_user_img_row = mysqli_fetch_assoc($check_user_img_result);

        echo "
            <img src='../../../upload/".$check_user_img_row['profile_img']."' alt='Profile Image' class='profile-img'>
        ";
    }
    function teacher_data(){
        $con = Connection();
        $user_email = strval($_SESSION['LoginSession']);

        $check_teacher = "SELECT * FROM user_tbl WHERE email = '$user_email'";
        $check_teacher_result = mysqli_query($con, $check_teacher);
        $teacher_row = mysqli_fetch_assoc($check_teacher_result);

        $teacher_profile_update = "
            <div class='teacher_data'>                
                <img src='../../../upload/".$teacher_row['profile_img']."' alt='Profile Image' class='profile-img-data'><br>
                <a href='../update_pimg.php?id=".$user_email."'><button class='pimg-update-btn'>Profile Image Update</button></a>
                    <table class='teacher_data'>
                        <tr>
                            <td>Username : </td>
                            <td><input type='text' name='update_username' class='proflie_update' value='".$teacher_row['username']."' disabled></td>
                        </tr>
                        <tr>
                            <td>First Name : </td>
                            <td><input type='fn' name='update_fn' class='proflie_update' value='".$teacher_row['fname']."' disabled></td>
                        </tr>
                        <tr>
                            <td>Last Name : </td>
                            <td><input type='ln' name='update_ln' class='proflie_update' value='".$teacher_row['lname']."' disabled></td>
                        </tr>
                        <tr>
                            <td>Email : </td>
                            <td><input type='email' name='update_email' class='proflie_update' value='".$teacher_row['email']."' disabled></td>
                        </tr>
                        <tr>
                            <td>Mobile Number : </td>
                            <td><input type='mobile' name='update_mobile' class='proflie_update' value='".$teacher_row['mobile_no']."' disabled></td>
                        </tr>
                        <tr>
                            <td style='vertical-align: top;'>Address</td>
                            <td><textarea class='address_user'disabled>".$teacher_row['address']."</textarea></td>
                        </tr>
                        <tr>
                            <td>City : </td>
                            <td><input type='mobile' name='update_mobile' class='proflie_update' value='".$teacher_row['city']."' disabled></td>
                        </tr>
                        <tr>
                            <td>Country : </td>
                            <td><input type='mobile' name='update_mobile' class='proflie_update' value='".$teacher_row['country']."' disabled></td>
                        </tr>
                        <tr>
                            <td>User Roll : </td>
                            <td><input type='mobile' name='update_mobile' class='proflie_update' value='".$teacher_row['roll']."' disabled></td>
                        </tr>
                        <tr>
                            <td>User Status : </td>";
                        if($teacher_row['user_status'] == 1){
                            $teacher_profile_update .= "<td><span class='active'>Active</span></td>";
                        }
                        elseif($teacher_row['user_status'] == 0){
                            $teacher_profile_update .= "<td><span class='deactive'>Deactive</span></td>";
                        }
                        
                $teacher_profile_update .="
                        </tr>
                        <tr>
                            <td><a href='../reset_pass.php'><button class='pass-reset-btn'>Password Reset</button></td>
                            <td><a href='../update_account.php?id=".$user_email."'><button class='account-update-btn'>Edit</button></td>
                        </tr>    
                </table>
                   
               </div>
        ";

        echo $teacher_profile_update;

    }
    function admin_data(){
        $con = Connection();
        $user_email = strval($_SESSION['LoginSession']);

        $check_admin= "SELECT * FROM user_tbl WHERE email = '$user_email'";
        $check_admin_result = mysqli_query($con, $check_admin);
        $admin_row = mysqli_fetch_assoc($check_admin_result);

        $admin_profile_update = "
            <div class='teacher_data'>                
                <img src='../../../upload/".$admin_row['profile_img']."' alt='Profile Image' class='profile-img-data'><br>
                <a href='update_pimg.php?id=".$user_email."'><button class='pimg-update-btn'>Profile Image Update</button></a>
                    <table class='teacher_data'>
                        <tr>
                            <td>Username : </td>
                            <td><input type='text' name='update_username' class='proflie_update' value='".$admin_row['username']."' disabled></td>
                        </tr>
                        <tr>
                            <td>First Name : </td>
                            <td><input type='fn' name='update_fn' class='proflie_update' value='".$admin_row['fname']."' disabled></td>
                        </tr>
                        <tr>
                            <td>Last Name : </td>
                            <td><input type='ln' name='update_ln' class='proflie_update' value='".$admin_row['lname']."' disabled></td>
                        </tr>
                        <tr>
                            <td>Email : </td>
                            <td><input type='email' name='update_email' class='proflie_update' value='".$admin_row['email']."' disabled></td>
                        </tr>
                        <tr>
                            <td>Mobile Number : </td>
                            <td><input type='mobile' name='update_mobile' class='proflie_update' value='".$admin_row['mobile_no']."' disabled></td>
                        </tr>
                        <tr>
                            <td style='vertical-align: top;'>Address</td>
                            <td><textarea class='address_user'disabled>".$admin_row['address']."</textarea></td>
                        </tr>
                        <tr>
                            <td>City : </td>
                            <td><input type='mobile' name='update_mobile' class='proflie_update' value='".$admin_row['city']."' disabled></td>
                        </tr>
                        <tr>
                            <td>Country : </td>
                            <td><input type='mobile' name='update_mobile' class='proflie_update' value='".$admin_row['country']."' disabled></td>
                        </tr>
                        <tr>
                            <td>User Roll : </td>
                            <td><input type='mobile' name='update_mobile' class='proflie_update' value='".$admin_row['roll']."' disabled></td>
                        </tr>
                        <tr>
                            <td>User Status : </td>";
                        if($admin_row['user_status'] == 1){
                            $admin_profile_update .= "<td><span class='active'>Active</span></td>";
                        }
                        elseif($admin_row['user_status'] == 0){
                            $admin_profile_update .= "<td><span class='deactive'>Deactive</span></td>";
                        }
                        
                $admin_profile_update .="
                        </tr>
                        <tr>
                            <td><a href='../reset_pass.php'><button class='pass-reset-btn'>Password Reset</button></td>
                            <td><a href='../update_account.php?id=".$user_email."'><button class='account-update-btn'>Edit</button></td>
                        </tr>    
                </table>
                   
               </div>
        ";

        echo $admin_profile_update;
    }

    function account_update(){
        $con = Connection();

        $user_email = $_GET['id'];

        $get_user_data = "SELECT * FROM user_tbl WHERE email = '$user_email'";
        $get_user_data_result = mysqli_query($con, $get_user_data);
        $user_data_row = mysqli_fetch_assoc($get_user_data_result);

        $user_update_data = "
            <div class='update-user-data'>
            <img src='../../upload/".$user_data_row['profile_img']."' alt='Profile Image' class='profile-img-data'>
            <table>
                <form action='' method='POST'>
                        <tr>
                            <td>Username </td>
                            <td><input type='text' name='update_username' value='".$user_data_row['username']."' class='proflie_update'>
                                <input type='hidden' name='user_id' value='".$user_email."'>
                            </td>

                        </tr>
                        <tr>
                            <td>First Name </td>
                            <td><input type='text' name='update_fn' value='".$user_data_row['fname']."' class='proflie_update'></td>
                        </tr>
                        <tr>
                            <td>Last Name </td>
                            <td><input type='text' name='update_ln' value='".$user_data_row['lname']."' class='proflie_update'></td>
                        </tr>
                        <tr>
                            <td>Email </td>
                            <td><input type='email' name='update_email' value='".$user_data_row['email']."' class='proflie_update' disabled></td>
                        </tr>
                        <tr>
                            <td>Mobile Number </td>
                            <td><input type='text' name='update_mobile' value='".$user_data_row['mobile_no']."' class='proflie_update'></td>
                        </tr>
                        <tr>
                            <td style='vertical-align: top;'>Address</td>
                            <td><textarea class='address_user' name='update_address'>".$user_data_row['address']."</textarea></td>
                        </tr>
                        <tr>
                            <td>City : </td>
                            <td><input type='mobile' name='update_city'  value='".$user_data_row['city']."'  class='proflie_update'></td>
                        </tr>
                        <tr>
                            <td>Country : </td>
                            <td><input type='mobile' name='update_country'  value='".$user_data_row['country']."'  class='proflie_update'></td>
                        </tr>
                        <tr>
                            <td>User Roll : </td>
                            <td><input type='mobile' value='".$user_data_row['roll']."'  class='proflie_update' disabled></td>
                        </tr>
                        <tr>
                            <td colspan='2'><input type='submit' name='update_user_data' class='update-user-data-btn' value='Update'></td>
                        </tr>                    
                </form>
                <tr>
                ";


            if($user_data_row['roll'] == 'admin'){
                $user_update_data .= "<td colspan='2'><a href='admin/my_account_admin.php'><button class='update-acc-back-btn'>Bcak</button></a></td>";
            }elseif($user_data_row['roll'] == 'teacher'){
                $user_update_data .= "<td colspan='2'><a href='teacher/my_account_teacher.php'><button class='update-acc-back-btn'>Bcak</button></a></td>";
            }

            $user_update_data .= "
            </tr>
            </table>            
            </div>
        ";

        echo $user_update_data;
               
    }

    function update_data_user($user_id,$username,$fn,$ln,$mobile_no,$user_address,$city,$country){
        $con = Connection();

        $data_update = "UPDATE user_tbl SET username ='$username', fname = '$fn', lname = '$ln', mobile_no = '$mobile_no', address = '$user_address', city='$city', country = '$country' WHERE  email = '$user_id'";
        $data_update_result = mysqli_query($con, $data_update);

        if($data_update_result){
            header("location:../views/logout.php");

            $update_tbl = "INSERT INTO acc_update_tbl(email,update_date)VALUES('$user_id',NOW())";
            $update_tbl_result = mysqli_query($con, $update_tbl);

            $to = $user_id;
            $subject = "Update Account in E-Quize";
            $txt = "Your Updated Data in The System";
            $headers = "From: jehankandy@gmail.com";

            mail($to,$subject,$txt,$headers);
        }
    }
    function update_to_view_img(){
        $con = Connection();

        $user_email = strval($_SESSION['LoginSession']);

        $update_pimg = "SELECT * FROM user_tbl WHERE email = '$user_email'";
        $update_pimg_result = mysqli_query($con,$update_pimg);
        $update_pimg_row = mysqli_fetch_assoc($update_pimg_result);

        $update_pimg_data = "
            <div class='profile-img-update'>
                <img src='../../upload/".$update_pimg_row['profile_img']."' alt='Profile Image' class='profile-img-data'><br>

                <form action=''>
                    <input type='file' name='p_img' accept='image/*'>

                </form>
            </div>
        ";

        echo $update_pimg_data;
    }
?>
