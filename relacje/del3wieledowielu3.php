<?php
require("../assets/connect.php");
$sql = "DELETE FROM lekarz where id_lekarz='".$_POST['id']."'";
$conn->query($sql);
header("location:wieledowielu3.php");
?>