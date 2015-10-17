<?php

include("config.php");	
$con = mysqli_connect("localhost","root","","socialmoney");
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST")
{
// username and password sent from form 

$myusername=addslashes($_POST['email']); 
$mypassword=addslashes($_POST['password']); 


$sql="SELECT ID FROM register WHERE Email='$myusername' and Password='$mypassword'";
$result=mysqli_query($con,$sql);
//$row=mysql_fetch_array($result);
//$active=$row['active'];
$count=mysqli_num_rows($result);

//echo "$count";
// If result matched $myusername and $mypassword, table row must be 1 row


if($count==1)
{
 //session_register("myusername");
$_SESSION['login_user']=$myusername;
header("location: admin.php");
}
else 
{
header("location: index.html");
}

}  
?>
