




<?php
$hostname = $_SERVER['HTTP_HOST'];
if ($hostname === '127.0.0.1'){
    require_once("config.php");}
    
    $conn= new mysqli($_SERVER['servername'],$_SERVER['username'],$_SERVER['password'],$_SERVER['dbname']);
    if ($conn->connect_error) {
        die("connection failed: ".mysqli_connect_error());
    }
?>


