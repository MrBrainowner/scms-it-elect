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
    <title>Admin</title>
</head>
<body>
<h2 class="title">wecome "<?php echo $_SESSION['admin_name'] ?>"</h2>
    <div class="container">
        <div class="report-div">
            <div class="report">

            </div>
        </div>

        <p class="log-out-button"><a class="log-out" href="log_out.php">log out</a></p>
    </div>
</body>
</html>