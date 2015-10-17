<?php

include('config.php');
$con = mysqli_connect("localhost","root","","socialmoney");
session_start();
$user_check=$_SESSION['login_user'];

$sql="select FirstName from register where Email='$user_check'";

$ses_sql=mysqli_query($con,$sql);

$row=mysqli_fetch_assoc($ses_sql);

$login_session=$row['FirstName'];

if(!isset($login_session))
{
header("Location: index.html");
}
 
?>