<?php

@include 'config.php';

session_start();

if (!isset($_SESSION['user_name'])) {
    header('location:sign_in.php');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="module" src="main.js" defer></script>
    <link rel="stylesheet" href="user_page.css">
    <title>Home</title>
</head>

<body>
    <h2 class="title">welcome "<?php echo $_SESSION['user_name'] ?>"</h2>
    <div class="container">
        <div class="sideboard">
            <div class="side-b profile">
                <p class="side-buttons">My Profile</p>
            </div>
            <div class="side-b separators"></div>
            <div class="side-b reports">
                <p class="side-buttons">Report</p>
            </div>
            <div class="side-b history">
                <p class="side-buttons">History</p>
            </div>
            <div class="side-b separators"></div>
            <p class="log-out-button" id="log-out"><a class="log-out" href="log_out.php">log out</a></p>
        </div>
        <div class="contents">

        </div>
    </div>
</body>

</html>