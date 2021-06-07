<?php
session_start();
if (isset($_SESSION['email'])) {   header('location: products.php'); }
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>GIRLYSTORE</title>
    </head>
    <body>
        <?php
        include 'header.php';
        ?><br><br>
        <div id="banner_image">
            <center>
                <div class="container">
                    <div id="banner-content">
                        <h1>Let’s Shine Again</h1>
                        <p> Flat 40% OFF on premium brands </p><br>
                        <a href="products.php" class="btn btn-danger btn-lg active">Shop Now</a>
                    </div>
                </div>
            </center>
        </div><center>
        <img src="img/imgoffer.webp" class="thumbnail">
        <img src="img/imgoffer2.webp" class="thumbnail">
        <img src="img/imgoffer3.webp" class="thumbnail"></center>
        <center><h3>Top branded products at 40% OFF</h3></center>
        <div class="container">
            <div class="items">
                <a href="#">
                    <img src="img/loreal.webp" class="thumbnail">
                    <div class="caption">
                        <center><h2>loreal</h2>
                        <p>LO'real paris bestsellers.</p></center>
                    </div>
                </a>
            </div>
            <div class="items">
                <a href="#">
                    <img src="img/plum.webp" class="thumbnail">
                    <div class="caption">
                        <center><h2>Plum</h2>
                        <p>Vegan beauty at it's best.</p></center>
                    </div>
                </a>
            </div>
            <div class="items">
                <a href="#">
                    <img src="img/lotus.webp" class="thumbnail">
                    <div class="caption">
                        <center><h2>Lotus</h2>
                        <p>Best selling natural skin care.</p></center>
                    </div>    
                </a>
            </div>
            <div class="items">
                <a href="#">
                    <img src="img/clini.webp" class="thumbnail">
                    <div class="caption">
                        <center><h2>Clinique</h2>
                        <p>Refresh hydration for thirsty skin.</p></center>
                    </div>    
                </a>
            </div>
        </div>  
        <?php
        include 'footer.php';
        ?>
    </body>
</html>
