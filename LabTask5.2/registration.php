    <?php
        session_start();
    ?>

<!DOCTYPE html>
<html>
    <head>
        <title>Registration</title>
    </head>
    <body>
        <table border="1" align="center" width="650px">
        <tr>
            <td>
                <strong>XCompany</strong> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href= "publichome.php">  Home </a> | <a href= "login.php"> Login </a> | <a href= "registration.php"> Registration </a>
            </td>
        </tr>
        <tr>
            <td> 
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <center>
            <fieldset>
                <legend><h5>REGISTRATION</h5></legend>   
                Name: <input type="text" name="name" value="">   
                <hr>
                Email: <input type="text" name="email" value="">
                <hr>           
                User Name: <input type="text" name="username" value="">
                <hr>
                Password: <input type="password" name="password" value="">
                <hr>
                Confirm Password: <input type="password" name="password" value="">
                <hr>
                <fieldset>
                    <legend>Gender</legend>
                    <input type="radio" name="gender" value=""> Male
                    <input type="radio" name="gender" value=""> Female
                    <input type="radio" name="gender" value=""> Other
                </fieldset>
                <hr>
                <fieldset>
                    <legend>Date of Birth</legend>
                    <input type="text" name="date" value=""> / 
                    <input type="text" name="month" value=""> / 
                    <input type="text" name="year" value="">
                    <em>(dd/mm/yyyy)</em>
                </fieldset>
                <hr>
                <a href="loggedin.php>"><input type="button" name="submit" value="Submit"></a>
                <a href="#"><input type="button" name="reset" value="Reset"></a>
            </fieldset>
            </center>
            </form>
            </td>
            <tr>
                <td>
                    <center>
                        Copyright &copy; 2017
                    </center>
                </td>
                </tr>
        </tr>
        </table>
        <!--<?php
        $name = $_POST['name'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $confirmpassword = $_POST['confirmpassword'];
        if($confirmpassword == $password){
            $username = $_SESSION['username'];
            $password = $_SESSION['password'];
            $_SESSION['flag'] = "true";
        }
        
        ?>-->
    </body>
</html>