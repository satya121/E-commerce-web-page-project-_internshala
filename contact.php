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
        <title>Contact Us</title>
        <meta charset="UTF-8">
        <meta name="viewpor t" content="width=device-width, initial-scale=1.0">
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
        <div style="padding-top: 50px">
            <div class="col-xs-9">
                <h2>LIVE SUPPORT</h2>
                <p>24 houres|7 days a week | 365 days ayear Live Technical support<br>It is a long established fact that a reader will be distracted by the readable content of a page when looking at it's layout.The point of using Lorem IPsum  is that it has a more -or -less normal distribution of letters.There are many variations of passages of Lorem Ipsum avaolable,but the majority have suffered attention in some form,by injected humour, or randomised words which don't look even slightly beliveable.If you are going to use a passage of Lorem Ipsum,you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
            </div>
            <div class='col-xs-3'>
                <img src='img/cont.jpg'>
            </div>
        </div>
        <div style='padding-top: 50px'>
            <div class='col-xs-7'>
                <h2>CONTACT US</h2>
                <div class="container-fluid decor_bg" id="content" style="padding-top:30px">
                        <form>
                            <h4>Name</h4>
                            <div class="form-group">
                                <input type="text" class="form-control"  required="true" >
                            </div>
                            <h4>Email</h4>
                            <div class="form-group">
                                <input type="text" name="email" class="form-control"  required="true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                            </div>
                            <h4>Message</h4>
                            <div class="form-group">
                                <textarea id="subject"  class="form-control" name="subject" placeholder="Write something.." style="height:100px;width:685px"></textarea>
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
            </div>
            <div class='col-xs-5'>
                <h2>Company Information:</h2>
                <p>500 lorem Ipsum Dolor Sit,<br>22-56-2-9 Sit Amet ,Lorem,<br>USA<br>Phone:(00)222666444<br>
                    Fax:(000)000 00 00 0<br>Email:info@girlystore.com<br>Follow on:Facebok,Twitter</p>
            </div>
        </div>
        <div class='col-xs-12'>
        <?php
        include 'footer.php';
        ?>
            </div>
    </body>
    
</html>