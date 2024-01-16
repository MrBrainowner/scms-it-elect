<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" id="sign-up-form">
        <h1 class="for-white-color" id="headline">We Hear You Loud and Clear<br>Your Voice, Our Priority</h1>
       <div id="cred-img-area">
            <div id="cred-area">
                <h3 class="for-white-color" id="sign-in-text">Sign In</h3>
                <input class="sign-up-inputs" id="sign-in-name" type="text" name="username" placeholder="Name" required>
                <input class="sign-up-inputs" id="sign-in-email" type="email" name="email" placeholder="Email" required>
                <input class="sign-up-inputs" id="sign-in-password" type="password" name="password" placeholder="Password" required>
                <button class="form-buttons" type="submit" id="sign-in-button">Sign In</button>
                <p class="for-white-color" id="ptext">Dont have an account? <a href="sign_up.php" class="for-white-color">Sign In</a></p>
            </div>
            <div id="cred-img">
                <a href="admin_sign.php"><div class="admn"><p id="admin">admin</p></div></a>
                <img id="img-poster" src="/img/poster.jpg" alt="poster">
            </div>
       </div>
    </form>
</body>
</html>