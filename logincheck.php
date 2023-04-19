<?php
session_start();

if( isset($_SESSION['LOGGEDIN']) != true ){
    header("location:login.php");
}

?>