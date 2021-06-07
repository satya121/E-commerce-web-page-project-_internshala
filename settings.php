
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
        <title>settings</title>
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
        if (isset($_SESSION['email']))    {?>
        
        <div class="container">
                <div class="row row_style">
                    <div class="col-xs-4 col-xs-offset-4"><br><br>
                        <form  method="post" action="settings_script.php">
                        <h3>Change password</h3>
                            <input type="text" name="opassword" placeholder="old password"><br><br>
                            <input type="text" name="npassword" placeholder="new password"><br><br>
                            <input type="text" name="password"placeholder="Re-type New Password"><br><br>
                            <button class="btn btn-primary">change</button><br><br>
                        </form>
                    </div>
                </div>
            </div>
        <?php
        } else {
            header("index.php");
        }
        include 'footer.php';
        ?>
    </body>
</html>