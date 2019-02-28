<?php
error_reporting(null);
include("login.php");
if($_SESSION['username'] !== $user){
    header("location:log.html");
    exit();
    } else {
        $_SESSION['username'] = "dwiyan";
        echo"selamat datang ".$_SESSION['username'];
    } if(isset($_REQUEST['logout'])){
        session_start();
        session_destroy();
        header("location:log.html");
        exit();
    }


?>