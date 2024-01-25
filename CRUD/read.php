<?php

include "../files/config.php";

$sql = "SELECT * FROM  user_form ORDER BY id ASC";
$result = mysqli_query($conn, $sql);

?>