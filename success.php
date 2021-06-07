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
        <title>confirmed</title>
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
        
        if (isset($_SESSION['email']))    { ?><br><br><br>   
    <center>
        <div class="row row_style" style='padding-top: 100px'>
        <h4>  Your order is confirmed. Thank you for shopping with us. <a href="products.php">Click here </a> to purchase any other item.</h4>
        </div>
    </center>
    <?php
    }    else{
        header("loction:index.php");
    }?>
    <div style="padding-top: 200px">
        <?php
        include 'footer.php';
        ?>
    </div>
    </body>
</html>

