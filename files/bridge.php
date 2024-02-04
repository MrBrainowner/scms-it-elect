<?php

session_start();

$name = 'User';

$_SESSION['user_name'] = $name;
header('location:user_page.php');

?>