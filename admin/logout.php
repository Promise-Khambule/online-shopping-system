<?php
session_start();
$_SESSION['login']=="";
$_SESSION["name"] =="";
session_unset();
$_SESSION['action1']="You have logged out successfully..!";
echo  "<script>alert('Succssfully Logged out');</script>";
?>
<script language="javascript">
document.location="index.php";
</script>


