<?php
$con=mysqli_connect("localhost", "root", "", "final");
//include 'common.php';?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>header</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.5.0.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link href="style.css" rel="stylesheet" type="text/css"/>
        <style>
            back{
                background-color:rgb(255,182,193);
            }
        </style>
    </head>
    
    <body>
<div class="navbar navbar-inverse  navbar-fixed-top">
        <div class="container">
            <div class="back">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" datatarget="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">GirlyStore</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <?php
                        if (isset($_SESSION['email'])) {
                    ?>
                    <li><a href = "cart-page.php"><span class = "glyphicon glyphicon-shopping-cart"></span> Cart </a></li>
                    <li><a href = "settings.php"><span class = "glyphicon glyphicon-user"></span> Settings</a></li>
                    <li><a href="aboutus.php"><span class="glyphicon glyphicon-th-list"></span> AboutUs</a></li>
                <li><a href="contact.php"><span class="glyphicon glyphicon-phone"></span> Contact Us</a></li>
                    <li><a href = "logout.php"><span class = "glyphicon glyphicon-login"></span> Logout</a></li>
                    
                 <?php 
                    } else {
                ?>
                    
                <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                <li><a onclick="document.getElementById('modal-wrapper').style.display='block'" ><span class="glyphicon glyphicon-log-in"></span>
Login</a></li>
                <li><a href="aboutus.php"><span class="glyphicon glyphicon-th-list"></span> AboutUs</a></li>
                <li><a href="contact.php"><span class="glyphicon glyphicon-phone"></span> Contact Us</a></li>
                
                <?php
                }
                
                ?>
                </ul>
                <div id="modal-wrapper" class="modal">
  
    <form class="modal-content animate" method="post" action="login_submit.php">
        
    <span onclick="document.getElementById('modal-wrapper').style.display='none'" class="close" title="Close PopUp">&times;</span>

      
    <div class="container"><br>
        <p style='padding-left: 25px'> don't have an account?<a href='signup.php'>Register</a>  </p>
        
        <input type="text" placeholder="Enter Username" class="form-control" name="email" style="width:400px" required><br>
        <input type="password" placeholder="Enter Password" class="form-control" name="password" style="width:400px" required> <br>       
        <button type="submit" class="form-control" style="width:400px;background-color:greenyellow">Login</button><br>     
      <a href="forgetpwd.php" style="text-decoration:none; padding-left: 25px; margin-right:34px; margin-top:26px;">Forgot Password ?</a>
    </div>
    
  </form>
  
</div>

<script>
// If user clicks anywhere outside of the modal, Modal will close

var modal = document.getElementById('modal-wrapper');
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
            </div>
        </div>
    </div>
</div>
    </body>
</html>