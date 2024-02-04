<?php

@include 'config.php';

session_start();


if (isset($_POST['submit'])) {

    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = md5($_POST['password']);


    $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$password' ";

    $result = mysqli_query($conn, $select);

    if (mysqli_num_rows($result) > 0) {

        $row = mysqli_fetch_array($result);

        if ($row['password'] == $password) {

            $_SESSION['user_name'] = $row['name'];
            header('location:user_page.php');
        }
    } else {
        $error[] = 'incorrect email or password!';
    }
};


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script type="module" src="main.js" defer></script>
    <title>Sign In</title>
</head>

<body>
    <form action="sign_in.php" method="post" id="sign-up-form">
        <h1 class="for-white-color" id="headline">We Hear You Loud and Clear<br>Your Voice, Our Priority</h1>
        <div id="cred-img-area">
            <div id="cred-area">
                <h3 class="for-white-color" id="sign-in-text">Sign In</h3>
                <?php
                if (isset($error)) {
                    foreach ($error as $error) {
                        echo '<span class="error-msg">' . $error . '</span>';
                    };
                };
                ?>
                <input class="sign-up-inputs" id="sign-in-email" type="email" name="email" placeholder="Email" required>
                <input class="sign-up-inputs" id="sign-in-password" type="password" name="password" placeholder="Password" required>
                <button class="form-buttons" type="submit" name="submit" id="sign-in-button">Sign In</button>
                <button id="google-sign" class="form-buttons">Log In with Google</button>
                <p class="for-white-color" id="ptext">Dont have an account? <a href="sign_up.php" class="for-white-color">Sign Up</a></p>
            </div>
            <div id="cred-img">
                <a href="admin_sign.php">
                    <div class="admn">
                        <p id="admin">admin</p>
                    </div>
                </a>
                <img id="img-poster" src="../img/poster.jpg" alt="poster">
            </div>
        </div>
    </form>
    <?php function phpfunc()
    {
        $_SESSION['user_name'] = 'User';
    };
    ?>
    <script type="text/javascript">
        var button = document.getElementById("google-sign");
        var phpcall = phpfunc();

        button.addEventListener('click', phpcall);
    </script>
</body>

</html>