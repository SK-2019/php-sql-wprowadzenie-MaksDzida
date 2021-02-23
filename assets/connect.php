




<?php

    $conn= new mysqli($_SERVER['servername'],$_SERVER['username'],$_SERVER['password'],$_SERVER['dbname']);
    if ($conn->connect_error) {
        die("connection failed: ".mysqli_connect_error());
    }
?>


