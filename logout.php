<?php
include 'common.php';
if (isset($_SESSION['email']))    {
    session_destroy();
    header('location: index.php');
    } 
    else{
        
        header('location: index.php');
    }
    ?>