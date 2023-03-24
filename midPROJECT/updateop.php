<?php
    session_start();
    if(!isset($_SESSION['user'])){
        header("Location: logincheck.php");
    }
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
                <tr>
                    <td>
                        
                            <h2>
                                <center> 
                                <h4>&lt;&lt;&lt;Update Operation&gt;&gt;&gt;</h4>
                                Username: <input type="text" size="30" name="username" value="" placeholder="Enter the valid username">
                                <br>
                                Email: <input type="text" size="30" name="email" value="" placeholder="Enter the valid email">
                                <br>
                                <input type="button" name="UPDATE" value="UPDATE"> 
                                <a href="crud.php">
                                <input type="button" name="CANCEL" value="CANCEL"></a>
                                </center>    
                            </h2>
                    </td>
                </tr>
            </tr>
        </table>
    </body>
</html>