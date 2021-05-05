<?php
require("../assets/connect.php");
$sql = "DELETE FROM pacjent_lekarz where id='".$_POST['id']."'";
$conn->query($sql);
header("location:wieledowielu3.php");
?>