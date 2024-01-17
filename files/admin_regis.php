<?php

@include 'config.php';

session_start();

if(isset($_POST['submit'])){

    $ausename = mysqli_real_escape_string($conn, $_POST['username']);
    $aemail = mysqli_real_escape_string($conn, $_POST['email']);
    $apassword = md5($_POST['password']);
    $acpassword = md5($_POST['cpassword']);
    $auser_type = $_POST['cpassword'];
    
    $select = " SELECT * FROM user_admin WHERE email = '$aemail' && password = '$apassword' ";

    $result = mysqli_query($conn, $select);

    if(mysqli_num_rows($result) > 0){
        
        $error[] = 'user already exist!';

    } else {

        if($apassword != $acpassword){
            $error[] = 'password do not matched!';
        } else {
            $insert = "INSERT INTO user_admin(name, email, password, admin_type) VALUES('$ausename', '$aemail', '$apassword', '$auser_type')";
            mysqli_query($conn, $insert);
            header('location:admin_page.php');
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
    <link rel="stylesheet" href="admin.css">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" id="sign-up-form">
        <h1 class="for-white-color" id="headline">We Hear You Loud and Clear<br>Your Voice, Our Priority</h1>
       <div id="cred-img-area">
            <div id="cred-area">
                <h3 class="for-white-color" id="sign-up-text">Admin</h3>
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
                <p class="for-white-color" id="ptext">Already have an account? <a href="admin_sign.php" class="for-white-color">Sign In</a></p>
                <div id="u-link-div"><a id="u-link" href="sign_up.php">user</a></div>
            </div>
       </div>
    </form>
</body>
</html>
