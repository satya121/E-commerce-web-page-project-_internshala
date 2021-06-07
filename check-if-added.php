<?php
function check_if_added_to_cart($item_id)
{
    $con=mysqli_connect("localhost", "root", "", "final");
    $mail=$_SESSION['email'];
    $select_query_result=mysqli_query($con,"SELECT * from users_logins WHERE email='$mail'");
    $row=mysqli_fetch_array($select_query_result);
    $id=$row['id'];
    $query=mysqli_query($con,"SELECT * from users_products WHERE product_id='$item_id' && user_id='$id' && status='Added to Cart'");
    $rowcount=mysqli_num_rows($query);
    if($rowcount>0)
    {
        return TRUE;
    }
    else
    {
        return FALSE;
        
    }
}
?>
    