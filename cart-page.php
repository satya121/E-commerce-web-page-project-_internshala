<?php
include 'common.php';
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>carting page</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.5.0.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <?php
        include 'header.php';
        ?><br><br><br><br><?php
        $con=mysqli_connect("localhost", "root", "", "final");
        $mail= $_SESSION['email'];
        $select_query_result=mysqli_query($con,"SELECT * from users_logins WHERE email='$mail'");
        $row=mysqli_fetch_array($select_query_result);
        $user_id=$row['id'];
        $userproduct_details=mysqli_query($con,"SELECT * FROM users_products  INNER JOIN users_logins ON users_logins.id=users_products.user_id INNER JOIN products ON products.id=users_products.product_id WHERE users_logins.id='$user_id';");
        $count=mysqli_num_rows($userproduct_details);
        if($count==0){?>
    <center> <?php
            echo  "<h3>Add items to the cart first!</h3>"; ?>
        </center><?php
        } else { ?> 
        <div class="container">
            <div class="row row_style">
            <div class="col-xs-4 col-xs-offset-4">
            <table class="table table-bordered">
                
                    <tr><th>Item Number</th> 
                        <th>Item Name</th> 
                        <th>Price</th>
                        <th>Change</th>
                    </tr><?php
                    $sum=0;
                    while($count!=0){
                        $rows=mysqli_fetch_array($userproduct_details);
                        $a=$rows['product_id'];?>
                        <tr><td><?php echo $rows['product_id'] ?></td>
                        <td><?php echo $rows['product_name'] ?></td>
                        <td><?php echo $rows['price'] ?></td>
                    <td><?php echo "<a href='cart-remove.php?id={$rows['product_id']}' class='btn btn-primary'>Remove</a>";  ?> </td></tr>
                    <tr> <?php
                        $count--;
                        $sum=$sum+$rows['price'];
                    }?>
                    <td>order</td>
                        <td>Total</td>
                        <td><?php echo $sum; ?></td>
                        <td><a href="success.php"class="btn btn-primary">Confirm Order</a></td>
                    </tr>
                    </table><?php
        }  ?>
            
            </div>
            </div>
        </div>
        <?php
        include 'footer.php';
        ?> 
    </body>
</html>