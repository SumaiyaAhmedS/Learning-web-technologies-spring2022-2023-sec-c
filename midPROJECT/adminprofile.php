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
                                <center> 
                                <h4>&lt;&lt;&lt;Profile&gt;&gt;&gt;</h4>
                                <img src="adminpp.png">
                                <br>
                                <strong>Username:</strong> <?php echo $_SESSION['user'] ?>
                                <br>
                                <strong>Position:</strong> Admin
                                <br>
                                <strong>ID:</strong> 72-0881
                                <br>
                                <strong>Joining Date:</strong> 11-11-1997
                                <br>
                                <strong>DOB:</strong> 02-02-1992
                                <br>
                                <strong>Gender:</strong> Female
                                <br>
                                <strong>Mobile No.:</strong> 98913246870
                                <br>
                                <strong>Email:</strong> sumaiya@hope.com
                                <br>
                                <br>
                                </center>
                    </td>
                </tr>
            </tr>
        </table>
    </body>
</html>