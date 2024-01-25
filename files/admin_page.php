<?php

@include '../CRUD/read.php';
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
<h2 class="title">welcome "<?php echo $_SESSION['admin_name'] ?>"</h2>
    <div class="container">
        <div class="table-div">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th class="id">ID</th>
                        <th class="name">Name</th>
                        <th class="email">Email</th>
                        <th class="msg">Message</th>
                        <th class="files">Files</th>
                        <th class="status">Status</th>
                    </tr>
                </thead>
                <tbody>
                    
                    <?php
                        while($rows=mysqli_fetch_assoc($result)){
                            ?>
                                <tr>
                                    <td><?php echo $rows['id']; ?></td>
                                    <td><?php echo $rows['name']; ?></td>
                                    <td><?php echo $rows['email']; ?></td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <select name="stat" id="select">
                                            <option value="0">-</option>
                                            <option value="1">Critical</option>
                                            <option value="2">Major</option>
                                            <option value="3">Minor</option>
                                            <option value="4">Case Closed</option>
                                        </select>
                                    </td>
                                </tr>
                            <?php
                        }
                    ?>

                </tbody>
            </table>
        </div>

        <p class="log-out-button"><a class="log-out" href="log_out.php">log out</a></p>
    </div>
</body>
</html>
