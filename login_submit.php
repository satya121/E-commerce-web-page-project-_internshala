<?php
include 'common.php';
$con=mysqli_connect("localhost", "root", "", "final");
$email= mysqli_real_escape_string($con,$_POST['email']);
$password=mysqli_real_escape_string($con,$_POST['password']);
$query=mysqli_query($con,"SELECT * from users_logins WHERE email='$email' && password='$password'");
$rowcount=mysqli_num_rows($query);
if($rowcount==0)
{
    header("location:login.php");
}
else
{
    $_SESSION['email']=$email;
    header("location:products.php");
}
?>