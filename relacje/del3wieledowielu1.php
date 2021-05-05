<?php
require("../assets/connect.php");
$sql = "DELETE FROM projekt where id_projekt='".$_POST['id']."'";
$conn->query($sql);
header("location:wieledowielu1.php");
?>