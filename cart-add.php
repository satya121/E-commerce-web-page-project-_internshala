<?php
include 'common.php';
$con=mysqli_connect("localhost", "root", "", "final");
$product_id=mysqli_real_escape_string($con,$_GET['id']);
$mail=$_SESSION['email'];
$select_query_result=mysqli_query($con,"SELECT * from users_logins WHERE email='$mail'");
$row=mysqli_fetch_array($select_query_result);
$user_id=$row['id'];
mysqli_query($con,"INSERT INTO `users_products` ( `id`, `user_id`, `product_id`, `status`) VALUES (NULL,'$user_id','$product_id','Added to Cart')");
header("location:products.php");
?>