<?php 
    function Connection(){
        $server = "localhost";
        $user = "root";
        $pass = "";
        $db_name = "quiz_system";

        $con = mysqli_connect($server,$user,$pass,$db_name);
    }
?>
