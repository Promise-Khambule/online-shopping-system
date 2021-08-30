<?php
session_start();
$con=mysqli_connect("localhost","root","","ecommerce");

if (mysqli_connect_error()) {
    echo "Cannot Connect";
} 

?>


<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="UTF-8">
  <title>Daily UI | #001 - Sign Up</title>
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link type="text/css" rel="stylesheet" href="assets/css/login.scss"/>

  <script>

</script>
</head>
<body class="align">
<div class="login-wrap ">
	<div class="login-html">
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab"> Admin Sign In</label>
		<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab"></label>
		<div class="login-form">
			<div class="sign-in-htm">
                <form method="post">
                        <div class="group">
                            <label for="user" class="label">Username</label>
                            <input id="user" name="username" type="text" class="input" Required>
                        </div>
                        <div class="group">
                            <label for="pass" class="label">Password</label>
                            <input id="pass" type="password" name="password" class="input" data-type="password" Required>
                        </div>
                        
                        <div class="group">
                            <input type="submit" name="login"class="button" value="Sign In">
                        </div>
                </form>
				<div class="hr"></div>
				<div class="foot-lnk">
					<a href="forgotPass.php">Forgot Password?</a>
				</div>
			</div>
			


            
						<?php
						if(isset($_POST['login']))
						{
							$password=$_POST['password'];
							$dec_password=md5($password);
						//$dec_password=$password;
							$useremail=$_POST['username'];
							$ret= mysqli_query($con,"SELECT * FROM admin_info WHERE admin_email = '$useremail' and admin_password = '$password'");
							$line=mysqli_fetch_array($ret);
							$find = $line['stdNum']; 
                            
                            
                            
							if($line>0)
							{

								

								// $extra="index.php";
								$_SESSION['login'] = $_POST['username'];
								$_SESSION['name'] =$line['admin_name'];
						
								echo  "<script>alert('Login Succssfully');</script>";
								
								
								echo '<script language="javascript">
								document.location="dashboard.php";
							</script>';
								   
								exit();
							}
							else
							{
							
							echo  "<script>alert('incorrect Login details ');</script>";
							// $extra="index.php";
							$host  = $_SERVER['HTTP_HOST'];
							$uri  = rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
							//header("location:http://$host$uri/$extra");
							 echo '<script language="javascript">
                                    document.location="index.php";
                                </script>';
								
							exit();
							}
}
					?>
		</div>
	</div>
</div>

</body>
</html>
