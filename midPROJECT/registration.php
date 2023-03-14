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
                <form method="post" action="signupcheck_v.php" >
                <tr>
                    <td>
                        <p>
                            <h2>
                                <center>Welcome to Hope Hospital!</center>
                            </h2>
                                <hr>
                                <fieldset >
                                    <legend><h3>Registration</h3></legend>
                                   <center>
						Username:
						<input type="text" size="30" name="username" value="">					
                    <hr>                  
						Email:
						<input type="text" size="30" name="email" value="">					
                    <hr>                    
						Mobile No: 
						<input type="text" size="11" name="mobile_no" value="">					
                    <hr>					
						New password: 
						<input type="password" size="30" name="password" value="">					
                    <hr>                    
						Retype New password:
						<input type="password" size="30" name="password" value="">
                    <hr>
                        DOB: <input type="date" name="DOB" value="">
                    <hr>    
                       Gender: 
                            <select name="gender">
                                <option name="gender" value="male">Male</option>
                                <option name="gender" value="female">Female</option>
                                <option name="gender" value="others">Others</option>
                            </select>   
                            <br><br>
                            <a href="admin_dashboard.php"><input type="submit" value="Register"></a><br>
                        <?php 
                            if(isset($_GET['err'])){
                            
                            if($_GET['err'] == 'null'){
                                echo "Please fill all the requirement";
                            }
                            }
                        ?>
                        <br><a href ="logincheck.php">Already have an account? Login!</a>

                            </center>

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