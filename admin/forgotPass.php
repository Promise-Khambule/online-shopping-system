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
		<input align="center"id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Forgot Password</label>
		<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab"></label>
		<div class="login-form">
			<div class="sign-in-htm">

            <br><br>
                <form method="post">
                        <div class="group">
                            <label align="center" for="user" class="label">Username</label>
                            <input id="user" name="username" type="text" class="input">
                        </div>
                        
                        
                        <div class="group">
                            <input type="submit" name="send"class="button" value="Send Request">
                        </div>
                </form>
				<div class="hr"></div>
				<div class="foot-lnk">
					<a href="index.php">Login</a>
				</div>
			</div>
			


            <?php
						//Code for Forgot Password

							if(isset($_POST['send']))
							{
    							$row1=mysqli_query($con,"select * from admin_info where admin_email='".$_POST['username']."'");
    							$row2=mysqli_fetch_array($row1);
    							if($row2>0)
    							{
        							$email = $row2['admin_email'];
        							$subject = "Information about your password";
        							$password = $row2['admin_email'];
        							$message = "Your password is ".$password." \n\n please make sure you change your pass word immediantly after logginng in, under your profile";
        							mail($email, $subject, $message, "From: $email");
                                    $enc_password=md5($password);
                                    //this will change the password to your student number so that u can update it
                                	
                                    
                                    	
                                    	mysqli_query($con,"UPDATE admin_info SET admin_password='$enc_password' where admin_email = '".$_POST['username']."' ");
                                    	

        							echo  "<script>alert('Your Password has been sent Successfully');</script>";
    							}
    							else
    							{
    							    echo "<script>alert('Email not register with us');</script>";	
    							}
							}
						
						?>
		</div>
	</div>
</div>

</body>
</html>
