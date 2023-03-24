<?php 
    session_start();
    
    $username = $_POST['username'];
    $password = $_POST['password'];

    $_SESSION['user'] = null;
    
    if($username == "" || $password == "") {
        header('location: logincheck.php?err=null');
    } 
    else{
        $file = fopen('admin.txt', 'r');
        while(!feof($file)){
            $data = fgets($file);
            $admin = explode("|", $data);
            if($admin[0] == $username && $admin[1] == $password){ 
                setcookie('username', $username, time()+3600, '/');
                setcookie('password', $password, time()+3600, '/');
                $_SESSION['user'] = $username;
                header('location:admin_dashboard.php');
            }
            elseif($admin[0] == $username && $admin[1] != $password || $admin[0] != $username && $admin[1] == $password){
                header('location:logincheck.php?err=invalid_request');
            }
        
        }
    }
?>