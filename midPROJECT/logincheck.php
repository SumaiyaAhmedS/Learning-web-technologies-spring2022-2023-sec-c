<!DOCTYPE html>
<html>
    <head>
        <title>Hope Hospital</title>
    </head>
    <body>
        <table border="1" align="center" width="650px">
            <tr>
                <td>
                   <h1>Hope Hospital</h1> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;
                   <a href= "home.php">  Home </a> | <a href= "#"> Login </a> | <a href= "registration.php"> Registration </a>
                </td>
                <form method="post" action="logincheck_v.php" >
                <tr>
                    <td>
                        <p>
                            <h2>
                                <center>Welcome to Hope Hospital!</center>
                            </h2>
                                <hr>
                                <fieldset >
                                    <legend>Login</legend>
                                Username: <input type="text" name="username" value="">
                                <br>
                                <br>
                                Password: <input type="password" name="password" value="">
                                <br><hr>
                                <input type="checkbox" name="" value="" /> Remember me! <br><br>
                                <a href="admin_dashboard.php"><input type="submit" name="" value="Login"></a><br>
						        <br><a href ="forgetpassword.php"> Forgot Password?</a>
                                    <hr> 
                                <b>Don't Have an Account Yet?</b> &nbsp; <a href="signupcheck.php" >Register Now!</a>
                                    <?php 
								if(isset($_GET['err'])){
									if($_GET['err'] == 'invalid_request'){
										echo "Please enter your valid username/password!";
									}

									if($_GET['err'] == 'null'){
										echo "Please enter your username/password!";
									}
								}
							?>
                    </fieldset>
                        </p>
                    </td>
                </tr>
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