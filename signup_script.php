<?php
require 'common.php';
$con=mysqli_connect("localhost", "root", "", "final");
$email= $_POST['email'];
$regex_email="/^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$/";
if(!preg_match($regex_email,$email)){
    echo "Invalid email";
}
$password=$_POST['password'];
if(strlen($password)<6){
    echo "NOTE:your password must contain atleast 6 characters";
}
$email= mysqli_real_escape_string($con,$_POST['email']);
$password=mysqli_real_escape_string($con,$_POST['password']);
$name= mysqli_real_escape_string($con,$_POST['name']);
$contact= mysqli_real_escape_string($con,$_POST['contact']);
$city= mysqli_real_escape_string($con,$_POST['city']);
$address= mysqli_real_escape_string($con,$_POST['address']);
$query=mysqli_query($con,"SELECT * from users_logins WHERE email='$email'");
$rowcount=mysqli_num_rows($query);
if($rowcount>0){
    echo "the email id already exits!";
}
 else{
     mysqli_query($con,"INSERT INTO `users_logins` ( `id`, `email`, `password`, `name`, `contact`, `city`, `address`) VALUES (NULL,'$email','$password','$name','$contact','$city','$address')");
     header("location:products.php");
     $_SESSION['email']=$email;
     $_SESSION['id']=mysqli_insert_id($con);
     
 }
?>

