
<!DOCTYPE html>
<html>
    <head>
<title>Login</title>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.5.0.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link href="style.css" rel="stylesheet" type="text/css"/>
<style>

@keyframes zoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}
</style>
</head>
<body>





<div id="modal-wrapper" class="modal">
  
    <form class="modal-content animate" method="post" action="login_submit.php">
        
    <span onclick="document.getElementById('modal-wrapper').style.display='none'" class="close" title="Close PopUp">&times;</span>

      <h1 style="text-align:center">LOGIN</h1>

    <div class="container">
        <input type="text" placeholder="Enter Username" class="form-control" name="email" style="width:400px"><br>
        <input type="password" placeholder="Enter Password" class="form-control" name="password" style="width:400px"> <br>       
        <button type="submit" style="width:400px">Login</button><br>     
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

</body>
</html>
