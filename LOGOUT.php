<?php  
session_start();
session_destroy();//logout system
header('Location:Signup_v2.php');
?>