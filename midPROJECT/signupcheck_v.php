<?php 
    session_start();
   
    $username = $_REQUEST['username'];
    $email = $_REQUEST['email'];
    //$mobile_no = $_REQUEST['mobile_no'];
    $password = $_REQUEST['password'];
    $new_password = $_REQUEST['newpassword'];
    $DOB = $_REQUEST['DOB'];
    $gender = $_REQUEST['gender'];
    
    
    if($username == "" || $password == "" || $new_password == "" || $email == "" || $DOB == "" || $gender == "") {
        echo "Please enter all the details! Incomplete form submitted.";
        //header('location:signupcheck.php?err=null');
    }
    elseif(strlen($password)<8)
    {
        echo "Password must be at least 8 digit";
        ?>
        <a href="registration.php">Back</a>
        <?php
    }
    elseif($password!=$new_password){
        echo"Passwords does not match!";
        ?>
        <a href="registration.php">Back</a>
        <?php
    }
    else{
        $admin = ['username'=> $username, 'password'=>$password, 'newpassword'=>$new_password, 'email'=>$email, 'DOB'=>$DOB, 'gender'=>$gender,];
        $_SESSION['admin'] = $admin;
        $file = fopen('admin.txt', 'a');
        $admin = $username."|".$password."|".$new_password."|".$email."|".$DOB."|".$gender."\r\n";
        fwrite($file, $admin); 
        fclose($file);
        header('location:logincheck.php');
    }
?>