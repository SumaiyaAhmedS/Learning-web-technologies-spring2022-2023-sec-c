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
                                <h4>&lt;&lt;&lt;Notifications&gt;&gt;&gt;</h4>
                                </center>
                            </h2>
                                <ul>
                                <li><a href="insertop.php"><em><strong>New Employee Added!</strong></em></a></li>
                                <br>
                                <li><a href="updateop.php"><em><strong>New Employee Details Updated!</strong></em></a></li>
                                <br>
                                <li><a href="removeop.php"><em><strong>Employee Removed!</strong></em></a></li>
                                <br>
                                <li><a href="insertop.php"><em><strong>New Employee Added!</strong></em></a></li>
                                <br>
                                <li><a href="updateop.php"><em><strong>New Employee Details Updated!</strong></em></a></li>
                                <br>
                                </ul> 
                    </td>
                </tr>
            </tr>
        </table>
    </body>
</html>