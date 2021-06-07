<?php
include 'common.php';
$con=mysqli_connect("localhost", "root", "", "final");
$product_id=mysqli_real_escape_string($con,$_GET['id']);
$queries=mysqli_query($con,"DELETE FROM users_products  WHERE product_id='$product_id'");
//echo "deleted product id=".$product_id;
header("location:cart-page.php");
?>