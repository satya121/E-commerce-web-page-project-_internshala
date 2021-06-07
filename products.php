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
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewpor 
              t" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.5.0.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link href="style.css" rel="stylesheet" type="text/css"/>
        <style>
            co{
                border:1px solid #000;
            }
        </style>
    </head>
    <body>
        <?php
        include 'header.php';
        ?>
        <div class="container">
            <div class="jumbotron">
                <h1>Welcome to our GirlyStore!</h1>
                <p> We have the best cosmetics and beauty products.</p>
            </div>
            
        </div>
        <?php
        include 'check-if-added.php'; ?>
        <div class="row">
            <div class="col-md-3 col-sm-6 ">
                <div class="thumbnail">
                    <a href="#"><img src="img/im1.webp"></a>
                    <div class="caption">
                        <h3>MAC primer</h3>
                        <p>Price:Rs.3600.00</p>
                        <?php 
                        if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php
                        } else {
                        $temp=check_if_added_to_cart(1);
                        if( $temp!= 0) {
                         echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                         
                        } else {
                        ?>
                        <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                        <?php
                        }
                        }
                        ?> 
                    </div>
                </div> 
            </div>
            <div class="col-md-3 col-sm-6 ">
                <div class="thumbnail">
                    <a href="#"><img src="img/im2.webp"></a>
                    <div class="caption">
                        <h3>MAC compact</h3>
                        <p>Price:Rs.2500.00</p>
                        <?php 
                        if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php
                        } else {
                        $temp=check_if_added_to_cart(2);
                        if( $temp!= 0) {
                         echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                        
                         
                        } else {
                        ?>
                        <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                        <?php
                        }
                        }
                        ?> 
                    </div>
                </div> 
            </div>
            <div class="col-md-3 col-sm-6 ">
                <div class="thumbnail">
                    <a href="#"><img src="img/im3.webp"></a>
                    <div class="caption">
                        <h3>MAC liner</h3>
                        <p>Price:Rs.2000.00</p>
                        <?php 
                        if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php
                        } else {
                        $temp=check_if_added_to_cart(3);
                        if( $temp!= 0) {
                         echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                        
                         
                        } else {
                        ?>
                        <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                        <?php
                        }
                        }
                        ?> 
                    </div>
                </div> 
            </div>
            <div class="col-md-3 col-sm-6 ">
                <div class="thumbnail">
                    <a href="#"><img src="img/im4.webp"></a>
                    <div class="caption">
                        <h3>MAC lipstick</h3>
                        <p>Price:Rs.1000.00</p>
                        <?php 
                        if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php
                        } else {
                        $temp=check_if_added_to_cart(4);
                        if( $temp!= 0) {
                         echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                        
                         
                        } else {
                        ?>
                        <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                        <?php
                        }
                        }
                        ?> 
                    </div>
                </div> 
            </div>
            <div class="col-md-3 col-sm-6 ">
                <div class="thumbnail">
                    <a href="#"><img src="img/im5.webp"></a>
                    <div class="caption">
                        <h3>lotus lavander facewash</h3>
                        <p>Price:Rs.500.00</p>
                        <?php 
                        if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php
                        } else {
                        $temp=check_if_added_to_cart(5);
                        if( $temp!= 0) {
                         echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                        
                         
                        } else {
                        ?>
                        <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                        <?php
                        }
                        }
                        ?> 
                    </div>
                </div> 
            </div>
            <div class="col-md-3 col-sm-6 ">
                <div class="thumbnail">
                    <a href="#"><img src="img/im6.webp"></a>
                    <div class="caption">
                        <h3>lotus face gel</h3>
                        <p>Price:Rs.600.00</p>
                        <?php 
                        if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php
                        } else {
                        $temp=check_if_added_to_cart(6);
                        if( $temp!= 0) {
                         echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                        
                         
                        } else {
                        ?>
                        <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                        <?php
                        }
                        }
                        ?> 
                    </div>
                </div> 
            </div>
            <div class="col-md-3 col-sm-6 ">
                <div class="thumbnail">
                    <a href="#"><img src="img/im7.webp"></a>
                    <div class="caption">
                        <h3>lotus herbal facewash</h3>
                        <p>Price:Rs.360.00</p>
                        <?php 
                        if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php
                        } else {
                        $temp=check_if_added_to_cart(7);
                        if( $temp!= 0) {
                         echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                        
                         
                        } else {
                        ?>
                        <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                        <?php
                        }
                        }
                        ?> 
                    </div>
                </div> 
            </div>
            <div class="col-md-3 col-sm-6 ">
                <div class="thumbnail">
                    <a href="#"><img src="img/im8.webp"></a>
                    <div class="caption">
                        <h3>lotus face cream</h3>
                        <p>Price:Rs.300.00</p>
                        <?php 
                        if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php
                        } else {
                        $temp=check_if_added_to_cart(8);
                        if( $temp!= 0) {
                         echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                        
                         
                        } else {
                        ?>
                        <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                        <?php
                        }
                        }
                        ?> 
                    </div>
                </div> 
            </div>
            <div class="col-md-3 col-sm-6 ">
                <div class="thumbnail">
                    <a href="#"><img src="img/im9.webp"></a>
                    <div class="caption">
                        <h3>Loreal gel cream</h3>
                        <p>Price:Rs: 600.00</p>
                        <?php 
                        if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php
                        } else {
                        $temp=check_if_added_to_cart(9);
                        if( $temp!= 0) {
                         echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                        
                         
                        } else {
                        ?>
                        <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                        <?php
                        }
                        }
                        ?> 
                    </div>
                </div> 
            </div>
            <div class="col-md-3 col-sm-6 ">
                <div class="thumbnail">
                    <a href="#"><img src="img/im10.webp"></a>
                    <div class="caption">
                        <h3>Loreal liquid lipstick</h3>
                        <p>Price:Rs.300.00</p>
                        <?php 
                        if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php
                        } else {
                        $temp=check_if_added_to_cart(10);
                        if( $temp!= 0) {
                         echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                        
                         
                        } else {
                        ?>
                        <a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                        <?php
                        }
                        }
                        ?> 
                    </div>
                </div> 
            </div>
            <div class="col-md-3 col-sm-6 ">
                <div class="thumbnail">
                    <a href="#"><img src="img/im11.webp"></a>
                    <div class="caption">
                        <h3>Loreal Shampoo</h3>
                        <p>Price:Rs.300.00</p>
                        <?php 
                        if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php
                        } else {
                        $temp=check_if_added_to_cart(11);
                        if( $temp!= 0) {
                         echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                        
                         
                        } else {
                        ?>
                        <a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                        <?php
                        }
                        }
                        ?> 
                    </div>
                </div> 
            </div>
            <div class="col-md-3 col-sm-6 ">
                <div class="thumbnail">
                    <a href="#"><img src="img/im12.webp"></a>
                    <div class="caption">
                        <h3>Loreal Hydra freash cream</h3>
                        <p>Price:Rs.300.00</p>
                        <?php 
                        if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php
                        } else {
                        $temp=check_if_added_to_cart(12);
                        if( $temp!= 0) {?>
                         <a href="#" class="btn btn-block btn-success" disabled>Added to cart</a> 
                        
                         <?php
                        } else {
                        ?>
                        <a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                        <?php
                        }
                        }
                        ?> 
                    </div>
                </div> 
            </div>
            
                
            </div>
            
</div>


                        <?php
                        include 'footer.php';
                        ?>
    </body>
</html>


