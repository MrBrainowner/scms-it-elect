<?php

@include 'config.php';

session_start();
session_unset();
session_destroy();

// dont know if this if elseif statement works

if($_SESSION['admin_name']){
    header('location:admin_sign.php');
} elseif($_SESSION['user_name']){
    header('location:sign_in.php');  
}
?>