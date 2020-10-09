<?php
session_start();
require_once("../../assets/conn.php");
if (!$_POST) {
    require_once("../html/login.html");
} else if (isset($_POST["logeMail"]) && isset($_POST["logpass"])) {
    $sql = "select * from user where eMail='{$_POST['logeMail']}' and pass='{$_POST['logpass']}';";
    $result = $mysqli->query($sql);
    // $row = $result->fetch_assoc();
    if ($result->num_rows == 2) {
        header("location:../html/profile.html");
        echo ("loggd in");
    } else {
        echo ("login fail");
    }
} else {
    echo ("post fail");
}