<?php
require("../assets/connect.php");
$sql = "DELETE FROM artykul_producent where id='".$_POST['id']."'";
$conn->query($sql);
header("location:wieledowielu4.php");
?>