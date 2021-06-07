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
        <title>sign up and get started</title>
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
        ?>
        <div class="row">
        <div class="container">
            <div class="col-xs-5 col-sty " >
                <div class="right">
                    <img src="img/logo2.jpg">
                </div>
            </div>
            <div class="col-xs-7 col-sty " style="padding-top:100px">   
                <div class="left">
                    <div class="container-fluid decor_bg" id="content" style="padding-top:30px">
                        <h1>SIGN UP</h1>
                        <form  action="signup_script.php" method="POST">
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" placeholder="Name" required="true" >
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="email" placeholder="email" required="true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password" name="password" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control"  placeholder="Contact" maxlength="10" size="10" name="contact" required>
                            </div>
                            <div class="form-group">
                                <input  type="text" class="form-control"  placeholder="City" name="city" required>
                            </div>
                            <div class="form-group">
                                <input  type="text" class="form-control"  placeholder="Address" name="address" required>
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        </form>
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

