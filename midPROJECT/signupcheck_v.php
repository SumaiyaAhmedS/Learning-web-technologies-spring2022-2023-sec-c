<?php 
    session_start();
   
    $username = $_REQUEST['username'];
    $email = $_REQUEST['email'];
    $mobile_no = $_REQUEST['mobile_no'];
    $password = $_REQUEST['password'];
    $DOB = $_REQUEST['DOB'];
    $gender = $_REQUEST['gender'];
    
    
    if($username == "" || $password == "" || $email == "" || $DOB == "" || $mobile_no== "" || $gender == "") {
        header('location:signupcheck.php?err=null');
    }
    else{
        $admin = ['username'=> $username, 'password'=>$password, 'email'=>$email, 'DOB'=>$DOB,'mobile_no'=>$mobile_no, 'gender'=>$gender,];
        $_SESSION['admin'] = $admin;
        $file = fopen('admin.txt', 'a');
        $admin = $username."|".$password ."|".$email."|".$DOB."|".$mobile_no."|".$gender."\r\n";
        fwrite($file, $admin); 
        fclose($file);
        header('location:logincheck.php');
    }
?>