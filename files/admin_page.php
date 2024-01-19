<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
    header('location:admin_sign.php');  
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin_page.css">
    <title>Admin Page</title>
</head>
<body>
    <div class="container">
        <h1>welcome <span><?php echo $_SESSION['admin_name'] ?></span></h1>
        <p><a href="admin_sign.php">log out</a></p>
    </div>
</body>
</html>