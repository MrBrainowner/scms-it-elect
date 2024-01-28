<?php

@include '../CRUD/read.php';
@include '../config.php';

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
    <link rel="stylesheet" href="../admin_page.css">
    <link rel="stylesheet" href="users.css">
    <title>Admin</title>
</head>
<body>
<h2 class="title">welcome "<?php echo $_SESSION['admin_name'] ?>"</h2>
<div class="container">
        <div class="sideboard">
            <div class="side-b profile"><a class="side-buttons" href="../admin_page.php">My Profile</a></div>
            <div class="side-b separators"></div>
            <div class="side-b dashboard"><a class="side-buttons" href="dashboard.php">Dashboard</a></div>
            <div class="side-b separators"></div>
            <div class="side-b reports"><a class="side-buttons" href="reports.php">Reports</a></div>
            <div class="side-b users"><a class="side-buttons" href="">Users</a></div>
            <div class="side-b separators"></div>
            <p class="log-out-button"><a class="log-out" href="log_out.php">log out</a></p>
        </div>
        <div class="contents">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th class="id">ID</th>
                        <th class="name">Name</th>
                        <th class="email">Email</th>
                    </tr>
                </thead>
                <tbody>
                    
                    <?php
                        while($rows=mysqli_fetch_assoc($results)){
                            ?>
                                <tr>
                                    <td><?php echo $rows['id']; ?></td>
                                    <td><?php echo $rows['name']; ?></td>
                                    <td><?php echo $rows['email']; ?></td>
                                </tr>
                            <?php
                        }
                    ?>

                </tbody>
            </table>
        </div>
</body>
</html>


