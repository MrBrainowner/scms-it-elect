<?php

@include 'config.php';

session_start();

if(isset($_POST['submit'])){

    $usename = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = md5($_POST['password']);
    $cpassword = md5($_POST['cpassword']);
    
    $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$password' ";

    $result = mysqli_query($conn, $select);

    if(mysqli_num_rows($result) > 0){
        
        $error[] = 'user already exist!';

    } else {

        if($password != $cpassword){
            $error[] = 'password do not matched!';
        } else {
            $insert = "INSERT INTO user_form(name, email, password) VALUES('$usename', '$email', '$password')";
            mysqli_query($conn, $insert);
            header('location:sign_in.php');
        }
    }
};
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <form action="sign_up.php" method="post" id="sign-up-form">
        <h1 class="for-white-color" id="headline">We Hear You Loud and Clear<br>Your Voice, Our Priority</h1>
       <div id="cred-img-area">
            <div id="cred-area">
                <h3 class="for-white-color" id="sign-up-text">Sign Up</h3>
                <?php
                if(isset($error)){
                    foreach($error as $error){
                        echo '<span class="error-msg">'.$error.'</span>';
                    };
                };
                ?>
                <input class="sign-up-inputs" id="sign-up-name" type="text" name="username" placeholder="Name" required>
                <input class="sign-up-inputs" id="sign-up-email" type="email" name="email" placeholder="Email" required>
                <input class="sign-up-inputs" id="sign-up-password" type="password" name="password" placeholder="Password" required>
                <input class="sign-up-inputs" id="confirm-password" type="password" name="cpassword" placeholder="Confirm password" required>
                <input type="submit" name="submit" value="Sign Up" class="form-buttons" id="sign-up-button" >
                <!-- <input class="form-buttons" type="submit" id="sign-up-button"> -->
                <p class="for-white-color" id="ptext">Already have an account? <a href="sign_in.php" class="for-white-color">Sign In</a></p>
            </div>
            <div id="cred-img">
               <a href="admin_regis.php"><div class="admn"><p id="admin">admin</p></div></a>
                <img id="img-poster" src="../img/poster.jpg" alt="poster">
            </div>
       </div>
    </form>
</body>
</html>
