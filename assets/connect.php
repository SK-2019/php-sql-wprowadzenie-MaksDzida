





    <?php


$servername = "db";
$username = "root";
$password = "root";
$dbname = "tom";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("<li>Connection failed: " . $conn->connect_error);
}else{
    
}

?>


