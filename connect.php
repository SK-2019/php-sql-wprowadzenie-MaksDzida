<?php
$servername = "remotemysql.com" ;
$username =  "2CMNLoipEx" ;
$password = "MVjnZFDUhb" ;
$dbname = "2CMNLoipEx";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  ?>
