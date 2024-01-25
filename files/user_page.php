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
    <title>Home</title>
</head>
<body>
    <h2 class="title">welcome "<?php echo $_SESSION['user_name'] ?>"</h2>
    <div class="container">
        <div class="report-div">
            <div class="report">

            </div>
        </div>
        <div class="info-div">
            <div class="info">

            </div>
        </div>

        <p class="log-out-button"><a class="log-out" href="log_out.php">log out</a></p>
    </div>
</body>
</html>