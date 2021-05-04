<?php
require("../assets/connect.php");
$sql = "DELETE FROM klasa where id='".$_POST['id']."'";
$conn->query($sql);
header("location:wieledowielu2.php");
?>