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
            return "<span style='color:red;'>Student Already Exists</span>";
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
            if($user_check_row['roll'] == 'student'){
                setcookie('login',$user_check_row['email'],time()+60*60,'/');
                $_SESSION['LoginSession'] = $user_check_row['email'];
                header("location:../routes/student.php");
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
                            <td colspan='2'><a href='../update_account.php?id=".$user_email."'><button class='account-update-btn'>Edit</button></a></td>
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
                <a href='../update_pimg.php?id=".$user_email."'><button class='pimg-update-btn'>Profile Image Update</button></a>
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
                            <td colspan='2'><a href='../update_account.php?id=".$user_email."'><button class='account-update-btn'>Edit</button></a></td>
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
            }elseif($user_data_row['roll'] == 'student'){
                $user_update_data .= "<td colspan='2'><a href='student.php'><button class='update-acc-back-btn'>Bcak</button></a></td>";
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

                <form action='' method='POST' enctype='multipart/form-data'>
                    <input type='file' name='file' accept='image/*'>
                    <input type='hidden' name='login_id' value='".$user_email."'><br>

                    <input type='submit' name='update_pimg' class='profileimg-update-btn' value='Update Profile Image' required>
                </form>";

                if($update_pimg_row['roll'] == 'admin'){
                    $update_pimg_data .="<a href='admin/my_account_admin.php'><button class='back-btn'>Back</button></a>";
                }elseif($update_pimg_row['roll'] == 'teacher'){
                    $update_pimg_data .="<a href='teacher/my_account_teacher.php'><button class='back-btn'>Back</button></a>";
                }elseif($update_pimg_row['roll'] == 'student'){
                    $update_pimg_data .="<a href='student.php'><button class='back-btn'>Back</button></a>";
                }

            $update_pimg_data .="
            </div>
        ";

        echo $update_pimg_data;
    }

    function update_img($image, $login_id){
        $con = Connection();
        $email = strval($_SESSION['LoginSession']);

        $image_dir = "../../upload/";
        
        $filename = basename($_FILES["file"]["name"]);
        $image_target_path = $image_dir . $filename;
        $filetype = pathinfo($image_target_path, PATHINFO_EXTENSION);

        $image_types = array('jpg','png','jpeg','gif','PNG');

        if(in_array($filetype, $image_types)){
            if(move_uploaded_file($_FILES["file"]["tmp_name"], $image_target_path)){
                $update_img = "UPDATE user_tbl SET profile_img = '$filename' WHERE email = '$email'";
                $update_img_result = mysqli_query($con, $update_img); 
            }
        }
    }

    function check_email($email){
        $con = Connection();

        $otp = rand(10000,99999);
        
        $check_email = "SELECT email FROM user_tbl WHERE email = '$email'";
        $check_email_result = mysqli_query($con, $check_email);
        $check_email_row = mysqli_fetch_assoc($check_email_result);
        $check_email_nor = mysqli_num_rows($check_email_result);

        if($check_email_nor > 0){
            $opt_insert = "INSERT INTO pwd_reset_tbl(email,otp)VALUES('$email','$otp')";
            $opt_insert_result = mysqli_query($con, $opt_insert);
    
            $_SESSION['emailSession'] = $email;

            $to = $email;
            $subject = "Password Reset";
            $txt = "Your Password Reset OTP is : ".$otp;
            $headers = "From: jehankandy@gmail.com";
    
            mail($to,$subject,$txt,$headers);
            
            header("location:verify_otp.php");
        }
        elseif($check_email_nor == 0){
            return "<p style=color:red;'>Email is not valid..!</p>";
        }
    }

    function pass_otp_verify($opt_num){
        $con = Connection();

        $email = strval($_SESSION['emailSession']);
        
        $check_otp = "SELECT * FROM pwd_reset_tbl WHERE email = '$email'";
        $check_otp_result = mysqli_query($con,$check_otp);
        $check_otp_row = mysqli_fetch_assoc($check_otp_result);
        $check_otp_nor = mysqli_num_rows($check_otp_result);

        if($check_otp_nor > 0){
            if($check_otp_row['otp'] == $opt_num){
                header("location:pass_edit.php");
            }
            elseif($check_otp_row['otp'] != $opt_num){
                return "<p style='color:red'>OTP is not Valid...!</p>";
            }
        }elseif($check_otp_nor == 0){
            return "<p style='color:red'>Recodes Not Found...!</p>";
        }
    }

    function new_pass($email,$pass){
        $con = Connection();

        $check_email = "SELECT * FROM user_tbl WHERE email = '$email'";
        $check_email_result = mysqli_query($con, $check_email);
        $check_email_row = mysqli_fetch_assoc($check_email_result);
        $check_email_nor = mysqli_num_rows($check_email_result);

        if($check_email_nor > 0){
            $update_pass = "UPDATE user_tbl SET pass1 = '$pass' WHERE email = '$email'";
            $update_pass_result = mysqli_query($con,$update_pass);

            $update_otp = "UPDATE pwd_reset_tbl SET otp = null WHERE email = '$email'";
            $update_otp_result = mysqli_query($con, $update_otp);

            header("location:login.php");
        }else{
            return "<p style='color:red';>Email Does Not Exist in System</p>";
        }

    }

    function std_data(){
        $con = Connection();
        $email = strval($_SESSION['LoginSession']);

        $std_data = "SELECT * FROM user_tbl WHERE email = '$email'";
        $std_data_result = mysqli_query($con, $std_data);
        $std_data_row = mysqli_fetch_assoc($std_data_result);
        $std_data_nor = mysqli_num_rows($std_data_result);


        $std_data_view = "
            <div class='std-data-grid'>
                <div class='std-data1'>
                    <img src='../../upload/".$std_data_row['profile_img']."' alt='Profile Image' class='profile-img-std'>
                </div>
                <div class='std-data2'>
                    <span class='std-data-topic'>Username : </span><br>
                    <input type='text' class='std-data-input' value='".$std_data_row['username']."' disabled><br>
                </div>
                <div class='std-data3'>
                    <span class='std-data-topic'>First Name : </span><br>
                    <input type='text' class='std-data-input' value='".$std_data_row['fname']."' disabled><br>
                </div>
                <div class='std-data4'>
                    <span class='std-data-topic'>Last Name : </span><br>
                    <input type='text' class='std-data-input' value='".$std_data_row['lname']."' disabled><br>
                </div>  
                <div class='std-data5'>
                    <span class='std-data-topic'>Email : </span><br>
                    <input type='text' class='std-data-input' value='".$std_data_row['email']."' disabled><br>
                </div>  
                <div class='std-data6'>
                    <span class='std-data-topic'>Mobile Number : </span><br>
                    <input type='text' class='std-data-input' value='".$std_data_row['mobile_no']."' disabled><br>
                </div>    
                <div class='std-data7'>
                    <span class='std-data-topic'>Address : </span><br>
                    <textarea class='std-data-address'disabled>".$std_data_row['address']."</textarea><br>
                </div>  
                <div class='std-data8'>
                    <span class='std-data-topic'>City : </span><br>
                    <input type='text' class='std-data-input' value='".$std_data_row['city']."' disabled><br>
                </div>  
                <div class='std-data9'>
                    <span class='std-data-topic'>Country : </span><br>
                    <input type='text' class='std-data-input' value='".$std_data_row['country']."' disabled><br>
                </div>          
            </div>
            <table style='width:100%;'>
                <tr>
                    <td><a href='update_pimg.php?id=".$email."'><button class='std-img-update-btn'>Update Profile Image</button></a></td>
                    <td><a href='update_account.php?id=".$email."'><button class='std-update-btn'>Update My Data</button></a>    </td>
                </tr>
            </table>
            
                
        ";

        echo $std_data_view;
    }

    function join_date(){
        $con = Connection();

        $email = strval($_SESSION['LoginSession']);

        $check_date = "SELECT * FROM user_tbl WHERE email = '$email'";
        $check_date_result = mysqli_query($con, $check_date);

        $check_date_row = mysqli_fetch_assoc($check_date_result);

        echo ($check_date_row['join_date']);
    }

    function check_question($question){
        $con = Connection();

        $email = strval($_SESSION['LoginSession']);

        $check_question_is_exists = "SELECT * FROM question_ask_std_tbl WHERE question ='$question' && ask_by_username ='$email'";
        $check_question_is_exists_result = mysqli_query($con, $check_question_is_exists);
        $check_question_is_exists_nor = mysqli_num_rows($check_question_is_exists_result);

        if($check_question_is_exists_nor > 0){
            return "<p style='color:red;'>You already Ask This question</p>";
                        
        }else{
            $question_add = "INSERT INTO question_ask_std_tbl(ask_by_username,ask_date_time,question,is_pending)VALUES('$email',NOW(),'$question',1)";
            $question_add_result = mysqli_query($con, $question_add);
        }

    }

    function view_my_question(){
        $con = Connection();

        $email = strval($_SESSION['LoginSession']);

        $get_question = "SELECT * FROM question_ask_std_tbl WHERE ask_by_username ='$email'";
        $get_question_result = mysqli_query($con, $get_question);
        $get_question_row = mysqli_fetch_assoc($get_question_result);
        $get_question_nor = mysqli_num_rows($get_question_result);

        if($get_question_nor > 0){
            echo $get_question_row['question'];
        }else{
            return false;
        }
    }

    function reply_answer_std(){
        $con = Connection();
        $email = strval($_SESSION['LoginSession']);

        $get_reply = "SELECT * FROM question_ask_std_tbl WHERE ask_by_username ='$email'";
        $get_reply_result = mysqli_query($con, $get_reply);
        $get_reply_row = mysqli_fetch_assoc($get_reply_result);
        $get_reply_nor = mysqli_num_rows($get_reply_result);

        if($get_reply_nor > 0){
            if(empty($get_reply_row['reply_by_username'])){
                echo "Reply is Pending";
            }else{
                echo $get_reply_row['reply_by_username'];
            }
        }else{
            return false;
        }
    }

    function std_question_back_btn(){
        $con = Connection();

        $email = strval($_SESSION['LoginSession']);

        $check_back_btn = "SELECT * FROM user_tbl WHERE email = '$email'";
        $check_back_btn_result = mysqli_query($con, $check_back_btn);
        $check_back_btn_row = mysqli_fetch_assoc($check_back_btn_result);

        if($check_back_btn_row['roll'] == 'admin'){
            echo "<div class='question-std-bck'><a href='admin.php'><button class='question-std-bck-btn'>Back</button></a></div>";
        }

    }

    function all_std_question(){
        $con = Connection();

        $all_qustion_std = "SELECT * FROM question_ask_std_tbl";
        $all_qustion_std_result = mysqli_query($con, $all_qustion_std);

        while($row = mysqli_fetch_assoc($all_qustion_std_result)){
            $std_question = "
                <tr>
                    <td>".$row['ask_by_username']."</td>
                    <td>".$row['ask_date_time']."</td>
                    <td>".$row['question']."</td>
                    <td>".$row['reply_by_username']."</td>";

                    if($row['reply_date_time'] == 0){
                        $std_question .="<td><span style='color:red;'>Answer is Pending..!</span></td>";
                    }else{
                        $std_question .="<td>".$row['reply_date_time']."</td>";
                    }

            $std_question .="
                    <td><a href='view_question.php?id=".$row['ask_by_username']."'><button class='view-std-question'>View</button></td>";

                    if($row['is_pending'] == 1){
                        $std_question .="<td><div class='panding-std-question'>Pending</div></td>";                        
                    }

            $std_question .="
                </tr>
            ";

            echo $std_question;
        }
        
    }

    function get_question_to_answer(){
        $con = Connection();

        $id = $_GET['id'];

        $id_session = $_SESSION['idSession'] = $id;

        $get_question = "SELECT * FROM question_ask_std_tbl WHERE ask_by_username= '$id'";
        $get_question_result = mysqli_query($con, $get_question);
        $get_question_row = mysqli_fetch_assoc($get_question_result);
        $get_question_nor = mysqli_num_rows($get_question_result);
        
        $question_session = $_SESSION['questionSession'] = $get_question_row['question'];
        if($get_question_nor > 0){
            $std_view = "
                <span>Question By : <input type='text' class='question-view_input' value='".$get_question_row['ask_by_username']."' disabled></span><br><br>
                <span>Question Date : <input type='text' class='question-view_input' value='".$get_question_row['ask_date_time']."' disabled></span>
            
                <br><br>
                Question :<br>
                <textarea class='view-question-input' disabled>".$get_question_row['question']."</textarea>
            ";

            echo $std_view;
        }else{
            return false;
        }
    }

    function reply_asnwer(){
        $con = Connection();

        $email = strval($_SESSION['LoginSession']);

        $reply_to_question = "
            <h3>Answer</h3>
            <form action='' method='POST' name='anserForm' onsubmit='return answerValidate();'>
                <textarea class='view-question-input' name='reply_answer' id='anserreply'></textarea>
                <span id='answererror'></span><br>
                <input type='submit' name='answer_std' value='Post Answer' class='answer-btn'>
            </form>";
        
        $bck_btn = "SELECT * FROM user_tbl WHERE email = '$email'";
        $bck_btn_result = mysqli_query($con, $bck_btn);
        $bck_btn_row = mysqli_fetch_assoc($bck_btn_result);

        if($bck_btn_row['roll'] == 'admin'){
            $reply_to_question .= "<a href='admin.php'><button class='answer-bck-btn'>Go Back</button></a>";
        }elseif($bck_btn_row['roll'] == 'teacher'){
            $reply_to_question .= "<a href='teacher.php'><button class='answer-bck-btn'>Go Back</button></a>";
        }
      
        echo $reply_to_question;
    }

    function get_answer($answer){
        $con = Connection();

        $email = strval($_SESSION['LoginSession']);
        $answer_by = strval($_SESSION['idSession']);
        $question_session = strval($_SESSION['questionSession']);
         
        $delete_question = "DELETE FROM question_ask_std_tbl WHERE ask_by_username = '$answer_by'";
        $delete_question_result = mysqli_query($con, $delete_question);


        $update_trigger_tbl = "UPDATE question_replyed_std_tbl SET reply_username = '$email', reply_time = NOW(), answer_for_question = '$answer', is_pending = '0' WHERE ask_username = '$answer_by' && question = '$question_session'";
        $update_trigger_tbl_result = mysqli_query($con, $update_trigger_tbl);

        $get_data = "SELECT * FROM question_replyed_std_tbl WHERE ask_username = '$answer_by'";
        $get_data_result = mysqli_query($con, $get_data);
        $fetch_data = mysqli_fetch_assoc($get_data_result);

        $answer_std = "Your Answer for Q: Question: ".$fetch_data['question']." A: and the Answer is: ".$fetch_data['answer_for_question'];

        $to = $fetch_data['ask_username'];
        $subject = "Answer Replyed";
        $txt = $answer_std;
        $headers = "From: jehankandy@gmail.com";

        mail($to,$subject,$txt,$headers);

        header("location:std_question.php");
    }

    function answer_for_question(){
        $con = Connection();
        
        $all_question_update = "SELECT * FROM question_replyed_std_tbl";
        $all_question_update_result = mysqli_query($con, $all_question_update);

        while($row = mysqli_fetch_assoc($all_question_update_result)){
            $std_asnwered_question = "
            <tr>
                <td>".$row['ask_username']."</td>
                <td>".$row['ask_time']."</td>
                <td>".$row['question']."</td>
                <td>".$row['reply_username']."</td>";

                if($row['reply_time'] == "0000-00-00 00:00:00"){
                    $std_asnwered_question .="<td><span style='color:red;'>Answer is Pending..!</span></td>";
                }else{
                    $std_asnwered_question .="<td>".$row['reply_time']."</td>";
                }

        $std_asnwered_question .="
                <td>".$row['answer_for_question']."</td>";

                if($row['is_pending'] == 0){
                    $std_asnwered_question .="<td><div class='answered-std-question'>Answered</div></td>";                        
                }

        $std_asnwered_question .="
            </tr>
        ";
        echo $std_asnwered_question;
        }
    }

    function user_commnets(){
        $con = Connection();
        
        $all_coment_user = "SELECT * FROM comment_tbl WHERE id ORDER BY id DESC LIMIT 3";
        $all_coment_user_result = mysqli_query($con, $all_coment_user);

        while($row = mysqli_fetch_assoc($all_coment_user_result)){
            $comment_msg = "
            
                <div class='comment1'>
                    <div class='usern'>".$row['comment_user']."</div>
                    <div class='user-roll'>".$row['roll']."</div>
                    <div class='comment-body'>
                        ".$row['comment_msg']."
                </div>                
            </div>
            ";

        echo $comment_msg;
        }
    }

    function all_comments(){
        $con = Connection();

        $all_comments_view = "SELECT * FROM comment_tbl";
        $all_comments_view_result = mysqli_query($con, $all_comments_view);
        
        while($row = mysqli_fetch_assoc($all_comments_view_result)){
            $all_comments = "
                        <div class='comment1'>
                        <div class='usern'>".$row['comment_user']."</div>
                        <div class='user-roll'>".$row['roll']."</div>
                        <div class='comment-body'>
                            ".$row['comment_msg']."
                    </div>                
                </div>
            ";

            echo $all_comments;
        }
    }

    function user_commnet_add(){
        $con = Connection();

        $email = strval($_SESSION['LoginSession']);
        $get_loged_user = "SELECT * FROM user_tbl WHERE email = '$email'";
        $get_loged_user_result = mysqli_query($con, $get_loged_user);
        $get_loged_user_row = mysqli_fetch_assoc($get_loged_user_result);
        
        $user_comment_here = "
            <form action='' method='POST' name='userComment' onsubmit='return commentVelidate()'>
                <div class='add-comment-grid'>
                    <div class='comment-item1'>
                        <span class='comment-input-title'>Username:</span><br>
                        <input type='text' class='comment-input' name='user_comment' value='".$get_loged_user_row['username']."' disabled>
                    </div> 
                    <div class='comment-item2'>
                        <span class='comment-input-title'>Email:</span><br>
                        <input type='text' class='comment-input' name='user_comment' value='".$get_loged_user_row['email']."' disabled>
                    </div>
                    <div class='comment-item3'>
                        <span class='comment-input-title'>Roll:</span><br>
                        <input type='text' class='comment-input' name='user_comment' value='".$get_loged_user_row['roll']."' disabled>
                    </div>
                    <div class='comment-item4'>
                        <span class='comment-input-title'>Comment:</span><br>
                        <textarea class='comment-textarea' name='comment_msg_add' id='commentmsgadd'></textarea>
                        <span id='commenterror'></span>
                    </div>
                    <div class='comment-item5'>
                        <input type='submit' name='post_comment' class='post-comment-btn' value='Post Comment'>
                    </div>
                </div>  
            </form>";

            if($get_loged_user_row['roll'] == 'admin'){
                $user_comment_here .= "<a href='admin.php'><button class='comment-bck-btn'>Back</button></a>";
            }
            elseif($get_loged_user_row['roll'] == 'teacher'){
                $user_comment_here .= "<a href='teacher.php'><button class='comment-bck-btn'>Back</button></a>";
            }
            elseif($get_loged_user_row['roll'] == 'student'){
                $user_comment_here .= "<a href='student.php'><button class='comment-bck-btn'>Back</button></a>";
            }

        $user_comment_here .= "

        ";
        
        echo $user_comment_here;
    }

?>
<script>
function answerValidate() {
    var anserer = document.forms['anserForm']['anserreply'].value
    if (anserer == "" || anserer == null) {
        document.getElementById('answererror').style.color = '#ff3f34';
        document.getElementById('answererror').innerHTML = '<span style="font-size:12px;">Input Feild Cannot be empty</span>';
        document.getElementById('anserreply').style.borderColor = '#ff3f34';
        return false;
    }
}

function commentVelidate() {
    var anserer = document.forms['userComment']['commentmsgadd'].value
    if (anserer == "" || anserer == null) {
        document.getElementById('commenterror').style.color = '#ff3f34';
        document.getElementById('commenterror').innerHTML = '<span style="font-size:12px;">Input Feild Cannot be empty</span>';
        document.getElementById('commentmsgadd').style.borderColor = '#ff3f34';
        return false;
    }
}
</script>
