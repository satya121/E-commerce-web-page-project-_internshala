<?php
//require 'common.php';
session_start();
$email=$_SESSION['email'];
$con=mysqli_connect("localhost", "root", "", "final");
$old_password= mysqli_real_escape_string($con,$_POST['opassword']);
$new_password=mysqli_real_escape_string($con,$_POST['npassword']);
$re_password=mysqli_real_escape_string($con,$_POST['password']);
if(strlen($new_password)<6){
    echo "NOTE:your password must contain atleast 6 characters";
}
else{
if($new_password!=$re_password){
    echo "password didn't match";
}
$query=mysqli_query($con,"SELECT * from users_logins WHERE email='$email' && password='$old_password'");
$rowcount=mysqli_num_rows($query);
if($rowcount==0)
{?>
<center>
    <p>invalid password <a href='settings.php'>Click here </a> to try again.</p>
    </center><?php
}
else{
    $queries=mysqli_query($con,"UPDATE `users_logins` SET `password` = '$new_password' WHERE `users_logins`.`email` = '$email'");?>
<center>
    <p>  Your password has been updated. <a href="products.php">Click here </a> to shop now.</p></center><?php
}}?>

