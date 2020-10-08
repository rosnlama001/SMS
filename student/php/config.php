<?php
// used to connect to the database
    if(isset($_POST['sub'])){
        $mysqli = new mysqli("localhost", "root", "", "sms");
        $sql = "select * from user where eMail = '{$_POST['userAccount'][0]}' and pass = '{$_POST['userAccount'][1]}'";
        $result = $mysqli -> query($sql);
        // if (!$result) {
        //     trigger_error('Invalid query: ' . $mysqli->error);
        // }
        if($result -> num_rows == 1){
            $mysqli -> close();
            //$loginAccount = $_POST['userAccount'][0];
            session_start();
            $_SESSION['email']= $_POST['userAccount'][0];

            header("location:../html/dashboard.php");
        }
        else{
            session_start();
                $total = 2 - $_SESSION['attempt_count']++;
            ;
             $_SESSION['error'] = "ユーザ名（eMail）または、パスワードが間違っています。"."Remaining attempt is ".$total ;
            
             header("location:../html/login.php");
           
        }
    }
?>