<?php

$user = $_POST['user'];
$pw = $_POST['pw'];

if(isset($_POST['submit'])){
    if($user == "dwiyan" && $pw == "ganteng"){
        session_start();
        $_SESSION['username'] = $user;
   echo "<script>
   window.location = 'http://localhost/php/Log/beranda.php';
</script>";
    } else {
        echo"Salah kabek Cok";
        
        exit();
    }
}


?>