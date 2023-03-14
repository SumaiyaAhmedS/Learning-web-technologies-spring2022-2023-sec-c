<?php
    session_start();
    ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Hope Hospital</title>
    </head>
    <body>
        <table border="1" align="center" width="650px">
            <tr>
                <td>
                   <h1>Hope Hospital</h1> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; 
                   <a href= "admin_dashboard.php">  Home </a> | <a href="notification.php"> Notification </a> | <a href="logout.php">logout</a>
                </td>
                <form method="post" action="forgetpassword_v.php">
                <tr>
                    <td>
                            <h2>
                                <center> 
                                <h4>&lt;&lt;&lt;Forgot Password?&gt;&gt;&gt;</h4>
                                <form action="forgetpassword_v.php" method="post">
                                    Username: <input type="text" size="30" name="username" value="" placeholder="Enter your valid username">
                                    <br>
                                    New password: <input type="password" size="30" name="password" value="" placeholder=" New Password">
                                    <br>
                                    Retype New password:<input type="password" size="30" name="password" value="" placeholder="Retype New Password">
                                    <br>
                                    <a href="admin_dashboard.php"><input type="button" name="submit" value="Confirm"></a>
                                    <br>
                                    <?php 
                            if(isset($_GET['err'])){
                                if($_GET['err'] == 'invalid_request'){
                                    echo "Please enter your valid username/email!";
                                }

                                if($_GET['err'] == 'null'){
                                    echo "Please enter your username/new password!";
                                }
                            }

                        ?>
                                </form>
                                </center>    
                            </h2>
                    </td>
                </tr>
                </form>
                <tr>
                    <td>
                        <center>
                            Copyright &copy; 1958
                        </center>
                    </td>
                </tr>
            </tr>
        </table>
    </body>
</html>