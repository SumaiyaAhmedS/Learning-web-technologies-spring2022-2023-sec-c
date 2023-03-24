<?php 
    session_start();
    
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    if($username == "" || $password == "" /*|| $email == ""*/) {
        header('location:forgetpassword.php?err=null');
    }
    else{
        $file = fopen('admin.txt', 'r');
        while(!feof($file)){
            $data = fgets($file);
            $admin = explode("|", $data);
            if($admin[0] == $username && $admin[2]== $email){            
                $admin = ['username'=> $username, 'password'=>$password ,'email'=>$email];
                $_SESSION['admin'] = $admin;
                $admin = $username."|".$password."\r\n" ;
                $file = fopen('admin.txt', 'a');
                fwrite($file, $admin);
                fclose($file);
                header('location:logincheck.php');}
            else{

                header('location:forgetpassword.php?err=invalid_request');
            }
        }

    }
?>