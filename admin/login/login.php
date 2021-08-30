<?php
require("connection.php");
?>
<html>
 <head>
<title>Admin Login Panel</title>
<meta charset="utf-8" name="viewport" content="width=device-width", initial-scale=1.0, shrink-to-fit=no>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRVJgpj">
<link rel="stylesheet" type="text/css" href="mycss.css">

<style>
          h2{
              text-align: center;
            font-family: arial;
              
          }
      </style>

</head>

<body>
    <div class="login-form">

       <h2>ADMIN LOGIN PANEL </h2> 
      
       <form method="POST">
<div class="input-field">
<i class="fas fa-user"></i>
<input type="email" placeholder="Admin email" name="Admin email">
</div>
<div class="input-field">
<i class="fas fa-lock"></i>
<input type="password" placeholder="Admin password" name="Admin pasword">
</div>
<button type="submit" name="SignIn"> Sign In</button>

<div class="extra">
<a href="#"> Forget password?</a>
</div>

       </form>
       
    </div>
</body>

<?php
if(isset($_POST['SignIn']))
{
    $query="SELECT * FROM `admin_info` WHERE 'admin_email'='$_POST[adminemail]' AND `admin_info` WHERE 'admin_password'='$_POST[adminpassword]'";
    $result=mysqli_query($con,$query);

    if (mysqli_num_rows($result)==1) 
    {
       session_start();
       $_SESSION['adminloginId']=$_POST['adminemail'];
       header("location: topheader.php");
    } 
    else
    {
        echo"<script>arlet Incorrect Password;</script>";
    }
    
}
?>


</html>