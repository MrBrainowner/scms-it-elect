<?php

@include 'config.php';

session_start();

if(isset($_POST['submit'])){

    $aemail = mysqli_real_escape_string($conn, $_POST['email']);
    $apassword = md5($_POST['password']);
    
    $select = " SELECT * FROM user_admin WHERE email = '$aemail' && password = '$apassword' ";

    $result = mysqli_query($conn, $select);

    if(mysqli_num_rows($result) > 0){
        
        $row = mysqli_fetch_array($result);

      if ($row['password'] == $apassword){

        $_SESSION['admin_name'] = $row['name'];  
        header('location:admin_page.php');

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
    <link rel="stylesheet" href="admin.css">
    <title>Admin Accounts</title>
</head>
<body>
    <form action="admin_sign.php" method="post" id="sign-up-form">
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
                <input class="sign-up-inputs" id="sign-up-name" type="email" name="email" placeholder="Email" required>
                <input class="sign-up-inputs" id="sign-up-password" type="password" name="password" placeholder="Password" required>
                <button class="form-buttons" type="submit" name="submit" id="sign-up-button">Sign In</button>
                <div id="u-link-div"><a id="u-link" href="sign_in.php">user</a></div>
            </div>
       </div>
    </form>
</body>
</html>