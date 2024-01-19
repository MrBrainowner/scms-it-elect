<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
    header('location:sign_in.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="user_page.css">
    <title>User Page</title>
</head>
<body>
    <div class="container">
        <h2>wecome <?php echo $_SESSION['user_name'] ?></h2>
        <p><a href="sign_in.php">log out</a></p>
    </div>
    
</body>
</html>